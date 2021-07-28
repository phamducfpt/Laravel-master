<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemoValidateRequest;
use Illuminate\Http\Request;

class DemoValidate extends Controller
{
    public function create(){
        return view('demo-validate');
    }
    public function store(DemoValidateRequest $request){
    $request->validated();
    }
}
