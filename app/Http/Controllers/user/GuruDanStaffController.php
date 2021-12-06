<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class GuruDanStaffController extends Controller
{
    public function index()
    {
        return view('user.Guru-Staff.index',[
            'principals' => Teacher::where('position_id','=','1')->get(),
            'teachers' => Teacher::where('position_id','!=','1')->orderBy('position_id','asc')->get(),
        ]);
    }

}
