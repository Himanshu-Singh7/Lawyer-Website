<?php

namespace App\Http\Controllers;

use App\lawer_type;
use App\register_lawer_table;
use App\career_detail_table;
use App\feedback;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use File;


class lawer_dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // if(!Session::get('username')){
        //     return redirect('');
        //     // return view('index');

        // }
        // else{

        
        $d =Session::get('username');
        $data =Session::get('law_type');
        $uid =Session::get('id');
        
        $al = lawer_type::all();
        
        
        $tt = lawer_type::where('id',$data)->first();
        
        $ee =  register_lawer_table::where('username',$d)->first();
        
        $appoint =  DB::table('appointment_tables')->where('lawer_assigned_id',$ee->id)->get();
        $get_feedback = feedback::where(['lawer_assigned_id'=>$uid])->get();

        $appoint_count = DB::table('appointment_tables')->where('lawer_assigned_id',$ee->id)->where('status','2')->count();
        
        $career = career_detail_table::where('uid',$uid)->get();
        if($career == ''){
            session()->flash('nocareerdetials','There is no Career details in your profile... Add some.');
            return view('lawer.dashboard_page')->with('dd',$tt)
                                                ->with('userdata',$ee)
                                                ->with('all',$al)
                                                ->with('appoint',$appoint)
                                                ->with('appoint_count',$appoint_count)
                                                ->with('feedback_data',$get_feedback);
        }else{
            
            // return view('lawer.dashboard_page');
            return view('lawer.dashboard_page')->with('dd',$tt)
                                                ->with('userdata',$ee)
                                                ->with('all',$al)
                                                ->with('appoint',$appoint)
                                                ->with('appoint_count',$appoint_count)
                                                ->with('career',$career)
                                                ->with('feedback_data',$get_feedback);

        }
    // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lawyer_payment(Request $request)
    {
        $data = request()->all();
        // echo "<pre>";
        // print_r($data);
        // die();
        $query = DB::table('appointment_tables')->where('id',$data['appoint_id'])->update(['payment_amount'=>$data['amount'],'payment_status'=>$data['payment_status']]);
        session()->flash('payment_amount_send','The Amount notification is send to the user.');
        return redirect('/dashboard_lawer');
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
            'lawer_type'=>'required',
            'case_name'=>'required',
            'court_name'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'case_statuss'=>'required',
            'case_description'=>'required',
        ]);
        $data=request()->all();
        $dd = new career_detail_table();
        $dd->uid = $data['uid'];
        $dd->lawer_type = $data['lawer_type'];
        $dd->case_name = $data['case_name'];
        $dd->court_name = $data['court_name'];
        $dd->start_date = $data['start_date'];
        $dd->end_date = $data['end_date'];
        $dd->end_date = $data['end_date'];
        $dd->case_statuss = $data['case_statuss'];
        $dd->case_description = $data['case_description'];
        $dd->save();
        session()->flash('career_add','Your Career Add Successfully');
        return redirect('/dashboard_lawer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function appoint_approve(Request $request)
    {
        $data = request()->all( );
            if($data['appoint'] == 'approve' ){
                $approve_table = DB::table('appointment_tables')->where('id',$data['id'])->update(['status'=>1]); 
                // print_r($approve_table).'<br>';
                // $approve_table->status=1;
                // $approve_table->update();
                return 'approved';
            }
            if($data['appoint'] == 'discart' ){
                $approve_table = DB::table('appointment_tables')->where('id',$data['id'])->update(['status'=>2]); 
                // print_r($approve_table).'<br>';
                // $approve_table->status=1;
                // $approve_table->update();
                return 'discart';
            }
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
    public function ajax_fn(Request $request)
    {
        // 2 for cancle , 1 for accept , 0 for no action
        $d        =  Session::get('username');
        $data     =  Session::get('law_type');
        $uid      =  Session::get('id');
        $ee       =  register_lawer_table::where('username',$d)->first();

        $appoint  = DB::table('appointment_tables')->where('lawer_assigned_id',$ee->id)->get();

        // $discart_appoint = DB::table('appointment_tables')->where('lawer_assigned_id',$ee->id)->where('status','2');
        // $appoint_count = DB::table('appointment_tables')->where('lawer_assigned_id',$ee->id)->where('status','2')->count();
        return $appoint;
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
        $da = register_lawer_table::find($id);
        $data = request()->all();
        // echo '<pre>';
        // print_r($data);
        // print_r($da);
        // echo '</pre>';
        // die();
        $da->first_name=$data['first_name'];
        $da->last_name=$data['last_name'];
        // $da->email=$data['email'];
        $da->address=$data['address'];
        $da->save();
        session()->flash('update_success','Your Details are updated successfully');
        return redirect('/dashboard_lawer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function image_change(Request $request)
    {
        echo '<pre>';
        print_r($request->all());
        // die();
        $check_image = register_lawer_table::where(['email'=>$request->lawyer_email,'id'=>$request->lawyer_id])->first();
        print_r($check_image);
        // die();
        if($request->hasFile('image_change'))
        {
           $exists_image = public_path("public/lawer_register/".$check_image->image);
        //    echo $exists_image;
           if (File::exists($exists_image))
           {
            File::delete($exists_image);
           }
           $new_image = $request->file('image_change');
           $filename =  rand().time().'.'.$new_image->getClientOriginalExtension();
           $destinationPath = public_path('/public/lawer_register');
           $new_image->move($destinationPath, $filename);
           $check_image->image = $filename;
           $check_image->save();
           session()->flash('Profile_image_changed','Your Profile Image is Changed Succesfully');
           return redirect('/');
        }
        else
        {
            session()->flash('no_image','Error in changing image.Try after some time.');
            return redirect('/');

        }
    }
}
