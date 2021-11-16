<?php

namespace App\Http\Controllers\admin;

use App\Models\News;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $showNews = News::latest()
            ->filter(request(['search']))
            ->paginate(request('show') ?? 10)
            ->withQueryString();

        return view('admin.News.index', [
            'news' => $showNews,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.News.storeNews');
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
            'title' => 'required',
            'image' => 'required|image|file|max:5120',
            'body' => 'required'
        ]);

        $validatedData['image'] = request()->file('image')->store('news-images', ['disk' => 'public']);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50, '...');
        $slug = new News();
        $validatedData['slug'] = $slug->setSlugAttribute($request->title);

        News::create($validatedData);
        return redirect('/admin/news')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.News.showNews', [
            'news' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.News.editNews', [
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $rules = [
            'title' => 'required',
            'image' => 'image|file|max:5120',
            'body' => 'required'
        ];


        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            File::delete('images/uploads/' . $news->image);
            $validatedData['image'] = request()->file('image')->store('news-images', ['disk' => 'public']);
        
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50, '...');

        if($request->title != $news->title)
        {
            $slug = new News();
            $validatedData['slug'] = $slug->setSlugAttribute($request->title);
        }

        News::where('id', $news->id)
            ->update($validatedData);

        return redirect('/admin/news')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        News::destroy($news->id);
        File::delete('images/uploads/' . $news->image);
        return redirect('/admin/news')->with('success', 'Data Berhasil Didelete');
    }
}
