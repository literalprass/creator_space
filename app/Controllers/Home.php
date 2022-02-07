<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        return view('home/index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'Home | About',
        ];
        return view('home/about', $data);
    }
}
