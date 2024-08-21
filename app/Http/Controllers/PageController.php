<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function propos()
    {
        return view('propos');
    }

    public function service()
    {
        return view('service');
    }

    public function cargo()
    {
        return view('cargo');
    }

    public function formation()
    {
        return view('formation');
    }

    public function jet()
    {
        return view('jet');
    }

    public function agence()
    {
        return view('agence');
    }
}