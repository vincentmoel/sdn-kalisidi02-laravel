<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        return view('user.Galeri.index',[
            'galeries' => Galery::latest()->paginate(20)
        ]);
    }
}
