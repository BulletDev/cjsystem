<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContestantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id = null)
    {
        if($id)
        {
            $contestants = DB::table('contestants')->select('id','contestant_no', 'first_name', 'middle_name', 'last_name')->get();
            $contestants_info = DB::table('contestants')->where('id', $id)->get();
            return view('contestants/show')
                ->with('contestants', $contestants)
                ->with('contestants_info', $contestants_info);

        }
        $contestants = DB::table('contestants')->select('id','contestant_no', 'first_name', 'middle_name', 'last_name')->get();
        $contestants_info = DB::table('contestants')->where('id', 1)->get();
        return view('contestants/show')
            ->with('contestants', $contestants)
            ->with('contestants_info', $contestants_info);
    }

    public function create()
    {
        return view('contestants/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name'=>'required|min:3|max:50',
            'middle_name'=>'required|min:3|max:50',
            'last_name'=>'required|min:3|max:50',
            'gender'=>'required',
            'age'=>'required|numeric',
            'attainment'=>'required',
            'school'=>'required',
            'weight'=>'required|numeric',
            'height'=>'required|numeric',
            'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bust_line'=>'required|numeric',
            'waist_line'=>'required|numeric',
            'hip_line'=>'required|numeric',
            'nationality'=>'required',
            'biography'=>'required',
        ]);

        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $filename = $request->photo->getClientOriginalName().'.'.$request->photo->getClientOriginalExtension();
            $image->move(public_path('uploads'), $filename);

            DB::table('contestants')->insert([
                'contestant_no' => $request->contestant_no,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'age' => $request->age,
                'attainment' => $request->attainment,
                'school' => $request->school,
                'course' => $request->course,
                'year' => $request->year,
                'weight' => $request->weight,
                'height' => $request->height,
                'bust_line' => $request->bust_line,
                'waist_line' => $request->waist_line,
                'hip_line' => $request->hip_line,
                'nationality' => $request->nationality,
                'biography' => $request->biography,
                'photo' => $filename
            ]);
            return redirect()->route('contestants.contestants')->with('success', 'Contestant successfully added!');
        }else{
            return redirect()->action('ContestantsController@create')->with('fail', 'Please add a photo');
        }
    }

    public function edit($id)
    {
        $contestants = DB::table('contestants')->where('id', '=', $id)->get();
        return view('contestants/edit')
            ->with('contestants', $contestants);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'contestant_no'=>'required|numeric|unique:contestants,contestant_no',
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'age'=>'required|numeric',
            'attainment'=>'required',
            'school'=>'required',
            'weight'=>'required|numeric',
            'height'=>'required|numeric',
            'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bust_line'=>'required|numeric',
            'waist_line'=>'required|numeric',
            'hip_line'=>'required|numeric',
            'nationality'=>'required',
            'biography'=>'required',
        ]);

        if($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = $request->photo->getClientOriginalName() . '.' . $request->photo->getClientOriginalExtension();
            $image->move(public_path('uploads'), $filename);

            DB::table('contestants')
                ->where('id', '=', $id)
                ->update([
                    'contestant_no' => $request->contestant_no,
                    'first_name' => $request->first_name,
                    'middle_name' => $request->middle_name,
                    'last_name' => $request->last_name,
                    'gender' => $request->gender,
                    'age' => $request->age,
                    'attainment' => $request->attainment,
                    'school' => $request->school,
                    'course' => $request->course,
                    'year' => $request->year,
                    'weight' => $request->weight,
                    'height' => $request->height,
                    'photo' => $filename,
                    'bust_line' => $request->bust_line,
                    'waist_line' => $request->waist_line,
                    'hip_line' => $request->hip_line,
                    'nationality' => $request->nationality,
                    'biography' => $request->biography,
                ]);
            return redirect()->route('contestants.contestants')->with('success', 'Contestant updated successfully');
        }
        else{
            $filename = $request->hidden_image;
            DB::table('contestants')
                ->where('id', '=', $id)
                ->update([
                    'contestant_no' => $request->contestant_no,
                    'first_name' => $request->first_name,
                    'middle_name' => $request->middle_name,
                    'last_name' => $request->last_name,
                    'gender' => $request->gender,
                    'age' => $request->age,
                    'attainment' => $request->attainment,
                    'school' => $request->school,
                    'course' => $request->course,
                    'year' => $request->year,
                    'weight' => $request->weight,
                    'height' => $request->height,
                    'photo' => $filename,
                    'bust_line' => $request->bust_line,
                    'waist_line' => $request->waist_line,
                    'hip_line' => $request->hip_line,
                    'nationality' => $request->nationality,
                    'biography' => $request->biography,
                ]);
            return redirect()->route('contestants.contestants')->with('success', 'Contestant updated successfully');
        }
    }

    public function destroy($id)
    {
        DB::table('contestants')->where('id', '=', $id)->delete();
        return redirect()->route('contestants.contestants')
            ->with('success', 'Contestant deleted successfully');

    }
}
