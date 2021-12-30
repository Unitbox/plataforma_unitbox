<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index() 
    {
        $posts = Cache::get('posts');

        dd($posts);

        return view('web.home', [
            'posts' => $posts
        ]);
    }

    public function privacidade() {

        return view('web.politicas.privacidade');
    }

    public function termos() {
        return view('web.politicas.termos');
    }
}
