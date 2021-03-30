<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class FirstTestController extends Controller
{
    public function index()
    {
        //Получение значений по name и user_id
        $task = Task::where('user_id', 1)->where('name', 'name')->get();
        foreach ($task as $item){
            echo $item->description;
        }

        //Получение 5 заданий по Description или Name
        $task = Task::where('description', 'Next Description')->orWhere('name', 'Next Name1')->take(5)->get();
        foreach ($task as $value){
            echo $value->name;
        }

        //Получение всех заданий с присоединенным (JOIN) email пользователя
        $task = DB::table('tasks')->leftJoin('users', 'tasks.user_id', '=', 'users.id')
            ->select('tasks.*', 'users.email')->get();
        foreach ($task as $item) {
            echo "ID:" . $item->id . "Email: " . $item->email . "Name: " . $item->name . "| ";
        }

        $task = Task::join('users', 'tasks.user_id', '=', 'users.id')->select('tasks.*', 'users.email')->get();
        foreach ($task as $item) {
            echo "ID:" . $item->id . "Email: " . $item->email . "Name: " . $item->name . "| ";
        }

        //hasOne чтобы получить пользователя который связан с этим заданием
        $user = Task::find(2)->user;
        echo $user->first_name;
        echo $user->second_name;

        //hasMany чтобы получить все задания которые связаны с пользователем
        $task = User::find(3)->tasks;
        foreach ($task as $item) {
            echo 'Name: ' . $item->name . ' Description: ' . $item->description . "\n";
        }

        //Аксессоры
        $users = User::all();
        foreach ($users as $user){
            echo $user->fullname."|";
        }

        $user = User::where('email', 'new@new.new')->first();
         dump($user->first_name);

        User::where('email', 'new@new.new')
            ->update(['first_name' => 'New Name 2']);

        $user = User::where('email', 'new@new.new')->first();
        dump($user->first_name);
       $user = User::where('email', 'new@new.new11')->first();

         $task = new Task();
         $task->name = 'Next Name3';
         $task->description = 'Next Description';
         $task->user_id = $user->id;

         $task->save();

        $user = User::where('email', 'new@new.new')->first();

        $task = Task::create([
            'name' => 'name',
            'description' => 'desc',
            'user_id' => $user->id,
        ]);
    }
}

