<?php

namespace App\Http\Controllers;

use App\lawer_type;
use App\career_detail_table;
use App\register_lawer_table;
use Illuminate\Http\Request;

class practice_page_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('practice_area');

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
        $get_single_user_data = register_lawer_table::where('law_type',$id)->get();
        $career_details = career_detail_table::all();
        $tt=lawer_type::find($id);
        // echo '<pre>';
        // print_r($tt);
        // die();

        return view('practice_area')->with('data',$tt)->with('lawer',$get_single_user_data)->with('career',$career_details);
        // $law_name ='';
        // $career_law_name =[];
        // $uid =[];
        // $reg_uid ='';
        // $tt=lawer_type::find($id);
        // foreach($tt as $d){
        //     $law_name =   $tt->law_type; 
        // }
        
        // $car = career_detail_table::all();
        // foreach($car as $c){
        //     $career_law_name[] = $c->lawer_type;
        //     $uid[] = $c->uid;
        // }
        // echo '<pre>';
        // echo $law_name;
        // print_r($uid);
        // die();
            // if($law_name == $career_law_name){
            //     $ll = register_lawer_table::where('id',$uid)->get();
            //     // echo $ll.'ddd'.'</br>'; 
            //     session()->flash('career');
            //     return view('practice_area')->with('data',$tt)->with('lawer',$ll)->with('career',$car);

            // }else{
            //     $ll = register_lawer_table::where('law_type',$id)->get();
            //     // echo $ll.'eee'.'</br>';
            //     $nocar = 'There is no career detail of this user... We will inform you as soon as the lawer will update the details.';
            //     return view('practice_area')->with('data',$tt)->with('lawer',$ll)->with('career',$nocar);

            


        // foreach($ll as $l){
        //     $reg_uid = $l->id;
        // }
        // echo 'lawer_type = '.$law_name.'</br>';
        // echo 'career = '.$career_law_name.'</br>';
        // echo 'career-id = '.$uid.'</br>';
        // echo 'regi-id = '.$reg_uid.'</br>';
        // die();
        // echo "<pre>";
        // print_r('career'.$car);
        // print_r('lawer_type'.$tt);
        // print_r('register'.$ll);
        // echo "</pre>";
        // die();
        // $car = career_detail_table::where('')
        // return view('practice_area')->with('data',$tt)->with('lawer',$ll)->with('career',$car);

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
