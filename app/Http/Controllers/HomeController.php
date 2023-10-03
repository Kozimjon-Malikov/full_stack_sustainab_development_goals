<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\News;
use App\Models\Tarjima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index(){
        $categories=Category::all();
        $banner=Banner::all();
        $all_news=News::all();
        $tarjima=Tarjima::all();
        return view('frontend.index',compact('categories','banner','all_news','tarjima'));
    }
}
