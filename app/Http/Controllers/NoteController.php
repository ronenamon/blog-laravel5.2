<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Page;
use App\Note;

class NoteController extends Controller
{
    //store the note text for the page with 2 parameters
    public function store(Request $request , Page $page){
        
        $note = new Note;
        //get the post from http post header
        $note->text = $request->text;
        //save the note inside the page id 
        $page->notes()->save($note);//Done!
        
        
        return back();
        
    }
    
    
}
