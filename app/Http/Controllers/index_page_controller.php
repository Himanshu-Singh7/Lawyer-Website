<?php

namespace App\Http\Controllers;

use App\lawer_type;
use App\register_lawer_table;
use App\Career_detail_table;
use App\feedback;
use Mail;
use Illuminate\Http\Request;
use Session;

class index_page_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public 
    public function index()
    {
        // echo 'dfd';
        // die();
        $ll = register_lawer_table::where('type','admin')->get();
        $user_feedback = register_lawer_table::where('type','user')->get();
        $appointment_option = register_lawer_table::where('type','admin')->distinct('email')->pluck('email','law_type');
        $feedback_data = feedback::all();
        $only_few = $ll->take(4);
        $ss = Session::get('variableName');
        $tt = lawer_type::all();
        $career_detail = Career_detail_table::all();

        // if($data =Session::get('type') == 'user'){
            if(!Session::get('id'))
            {
                session()->flash('login_required','Please login first');
                return view('index')->with('data',$tt,'ss',$ss)->with('attorney',$only_few)->with('career_detail',$career_detail)->with('lawer_detail',$ll)->with('appoint_option',$appointment_option)->with('feedback',$feedback_data)->with('user_feedback',$user_feedback);
            }else
            {
                if(Session::get('login_type') == 'user')
                {
                return view('index')->with('data',$tt,'ss',$ss)->with('attorney',$only_few)->with('career_detail',$career_detail)->with('lawer_detail',$ll)->with('appoint_option',$appointment_option)->with('feedback',$feedback_data)->with('user_feedback',$user_feedback);
                }else   
                {
                    return redirect('/dashboard_lawer');
                }
            }

            
            //
        // }else{
            // return redirect('dashboard_lawer');
        // }
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
    public function advice_email(Request $request)
    {
    //     $this->validate($request, [
    //         'email'  => 'required|email:rfn,dns',
    //    ]);
        $data = request()->all();
        // print_r($data);
        // die();
        $use = array('advice_email'=> $data['email']);
        Mail::send('email_success.advice_email',$use , function ($mm) use ($use){
            $mm->to($use['advice_email'])->subject('Law-Firm Website Advisor');
            $mm->from('admin_law_firm@gmail.com');
        });

        session()->flash('adviser_email_success','We got your email and very soon one of our advisor will contact you.');
        return redirect('/');
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
