<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class adminController extends Controller
{
    //

    public function dotest(){
        $mobiles = ['iphone' , 'galaxy' , 'test'];
        $v1 ="500";

        //way to pass data
        //['mobiles => $mobiles]
        return view('admin.do',compact('v1','mobiles'));


    }


}
