<?php

namespace App\Http\Controllers\admin;
use App\Models\Student;
use App\Models\Religion;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showStudents = Student::latest()
            ->filter(request(['search']))
            ->paginate(request('show') ?? 10)
            ->withQueryString();

        return view('admin.Student.index',[
            'students' => $showStudents,
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Student.storeStudent',[
            'religions' => Religion::all(),
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
            'nisn' => 'required|unique:students',
            'name' => 'required',
            'birthplace' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'religion_id' => 'required',
        ]);
        
        

        Student::create($validatedData);
        return redirect('/admin/students')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('admin.Student.editStudent',[
            'student' => $student,
            'religions' => Religion::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'nisn' => [
                'required',
                Rule::unique('students', 'nisn')->ignore($student->id)
            ],
            'name' => 'required',
            'birthplace' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'religion_id' => 'required',
        ]);

        Student::where('id',$student->id)->update($validatedData);
        return redirect('/admin/students')->with('success','Data Berhasil Diupdate');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {

        Student::destroy($student->id);
        return redirect('/admin/students')->with('success','Data Berhasil Didelete');
        
    }
}
