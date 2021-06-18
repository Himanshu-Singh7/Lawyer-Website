<?php

namespace App\Http\Controllers;

use App\register_lawer_table;
use App\appointment_table;
use Illuminate\Http\Request;
use Session;

class ajax_uses extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usercheck(Request $request)
    {
        $data = request()->all();
        $ch_user = $data['uname'];

        if($tt = register_lawer_table::where('username',$ch_user)->exists()){
            return 1;
        }else{
            return 0;
        }
 

    }
    public function emailcheck(Request $request)
    {
        $data = request()->all();
        $ch_email = $data['email'];

        if($tt = register_lawer_table::where('email',$ch_email)->exists()){
            return 1;
        }else{
            return 0;
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
    
    public function payment_alert_fn(Request $request)
    {
        $uid =  Session::get('id');
        $query = appointment_table::where('uid',$uid)->get();
        // print_r($query);
        return $query;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function change_password(Request $request)
    {
        $user_check_password = register_lawer_table::where(['email'=>$request->email_id,'id'=>$request->id])->first();
        if($user_check_password->password == $request->old_password)
        {
            return 'same';
        }else
        {
            return 'different';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function password_change_url(Request $request)
    {
        print_r($request->all());
        $change_password_check = register_lawer_table::where(['email'=>$request->email,'id'=>$request->id])->first();
        echo '<pre>';
        print_r($change_password_check);
        $change_password_check->password = $request->new_password;
        $change_password_check->save();
        Session::flush();
        session()->flash('passsword_change_done','Password change successfully. Now login with your new password');
        return redirect('/');

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
