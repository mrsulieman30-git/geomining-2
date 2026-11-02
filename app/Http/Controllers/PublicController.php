<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PublicController extends Controller
{
    public function home()
    {
        return Inertia::render('Public/Home');
    }

    public function services()
    {
        return Inertia::render('Public/Services');
    }

    public function laboratory()
    {
        return Inertia::render('Public/Laboratory');
    }

    public function contact()
    {
        return Inertia::render('Public/Contact');
    }
}
