<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiCallController extends Controller
{
    public function show()
    {
        $data = Http::get('https://jsonplaceholder.typicode.com/comments')->json();

        return view('apidata', [
            'data' => $data
        ]);
    }

}
