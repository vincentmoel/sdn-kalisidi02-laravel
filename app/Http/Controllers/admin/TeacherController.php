<?php

namespace App\Http\Controllers\admin;

use App\Models\Teacher;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Teacher-Staff.index', [
            'teachers' => Teacher::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Teacher-Staff.storeTeacher', [
            'positions' => Position::get()
        ]);
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
            'name' => 'required',
            'nip' => 'required|unique:teachers',
            'gender' => 'required',
            'position_id' => 'required',
            'image' => 'required|image|file|max:5120'
        ]);

        $validatedData['image'] = request()->file('image')->store('teachers-images', ['disk' => 'public']);

        // $validatedData['image'] = $request->file('image')->store('teachers-images');

        Teacher::create($validatedData);
        return redirect('/admin/teachers-staff')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teachersStaff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teachersStaff)
    {
        return view('admin.Teacher-Staff.editTeacher', [
            'teacher' => $teachersStaff,
            'positions' => Position::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teachersStaff)
    {
        $validatedData = $request->validate([
            'name' => [
                'required'
            ],
            'nip' => [
                'required',
                Rule::unique('teachers', 'nip')->ignore($teachersStaff->id)
            
            ],
            'gender' => [
                'required'
            ],
            'position_id' => [
                'required'
            ],
        ]);

        if ($request->file('image')) {
            File::delete('images/uploads/' . $teachersStaff->image);
            $validatedData['image'] = request()->file('image')->store('teachers-images', ['disk' => 'public']);
        }


        Teacher::where('id',$teachersStaff->id)->update($validatedData);
        return redirect('/admin/teachers-staff')->with('success','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teachersStaff)
    {
        Teacher::destroy($teachersStaff->id);
        File::delete('images/uploads/' . $teachersStaff->image);
        return redirect('/admin/teachers-staff')->with('success', 'Data Berhasil Didelete');
    }
}
