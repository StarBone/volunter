<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relawan;

class RelawanController extends Controller
{
    function index(){
        $relawans = Relawan::get();
        return view('superAdmin.index', compact('relawans'));
    }

    function forms(){
        return view('superAdmin.forms');
    }

    function submit(Request $request){
        $relawans = new Relawan();
        $relawans->title = $request->title;
        $relawans->description = $request->description;
        $relawans->detail_activity = $request->detail_activity;
        $relawans->period = \Carbon\Carbon::parse($request->period)->format('Y-m-d');
        $relawans->schedule_day = $request->schedule_day;
        $relawans->schedule_time = $request->schedule_time;
        $relawans->location = $request->location;
        $relawans->save();

        return redirect()->route('index');
    }
}
