<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $showGaleries = Galery::latest()
            ->filter(request(['search']))
            ->paginate(request('show') ?? 10)
            ->withQueryString();

        return view('admin.Galery.index',[
            'galeries' => $showGaleries,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Galery.storeGalery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|file|max:5120',
            'title' => 'required',
        ]);

        $validatedData['image'] = request()->file('image')->store('galeries-images', ['disk' => 'public']);

        Galery::create($validatedData);
        return redirect('/admin/galeries')->with('success', 'Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        return view('admin.Galery.editGalery',[
            'galery' => $galery,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Responsei
     */
    public function update(Request $request, Galery $galery)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'image|file|max:5120'
        ]);

        if ($request->file('image')) {
            File::delete('images/uploads/' . $galery->image);
            $validatedData['image'] = request()->file('image')->store('galeries-images', ['disk' => 'public']);
        }


        Galery::where('id',$galery->id)->update($validatedData);
        return redirect('/admin/galeries')->with('success','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        Galery::destroy($galery->id);
        File::delete('images/uploads/'.$galery->image);
        return redirect('/admin/galeries')->with('success','Data Berhasil Didelete');   

    }
}
