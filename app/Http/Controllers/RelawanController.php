<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relawan;

class RelawanController extends Controller
{
    function index(){
        $relawans = Relawan::get()->map(function ($relawan) {
            $relawan->period = \Carbon\Carbon::parse($relawan->period)->format('d F Y');
            $relawan->schedule_time = \Carbon\Carbon::parse($relawan->schedule_time)->format('H:i');
            return $relawan;
        });
        return view('superAdmin.index', compact('relawans'));
    }

    function forms(){
        return view('superAdmin.forms');
    }

    function submit(Request $request){
        $request->validate([  
            'schedule_time' => 'required|date_format:H:i:s',
        ]);

        $relawans = new Relawan();
        $relawans->title = $request->title;
        $relawans->description = $request->description;
        $relawans->detail_activity = $request->detail_activity;
        $relawans->period = \Carbon\Carbon::parse($request->period)->format('Y-m-d');
        $relawans->schedule_day = $request->schedule_day;
        $relawans->schedule_time = \Carbon\Carbon::parse($request->schedule_time)->format('H:i');
        $relawans->location = $request->location;
        $relawans->img_activity = $request->img_activity;
        $relawans->save();

        return redirect()->route('index');
    }
}
