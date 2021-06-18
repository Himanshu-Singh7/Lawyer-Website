<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register_lawer_table;
use App\lawer_type;
use App\appointment_table;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Mail;
class appointment_page extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('appointment');
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
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'law_type' => 'required',
            'message' => 'required',
        ]);
    if(Session::get('id') == null){
        session()->flash('login_request','Please Login first to access these facility');
        return redirect('/');
    }else{
        $uid = Session::get('id');
        $data =  request()->all();
        $dd = new appointment_table();
        $dd->uid = $uid;
        $dd->name = $data['name'];
        $dd->email = $data['email'];
        $dd->law_type = $data['law_type'];
        $dd->subject = $data['subject'];
        $dd->message = $data['message'];
        $randomDate = Carbon::now()->subDays(rand(-10,-20))->format('Y-m-d');
        if(!$request->lawer_assigned_id){
            $tt = register_lawer_table::where('law_type',$data['law_type'])->get()->random();
            $lawer_name = $tt['username'];
            $lawer_id = $tt['id'];
        }else{
            $lawer_name = $data['lawer_assigned_name'];
            $lawer_id = $data['lawer_assigned_id'];
        }
        $rand_id = rand(10,10000);
        $dd->appointment_date =  $randomDate;
        $dd->appointment_id = $rand_id;
        $dd->lawer_assigned_name = $lawer_name;
        $dd->lawer_assigned_id = $lawer_id;
        // echo '<pre>';
        // print_r($dd);
        // die();
        // echo '<pre>';
        // print_r($dd);
        // die();
        $mail_data = array('name'=>$data['name'],'email'=>$data['email'],'message'=>$data['message'],'date'=>$randomDate,'appoint_id'=>$rand_id,'lawer_assign'=>$lawer_name,'subject'=>$data['subject']);
        Mail::send('email_success.appoint_success',$mail_data,function($m) use ($mail_data){
            $m->to($mail_data['email'])->subject($mail_data['subject']);
            $m->from('xyz@gmail.com','Appointment Desk');
        });
        $dd->save();
        session()->flash('appoint_success','Your Appointment is successfully placed, all the details are send to you via your mail');
        return redirect('/');
    };
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
