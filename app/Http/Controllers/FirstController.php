<?php


namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstTestController extends Controller
{
    public function index()
    {
        echo 'test 1';
    }
}
