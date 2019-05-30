<?php

namespace App\Http\Controllers\Api\v1\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index(Request $request){
        return response('authenticated', 200);
    }
}
