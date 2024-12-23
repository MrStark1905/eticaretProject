<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
        public function anasayfa() {
            $slider=Slider::where("status", "1")->first();
            $title="anasayfa";

            $about=About::where("id", "1")->first();
            return view("frontend.pages.index", compact("slider", "title", "about"));
        }
}
