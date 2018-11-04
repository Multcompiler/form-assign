<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function forum(){
        return view('forum.view_all');
    }

    public function add_post(){
        return view('forum.add_post');
    }

    public function single_post(){
        return view('forum.view_single_post');
    }
}
