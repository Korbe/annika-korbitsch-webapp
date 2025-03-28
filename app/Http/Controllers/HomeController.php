<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Gallery;
use App\Models\Jewelry;

class HomeController extends Controller
{
    public function home()
    {
        return Inertia::render('Public/Home/Home', [
            "galleries" => Gallery::with('media')->latest()->take(6)->get(),
            "jewelries" => Jewelry::with('media')->latest()->get()
        ]);
    }

    public function about()
    {
        return Inertia::render('Public/About/About');
    }

    public function werke()
    {
        return Inertia::render('Public/Werke/Werke', [
            "galleries" => Gallery::with('media')->latest()->get(),
        ]);
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
