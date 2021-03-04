<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getHome()
    {
        return view('home');
    }

    public function privacyPolicy()
    {
        return view('privacyPolicy');
    }

    public function termsOfService()
    {
        return view('termsOfService');
    }
}
