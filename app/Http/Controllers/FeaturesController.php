<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FeaturesController extends Controller
{
    public function index()
    {
        return view('feature');
    }
}
