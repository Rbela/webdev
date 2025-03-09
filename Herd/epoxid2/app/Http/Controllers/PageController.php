<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function galerie() {
        return view('galerie');
    }

    public function kontakt() {
        return view('kontakt');
    }

    public function onas() {
        return view('onas');
    }

    public function sluzby() {
        return view('sluzby');
    }
}
