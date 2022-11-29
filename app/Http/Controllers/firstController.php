<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class firstController extends Controller
{
    public function getname(){
        return Response()->json(['hii']);
    }
}
