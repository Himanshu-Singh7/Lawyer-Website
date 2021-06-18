<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\lawer_type;
class add_lawer_type extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tt = lawer_type::all();
        return view('lawer.add_lawer')->with('data',$tt);

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
        $data = request()->all();
        $daa = new lawer_type;
        $daa->law_type=$data['type'];
        $daa->description=$data['description'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename =  rand().time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/public/contact');
            $image->move($destinationPath, $filename);
            $daa->image=$filename;
        }

        // echo '<pre>';
        // print_r($daa);
        // echo '</pre>';
        // die();
        $daa->save();
        return redirect('add_lawer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
