<?php

namespace App\Http\Controllers\user;
use App\Models\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index()
    {
        return view('user.Berita.index',[
            'allNews' => News::latest()->get(),
        ]);
    }

    public function show(News $news)
    {
        return view('user.Berita.show', [
            'news' => $news,
        ]);
    }
}
