<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(News $news)
    {

    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request,$name)
    {
        dd($name);
    }
}
