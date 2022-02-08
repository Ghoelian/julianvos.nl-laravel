<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

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

    public function verifyRecaptcha(Request $request) {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = ['secret' => env('RECAPTCHA_SECRET'), 'response' => $request->input('recaptcha_token')];

        $options = [
            'http' => [
                'header' => 'Content-type: application/x-www-form-urlencoded\r\n',
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $result = json_decode(file_get_contents($url, false, $context));

        if ($result->success && $result->score >= 0.7) {
            return '<p><span class="material-icons md-18">location_on</span> Emmen, Drenthe, NL</p>
            <p><span class="material-icons md-18">call</span> +31 6 48744406</p>
            <p><span class="material-icons md-18">email</span> <a href="mailto://post@julianvos.nl" />post@julianvos.nl</p>';
        } else {
            return false;
        }
    }
}
