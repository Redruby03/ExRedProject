<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "สวัสดีจากหน้า User Index";
    }

    public function show($id){
        return "เธอคือ ID ที่ $id";
    }

    public function update($idupdate){
        return "กำลัง update $idupdate";
    }
}
