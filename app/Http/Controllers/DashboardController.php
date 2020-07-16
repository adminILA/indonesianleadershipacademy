<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Blog;
use App\Gallery;
use App\Quote;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::check()){
            $totalBlog = DashboardController::CountBlog();
            $totalImage = DashboardController::CountImage();
            $totalQuote = DashboardController::CountQuote();
            return view('pages.admin.dashboard')->with(compact('totalBlog', 'totalImage', 'totalQuote'));
        }
        else
            return redirect()->route('login');
    }

    private function CountBlog () {
      $blog = Blog::all();
      $totalBlog = count($blog);
      return $totalBlog;
    }

    private function CountImage () {
      $gallery = Gallery::all();
      $totalImage = count($gallery);
      return $totalImage;
    }

    private function CountQuote () {
      $quote = Quote::all();
      $totalQuote = count($quote);
      return $totalQuote;
    }
}
