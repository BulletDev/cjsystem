<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = DB::table('event')->limit(1)->get();
        return view('event.show')->with('data', $data);
    }

    public function edit($id)
    {
        $data = DB::table('event')->where('id', '=', $id)->limit(1)->get();
        return view('event.update')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'date' => 'required|date'
        ]);    

        $data = DB::table('event')
        ->where('id', '=', $id)
        ->update([
            'title' => $request->title,
            'location' => $request->location,
            'date' => $request->date
        ]);
        return redirect()->route('event.show')->with('success', 'event successfully updated');
    }

}
