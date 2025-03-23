<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class meowcontroller extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Doraemon',
            'pekerjaan' => 'Developer',
        ];
        return view('home')->with($data);
    }

    public function contact()
    {
        return view('contact');
    }
}
