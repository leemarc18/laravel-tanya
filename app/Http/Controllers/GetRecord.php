<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetRecord extends Controller
{
    public static function get($get) {
         return DB::table("users") ->where("id", $id) ->get();
    }
}
