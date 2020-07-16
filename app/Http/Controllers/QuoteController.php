<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use Auth;
use App\Quote;
use App\User;
use DB;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
          $quotes = DB::table('quotes')->orderBy('updated_at', 'desc')->join('users', 'quotes.quote_author', '=', 'users.id')->select('users.name', 'quotes.*')->simplePaginate(6);
          return view('pages.admin.quote-list')->with('quotes', $quotes);
        }
        else{
          return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(Auth::check()){
          
          return view('pages.admin.quote-add');
        }
        else{
          return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quote_image_url = null;
        $upload_result = null;
        if(Auth::check()){
          $user = Auth::user();
          $quote = new Quote;

          if($request->hasFile('quote_image')){
            $image_file = $request->file('quote_image')->getRealPath();
            $image_title = $request->file('quote_image')->getClientOriginalName();
            Cloudder::upload($image_file, $image_title);
            $upload_result = Cloudder::getResult();
            if($upload_result){
              $quote_image_url = Cloudder::secureShow(Cloudder::getPublicId());
              $quote->quote_title = $request->quote_title;
              $quote->quote_author = $user->id;
              $quote->quote_owner = $request->quote_owner;
              $quote->quote_image = $quote_image_url;
              $quote->quote_desc = $request->quote_desc;
              $quote->save();
              return redirect()->route('quote-list')->with('success', 'Quote created!');
            }
            else{
              return redirect()->back()->with('error', 'Failed to create new quote. Please try again.');
            }
          }
          return redirect()->back()->with('error', 'Please add appropriate image.');
        }
        else{
          return redirect()->route('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function adminQuoteSearch (Request $request) {
      $search_key = trim($request->searchKey);
      $results;
      if(Auth::check()){
        if(strlen($search_key) > 0) {
          $results = DB::table('quotes')->orderBy('updated_at', 'desc')->join('users', 'quotes.quote_author', '=', 'users.id')->select('users.name', 'quotes.*')->where('quote_title','like',"%".$search_key."%")->simplePaginate(6);
          $results->appends($request->only('searchKey'));
          if(!$results->isEmpty()){
            return view('pages.admin.quote-list', ['quotes' => $results, 'search_key' => $request->searchKey]);
          } else {
            $results = [];
            return view('pages.admin.quote-list')->with('quotes', $results);
          }
        } else {
          $results = [];
          return view('pages.admin.quote-list')->with('quotes', $results);
        }
      }
      else{
        return redirect()->route('login');
      }
    }
}
