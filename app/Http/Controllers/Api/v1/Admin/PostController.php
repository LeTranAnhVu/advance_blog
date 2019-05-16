<?php

namespace App\Http\Controllers\Api\v1\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return response(['posts' => ['day la bai post 1']], 200);
    }
}
