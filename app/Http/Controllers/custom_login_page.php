<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\register_lawer_table;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Session;
use Hash;
use Illuminate\Support\Facades\Mail;

class custom_login_page extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('login_page');
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
        $data=request()->all();
        $uname = $data['username'];
        $password = $data['password'];
        $user = DB::table('register_lawer_tables')->where('email',$uname)->first();
        if($user == ''){
            session()->flash('error','You have enter wrong email'); 
            return redirect('/login_page');
        }else{
            if($user->password == $password){
                if($user->type == 'user'){
                // echo 'userpage'.'</br>';
                Session::put('username', $user->username);
                Session::put('id', $user->id);
                Session::put('profile_img', $user->image);
                Session::put('login_type', $user->type);
                Session::put('email', $user->email);
                
                return redirect('/');
                
            }elseif($user->type == 'admin'){
                // echo 'admin page'.'</br>';
                Session::put('username', $user->username);
                Session::put('profile_img', $user->image);
                Session::put('id', $user->id);
                Session::put('login_type', $user->type);
                Session::put('law_type',$user->law_type);
                Session::put('lawyer_email',$user->email);
                
                return redirect('/dashboard_lawer');
            }else{
                echo 'not permitable';
            }
        }else{
            
            session()->flash('error','You have enter wrong password'); 
            return redirect('/login_page');
        }
    }
        
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // die();
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
    public function edit($tt)
    {
        $tokenData = DB::table('password_resets')->where('token', $tt)->first();
        session()->flash('token_expire','Your token is expired , Please apply again for forget password to change the password. ');
        if ( !$tokenData ) return redirect('/'); //redirect them anywhere you want if the token does not exist.
        session()->flash('token_received');
        return view('password_reset_page')->with('tt',$tokenData->token);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = DB::table('register_lawer_tables')->where('email',$request->email)->first();
        if(!$user) return 0;
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => str_random(60), //change 60 to any length you want
            'created_at' => Carbon::now()
        ]);
        $tokenData = DB::table('password_resets')->where('email', $request->email)->first();
        $token = $tokenData->token;
        $email = $request->email; // or $email = $tokenData->email;
        $mail_data = array('token'=>$token,'email'=>$email);
        Mail::send('email_success.password_reset_mail',$mail_data,function($m) use ($mail_data){
            $m->to($mail_data['email'])->subject($mail_data['token']);
            $m->from('xyz@gmail.com','Appointment Desk');
        });
        return 1;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function passwordreset(Request $request , $token)
    {
        $data=request()->all();
        
        $password = $data['new_pass'];
        $tokenData = DB::table('password_resets')->where('token', $token)->first();
        $user = register_lawer_table::where('email', $tokenData->email)->first();
        // $user->password = Hash::make($password);
        $user->password = $password ;
        $user->update();
        DB::table('password_resets')->where('email', $user->email)->delete();
        session()->flash('pass_chng_success','You need to login again with new password.');
        return redirect('/');
    }
}
