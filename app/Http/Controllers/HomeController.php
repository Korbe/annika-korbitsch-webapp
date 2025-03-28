<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function home()
    {
        return Inertia::render('Public/Home/Home');
    }

    public function about()
    {
        return Inertia::render('Public/About/About');
    }

    public function portfolio()
    {
        return Inertia::render('Public/Werke/Werke');
    }

    public function imprint()
    {
        return Inertia::render('Public/Legal/Impressum');
    }

    public function cookies()
    {
        return Inertia::render('Public/Legal/Cookies');
    }
}
