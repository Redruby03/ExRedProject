<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todo =Todo::all();
        return $todo;
    }

    public function show($id){
        $todo =Todo::find($id);
        return $todo;
    }
}
