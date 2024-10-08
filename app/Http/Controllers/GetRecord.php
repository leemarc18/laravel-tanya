<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetRecord extends Controller
{
    public static function all($get) {
         return DB::table("users")->get();
    }
}
