<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $showStudents = Student::orderBy('nisn','asc')            
            ->filter(request(['search']))
            ->paginate(request('show') ?? 10)
            ->withQueryString();

        return view('user.Siswa.index',[
            'students' => $showStudents,
            'totalStudents' => Student::count()

        ]);
    }
}
