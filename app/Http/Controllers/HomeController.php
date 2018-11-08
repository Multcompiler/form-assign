<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);

        $subscribe = new Subscriber();
        $subscribe->email = $request->email;
        $subscribe->save();
        return response()->json(["message" => "success"]);

    }
}
