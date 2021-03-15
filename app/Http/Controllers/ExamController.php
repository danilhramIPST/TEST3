<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controlller;

class ExamController extends Controller
{
    public function get()
    {
        echo 'price';
    }
    public function show ($price) {
        echo $price;
    }
}
