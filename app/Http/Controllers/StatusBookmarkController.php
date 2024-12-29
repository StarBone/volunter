<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusBookmarkController extends Controller
{
    public function index()
    {
        return view('statusBookmark');
    }
}
