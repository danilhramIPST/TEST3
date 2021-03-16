<?php

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showName($name = null)
    {
        echo $name ?: 'User not found';
    }
}*/

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showName($name = null)
    {
        return view('user-name');
    }
}*/
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showName($name = null)
    {
        return view('user-name', [
            'name' => $name,
        ]);
    }
}*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showName($name = null)
    {
        $fakeArray = [
            ['lesson' => 'Introduction', 'level' => '1'],
            ['lesson' => 'Routes', 'level' => '2'],
            ['lesson' => 'Controllers', 'level' => '3'],
            ['lesson' => 'Views', 'level' => '4'],
        ];

        return view('user-name', [
            'name' => $name,
            'fakeData' => $fakeArray,
        ]);
    }
}
