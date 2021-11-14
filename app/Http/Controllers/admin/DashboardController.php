<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Galery;
use App\Models\News;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {

        return view('admin.Dashboard.index',[
            'totalTeachersStaff' => Teacher::count(),
            'totalStudents' => Student::count(),
            'totalNews' => News::count(),
            'totalGaleries' => Galery::count(),
            'totalUsers' => User::count(),
            'recentNews' => News::orderBy('id','desc')->limit(5)->get(),
            'recentGaleries' => Galery::orderBy('id','desc')->limit(5)->get(),
        ]);
    }
}
