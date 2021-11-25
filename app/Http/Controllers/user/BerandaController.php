<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\Galery;
use App\Models\News;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('user.Beranda.index',[
            'recentNews' => News::orderBy('id','desc')->limit(3)->get(),
            'recentGaleries' => Galery::orderBy('id','desc')->limit(3)->get(),

        ]);
    }
}
