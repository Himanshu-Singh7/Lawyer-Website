<?php

namespace App\Http\Controllers;
use App\register_lawer_table;
use App\Career_detail_table;
use Illuminate\Http\Request;

class case_page extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $ll = register_lawer_table::where('type','admin')->get();
        $career_detail = Career_detail_table::all();
        return view('case')->with('career_detail',$career_detail)->with('lawer_detail',$ll);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $special_id = $id;
        $ll = register_lawer_table::where('type','admin')->get();
        $career_detail = Career_detail_table::all();
        // return view('case')->with('career_detail',$career_detail)->with('lawer_detail',$ll)->with('special_id',$special_id);
        return view('case')->with('career_detail',$career_detail)->with('lawer_detail',$ll);
    }

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
        //
    }
}
