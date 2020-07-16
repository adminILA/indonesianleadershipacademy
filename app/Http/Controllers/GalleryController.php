<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use Auth;
use DB;
use App\Gallery;

class GalleryController extends Controller  
{
    function imageLoop(){
        $images = \File::allFiles(public_path('image'));
        //dd($images);    
        return view('pages.gallery')->with('images', $images);
    }

    public function galleryFrontEnd () {
      $images = Gallery::all();
      // dd($images);
      return view('pages.gallery')->with('images', $images);
    }

    public function store(Request $request){
      if(Auth::check()){
          $user = Auth::user();
          $gallery = new Gallery;
          $image_url = null;
          $options = array("height" => 400, "width" => 400, "crop" => "scale");
          if($request->hasFile('image_name')){
            $image_file = $request->file('image_name')->getRealPath();;  
            $image_title = $request->file('image_name')->getClientOriginalName();
            Cloudder::upload($image_file, $image_title);
            $result = Cloudder::getResult();
            // dd(Cloudder::upload($image_file, $image_title, $options));
            $image_url = $result["secure_url"];
          }
          
          $gallery->image_title = $request->image_title;
          $gallery->image_url = $image_url;
          $gallery->image_author = $user->id;
          $gallery->caption = $request->caption;
          $gallery->save();
          return redirect()->route('gallery-list');
      }
      else
          return redirect()->route('login');
    }

    public function destroy(Request $request){
      if(Auth::check()){
        DB::table('galleries')->where('id', $request->id)->delete();
        return redirect()->route('gallery-list');
      }
      else
        return redirect()->route('login');
    }

    function create(){
      if(Auth::check()){
          return view('pages.admin.add-image');
      }
      else
          return redirect()->route('login');
    }

    function edit($id){
      if(Auth::check()){
        $image = DB::table('galleries')->where('id', $id)->get();
        return view('pages.admin.edit-image')->with('image', $image);
      }
      else
        return redirect()->route('login');
    }

    function index(){
      if(Auth::check()){
        $gallery_list = DB::table('galleries')->join('users', 'galleries.image_author', '=', 'users.id')->select('users.name', 'galleries.*')->simplePaginate(20);
        return view('pages.admin.gallery-list')->with('image_list', $gallery_list);
      }
      else
        return redirect()->route('login');
    }

    function update(Request $request, $id){
      $image_url = null;
      if(Auth::check()){
        $image = Gallery::find($id);
        if($request->hasFile('image_name')){
          $image_file = $request->file('image_name')->getRealPath();;  
          $image_title = $request->file('image_name')->getClientOriginalName();
          Cloudder::upload($image_file, $image_title);
          $image_url = Cloudder::secureShow(Cloudder::getPublicId());
          $image->image_url = $image_url;
        }
        $image->image_title = $request->image_title;
        $image->caption = $request->caption;
        $image->save();
        return redirect()->route('gallery-list');
      }
      else {
        return redirect()->route('login');
      }
    }
}
