<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Response;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthApiController extends Controller
{

    public  function register(Request $request) {

        $validated = Validator::make($request->all(),[
            "email" => "required|string|email|max:255|unique:users",
            "username" => "required",
            "password" => "required",
        ]);

        if ($validated->fails()) {
            return Response::json($validated->errors());
        }

        return Response::json($request->all(),200);


    }

}
