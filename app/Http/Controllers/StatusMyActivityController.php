<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusMyActivityController extends Controller
{
    public function index()
    {
        return view('statusMy-activity');
    }
}