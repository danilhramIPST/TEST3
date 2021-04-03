<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        //dd($request);
        //dd($request->all());
        //dd($request->all());
        return view('testpost',['post'=>$request->all()]);
    }

}
