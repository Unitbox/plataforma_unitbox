<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        return view('web.home');
    }

    public function privacidade() {

        return view('web.politicas.privacidade');
    }

    public function termos() {
        return view('web.politicas.termos');
    }
}
