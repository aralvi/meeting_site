<?php

namespace App\Http\Controllers;

use App\Specialist;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function category_specialists($id)
    {
        $specialists = Specialist::where('category_id',$id)->get();
        return view('frontend.category_specialist',compact('specialists'));
    }
}
