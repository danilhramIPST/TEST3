<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function get()
    {
        echo 'price';
    }
    public function show($price) {
        echo $price;
    }
}
?>
