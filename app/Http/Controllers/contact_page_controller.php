<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\contact_table;
class contact_page_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        // print_r($data);
        // die();
        $daa = new contact_table;
        $daa->name=$data['name'];
        $daa->email=$data['email'];
        $daa->subject=$data['subject'];
        $daa->message=$data['message'];
        $daa->save();

        $use = array('u_email'=> $data['email'],'suj' => $data['subject'],'name'=>$data['name'],'message'=>$data['message']);


        Mail::send('email_success.contact_success', $use, function ($mm) use ($use) {
            $mm->to($use['u_email'])->subject($use['suj']);
            $mm->from('xyz@gmail.com','Website Admin');
         });

        session()->flash('contact_success','Your Contact is successfully registered in our database '); 
        return redirect('/contact_page');
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
