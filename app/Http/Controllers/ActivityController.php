<?php

namespace App\Http\Controllers;

use App\Models\Relawan;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    function index()
    {
        $relawans = Relawan::get()->map(function ($relawan) {
            $relawan->period = \Carbon\Carbon::parse($relawan->period)->format('d F Y');
            $relawan->schedule_time = \Carbon\Carbon::parse($relawan->schedule_time)->format('H:i');
            return $relawan;
        });
        return view('activity', compact('relawans'));
    }
}
