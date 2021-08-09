<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function save (){
        return view('event.events.createBook');
    }
    public function process(Request $request){
        $idBook = $request->get('idBook');
        $authorid = $request->get('authorid');
        $title = $request->get('title');
        $iSBN = $request->get('title');
        $pub_year = $request->get('pub_year');
        $available = $request->get('available');
        return view('saveSuccess')
    }
}
