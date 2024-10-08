<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteRecord extends Controller
{
    public static function delete($id) {
        $deleted = DB::table("users")->where("id", $id)->delete(); 
          if([$deleted]) {
            return [
                "success" => true,
                "massage" => "Successfully deleted"
            ];
        }
        else {
            return [
                "success"  => false,
                "message"  => "Fail to delete user"
            ];
        }
              
    } 
}
