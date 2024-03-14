<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function discord()
    {
        return view('discord.index');
    }
    public function gallery()
    {
        return view('gallery.index');
    }
    public function hardware()
    {
        return view('hardware.index');
    }
}
