<?php

namespace App\Http\Controllers;

use App\lawer_type;
use App\register_lawer_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;


class register_lawer_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tt = lawer_type::all();
        return view('lawer.register_lawer')->with('data',$tt);


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

        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:register_lawer_tables',
            'email' =>'required|email:rfn,dns',
            ]);

        if($validator->fails()){
            return response()->json(['username'=> ["UserName must be Unique and not empty"] ], 403);
        }

        $data=request()->all();
        print_r($data);
        // die();
        $dd= new register_lawer_table;
        $dd->gender=$data['gender'];
        $dd->law_type=$data['law_type'];
        $dd->first_name=$data['fname'];
        $dd->last_name=$data['lname'];
        $dd->username=$data['username'];
        $dd->email=$data['email'];
        $dd->password=$data['password'];
        $dd->father_n=$data['father_n'];
        $dd->mother_n=$data['mother_n'];
        $dd->contact=$data['contact'];
        $dd->alt_contact=$data['alt_contact'];
        $dd->dob=$data['dob'];
        $dd->address=$data['address'];
        $dd->state=$data['state'];
        $dd->city=$data['city'];
        $dd->postal_code=$data['postal_code'];
        $dd->type=$data['type'];

        // $dd->image=$data['image'];
        $use = array('u_email'=> $data['email'],'name'=>$data['username']);
        Mail::send('email_success.user_register_success', $use, function ($mm) use ($use) {
            $mm->to($use['u_email'])->subject('Register Successfully');
            $mm->from('xyz@gmail.com','Website Admin');
         });
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename =  rand().time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/public/lawer_register');
            $image->move($destinationPath, $filename);
            $dd->image=$filename;
            $dd->save();
            
        }
        
        // echo "<pre>";
        // print_r($dd);
        // echo "</pre>";
        // die();
        return redirect('/login_page');
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
