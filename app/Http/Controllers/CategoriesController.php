<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller   
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null, $name = null)
    {   
        if(!$id AND !$name){
            $data = DB::table('categories')->get();
            $dataCriteria = DB::table('criteria')
            ->where('category_id', '=', 1)
            ->get();
            $name = DB::table('categories')->first();
            
            return view('categories.show')
            ->with('data', $data)
            ->with('dataCriteria', $dataCriteria)
            ->with('dataCategory', $name->category);
            
        }
        else{

            $data = DB::table('categories')->get();
            $dataCriteria = DB::table('criteria')
            ->where('category_id', '=', $id)
            ->get();

            return view('categories.show')
            ->with('data', $data)
            ->with('dataCriteria', $dataCriteria)
            ->with('dataCategory', $name);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category' => 'required',
            'percentage' => 'required|between:0,99.99'
        ]);

        $sum = DB::table('categories')->sum('percentage');
        if ($sum+$request->percentage > 100 ) {
            return redirect()->back()->with('alert', 'The percentage exceeded. Please try again.');
        }
        else {
            DB::table('categories')->insert([
                'category' => $request->category,
                'percentage' => $request->percentage    
            ]);
            return redirect()->route('categories.show')->with('success', 'Category added successfully');
        }
    }

    public function storeCriteria(Request $request)
    {
        $this->validate($request,[
            'criteria' => 'required',
            'percentage' => 'required|between:0,99.99'
        ]);

        $sum = DB::table('criteria')->sum('percentage');
        if ($sum+$request->percentage > 100 ) {
            return redirect()->back()->with('alert', 'The percentage exceeded. Please try again.');
        }
        else {
            DB::table('criteria')->insert([
                'category_id' => $request->category_id,
                'criteria' => $request->criteria,
                'percentage' => $request->percentage    
            ]);
            return redirect()->route('criteria.show')->with('success', 'Criteria added successfully');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function showCriteria($id)
    // {
    //     $dataCriteria = DB::table('criteria')->where('category_id', '=', $id)->get();
    //     $data = DB::table('categories')->get();
    //     return view('categories.show')
    //     ->with('data', $data)
    //     ->with('dataCriteria', $dataCriteria);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categories')
        ->where('id', '=', $id)
        ->delete();
        return redirect()->route('categories.show')->with('success', 'Category deleted successfully');
    }
}
