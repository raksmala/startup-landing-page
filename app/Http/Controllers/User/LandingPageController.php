<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    /**
     * Show the landing page.
     */
    public function index() {
        return view('user.pages.landing-page');
    }
}
