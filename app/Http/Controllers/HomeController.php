<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Products\Models\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function turma()
    {
        return view('turma');
    }
}
