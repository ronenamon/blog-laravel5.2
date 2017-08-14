<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Page;

class PageController extends Controller
{
    //
    
    public function show() {
        
        //connect directly to DB BUT use DB
        $pages = DB::table('pages')->get();
        
        
        return view('pages.show' , compact('pages'));
        
    }
    
    public function onepage(Page $page){
        return view('pages.onepage' , compact('page'));
    }

    



    public function store(Request $request){
        
        $page = new Page;
        $page->title = $request->title;
        
        
        $page->save();
        
        return back();
            
    }
    
    
      public function delete(Page $page){
        
        $page->delete();
        return back();
            
    }
    
    
}
