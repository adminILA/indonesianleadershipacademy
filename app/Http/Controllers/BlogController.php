<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Blog;
use App\User;
use DB;

class BlogController extends Controller
{
    public function index(){
        if(Auth::check()){
            $blogs = DB::table('blogs')->join('users', 'blogs.blog_author', '=', 'users.id')->select('users.name', 'blogs.*')->simplePaginate(15);
            return view('pages.admin.blog-list')->with('blogs', $blogs);
        }
        else
            return redirect()->route('login');
    }

    public function create(Request $request){
        if(Auth::check()){
            return view('pages.admin.blog-add');
        }
        else
            return redirect()->route('login');
    }
    
    public function store(Request $request){
        $user = Auth::user();
        if(Auth::check()){
            $blog = new Blog;
            $blog->blog_title = $request->blog_title;
            $blog->blog_source = $request->source;
            $blog->body = $request->body;
            $blog->blog_author = $user->id;
            $blog->save();

            return redirect()->route('blog-list');
        }
        else
            return redirect()->route('login');
    }

    public function show($id){
      $blog = Blog::find($id);
      $author_name = User::find($blog->blog_author);
      $blog->blog_author = $author_name->name;
      return view('pages.blog-detail', compact('blog'));
    }
    public function blogsPage(Request $request){
        $blogs = DB::table('blogs')->simplePaginate(10);
        return view('pages.blogs')->with('blogs', $blogs);
    }
    public function destroy(Request $request) {
      if(Auth::check()) {
        DB::table('blogs')->where('id', $request->id)->delete();
        return redirect()->route('blog-list');
      }
      else
        return redirect()->route('login');
    }
    public function searchBlog (Request $request){
        $search_key = trim($request->searchKey);
        $results;
        if(strlen($search_key) > 0) {
          $results = DB::table('blogs')->where('blog_title','like',"%".$search_key."%")->simplePaginate(10);
          $results->appends($request->only('searchKey')); 
          if(!$results->isEmpty()){
            return view('pages.blogs', ['blogs' => $results, 'search_key' => $request->searchKey]);
          } else {
            $results = [];
            return view('pages.blogs')->with('blogs', $results);
          }
        } else {
          $results = [];
          return view('pages.blogs')->with('blogs', $results);
        }
    }
    public function adminSearchBlog (Request $request){
      $search_key = trim($request->searchKey);
      $results;
      if(strlen($search_key) > 0) {
        $results = DB::table('blogs')->join('users', 'blogs.blog_author', '=', 'users.id')->select('users.name', 'blogs.*')->where('blog_title','like',"%".$search_key."%")->simplePaginate(9);
        $results->appends($request->only('searchKey'));
        if(!$results->isEmpty()){
          return view('pages.admin.blog-list', ['blogs' => $results, 'search_key' => $request->searchKey]);
        } else {
          $results = [];
          return view('pages.admin.blog-list')->with('blogs', $results);
        }
      } else {
        $results = [];
        return view('pages.admin.blog-list')->with('blogs', $results);
      }
    }
    public function getAllBlogs(Request $request){
        if(Auth::check()){
            $blogs = DB::table('blogs')->simplePaginate(10);
            return view('pages.admin.blog-list')->with('blogs', $blogs);
        }
        else
            return redirect()->route('login');

        return view('pages.admin.blog-list')->with('blogs', $blogs);
    }

    public function edit($id){
      if(Auth::check()){
        $blog = DB::table('blogs')->where('id', $id)->get();
        return view('pages.admin.blog-edit')->with('blog', $blog);
      }
      else
        return redirect()->route('login');
    }

    public function update(Request $request, $id){
      if(Auth::check()){
        $blog = Blog::where('id', '=', $id)->first();
        $blog->update($request->all());
        return redirect()->route('blog-list');
      }
      else
        return redirect()->route('login');
    }
}
