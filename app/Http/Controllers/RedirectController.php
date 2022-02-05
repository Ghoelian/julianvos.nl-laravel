<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    public function redirect(Request $request)
    {
        $redirectUrl = $request->input('redirectUrl');

        return Redirect::to($redirectUrl);
    }
}
