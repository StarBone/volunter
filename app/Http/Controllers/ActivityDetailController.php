<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityDetailController extends Controller
{
    public function index()
    {
        return view('activity-detail');
    }
}
