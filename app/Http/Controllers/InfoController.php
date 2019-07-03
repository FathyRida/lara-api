<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class InfoController extends Controller
{

    public function index()
    {
        return JsonResponse::create(["name"=>"good"],200);
    }
}
