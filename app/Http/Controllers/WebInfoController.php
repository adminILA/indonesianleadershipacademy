<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteInfo;
use Auth;
class WebInfoController extends Controller
{
    public function index(){
        if(Auth::check()){
            $webInfoData = WebsiteInfo::all();
            return view('pages.admin.web-info')->with('webInfoData', $webInfoData);
        }
        else
            return redirect()->route('login');
    }
    public function edit(){
        if(Auth::check()){
            $webInfoData = WebsiteInfo::all();
            return view('pages.admin.web-info-edit')->with('webInfoData', $webInfoData);
        }
        else
            return redirect()->route('login');
    }

    public function update(Request $request, WebsiteInfo $websiteInfo){
        if(Auth::check()){
            dd($request->all());
            if($websiteInfo->fill($request->all())->save()){
                return redirect()->route('web-info')->withSuccess('message', 'Information has been updated');
            }
            else
                return redirect()->back()->withErrors('Update failed. Please try again!');
        }
        else
            return redirect()->route('login');
    }
}
