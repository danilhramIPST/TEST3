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

    public $products =
        [
            ['price' => 'Pork', 'date' => '16.03.2021'],
            ['price' => 'Ketchup', 'date' => '25.07.2021'],
            ['price' => 'Milk', 'date' => '22.03.2021'],
            ['price' => 'Potato', 'date' => '10.03.2021'],
        ];

    public function sendView()
    {
        return view('products', ['products' => $this->products]);
    }


}
