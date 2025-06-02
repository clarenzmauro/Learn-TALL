<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // will be used later

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Clarenz',
            'occupation' => 'Student, Trader, Writer',
        ];
        return view('hello', $data); // still uses the 'hello' view
    }

    // more methods here later
    
}
