<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EnvController extends Controller
{
    public static function settings($name){
        $setting = EnvController::where('name',$name)->first();
        if(count($setting)> 0){
            return $setting->value;
        }else{
           return ""; 
        }
        
    }
}
