<?php

namespace App\Http\Controllers;

use App\register_lawer_table;
use App\appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\lawer_type;
use App\feedback;

class user_dashboard_page extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(!Session::get('username')){
        //     return redirect('');
        //     // return view('index');

        // }
        // else{
            $user_id=Session::get('id');
            $user_name=Session::get('username');
            $user = DB::table('register_lawer_tables')->where('id',$user_id)->where('username',$user_name)->get();
            $appoint = DB::table('appointment_tables')->where('uid',$user_id)->get();
            $appoint_count = DB::table('appointment_tables')->where('uid',$user_id)->count();
            $get_feedback = feedback::where(['user_id'=>$user_id])->get();
            // echo "<pre>";
            // print_r($get_feedback);
            // die();
            // return view('user_dashboard.dashboard_page',['userdata',$user]);
            return view('user_dashboard.dashboard_page')->with('userdata',$user)->with('appoint',$appoint)->with('appoint_count',$appoint_count)->with('feedback_data',$get_feedback);
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
    public function store(Request $request)
    {
        //
    }

    // ajax-fn

    public function ajax_fn(Request $request)
    {
        // 2 for cancle , 1 for accept , 0 for no action
        $d        =  Session::get('username');
        $data     =  Session::get('law_type');
        $uid      =  Session::get('id');
        $ee       =  register_lawer_table::where('username',$d)->first();
        $appoint  = DB::table('appointment_tables')->where('uid',$ee->id)->get();
        // $discart_appoint = DB::table('appointment_tables')->where('lawer_assigned_id',$ee->id)->where('status','2');
        // $appoint_count = DB::table('appointment_tables')->where('lawer_assigned_id',$ee->id)->where('status','2')->count();
        // echo "<pre>";
        // print_r($appoint);
        return $appoint;
    }

    public function ajax_fn_edit_data(Request $request)
    {
        $user_id=Session::get('id');
        $user_name=Session::get('username');
        $data = request()->all();
        $column_data = $data['data'];
        $column_name = $data['uni_id'];
        $edit_user_data = DB::table('register_lawer_tables')->where('id',$user_id)->update([$column_name=>$column_data]);
        $new_data = DB::table('register_lawer_tables')->where('id',$user_id)->get();
        return $new_data;


        // $d        =  Session::get('username');
        // $data     =  Session::get('law_type');
        // $uid      =  Session::get('id');
        // $ee       =  register_lawer_table::where('username',$d)->first();
        // $appoint  = DB::table('appointment_tables')->where('uid',$ee->id)->get();
        // // $discart_appoint = DB::table('appointment_tables')->where('lawer_assigned_id',$ee->id)->where('status','2');
        // // $appoint_count = DB::table('appointment_tables')->where('lawer_assigned_id',$ee->id)->where('status','2')->count();
        // return $appoint;
    }

    // end

    public function ajax_delete_appointment(Request $request){
        $data = request()->all();
        $query =DB::table('appointment_tables')->where('id',$data['delete_id'])->delete();
        return 1; 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function attorneys()
    {
        $lawyer_data = register_lawer_table::where('type','admin')->get();
        $appointment_option = register_lawer_table::where('type','admin')->distinct('email')->pluck('email','law_type');
        $law_type = lawer_type::all();
        return view('attorneys')->with('lawyer_data',$lawyer_data)->with('law_type',$law_type)->with('appoint_option',$appointment_option);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function feedback_form(Request $request)
    {
        $insert_feedback =new feedback();
        $insert_feedback->user_id = $request->user_id;
        $insert_feedback->name = $request->name;
        $insert_feedback->email = $request->email;
        $insert_feedback->law_type = $request->law_type;
        $insert_feedback->law_type_name = $request->law_type_name;
        $insert_feedback->lawer_assigned_id = $request->lawer_assigned_id;
        $insert_feedback->lawer_assigned_name = $request->lawer_assigned_name;
        $insert_feedback->subject = $request->subject;
        $insert_feedback->message = $request->message;
        $insert_feedback->save();
        session()->flash('feedback_send','Your feedback is successfully send');
        return redirect('/');
        echo '<pre>';
        print_r($insert_feedback);
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
    





    // paytm url's
    public function payment_fn(Request $request)
    {
        $dd = request()->all();
        // die();
        $appointment_order_id = $dd['appoint_id']; 
        $payment_order_id = uniqid(); 
        $amount = $dd['amount'];
        // $amount = $dd['payment_status'];
        $query = DB::table('appointment_tables')->where('id',$appointment_order_id)->update(['payment_order_id'=>$payment_order_id]);
        echo '<pre>';
        // echo $payment_order_id;
        // print_r($query);

        // die();
        
        $data_for_request = $this->handlePaytmRequest($payment_order_id , $amount);
        $paytm_txn_url = 'https://securegw-stage.paytm.in/theia/processTransaction';
	    $paramList = $data_for_request['paramList'];
        $checkSum = $data_for_request['checkSum'];  
        // return $checkSum ;
        // die();
        return view( 'payment-merchant-form', compact( 'paytm_txn_url', 'paramList', 'checkSum' ));
    }

    // payment hadlerequestfn_code
    public function handlePaytmRequest($payment_order_id, $amount) {
		// Load all functions of encdec_paytm.php and config-paytm.php
		$this->getAllEncdecFunc();
		$this->getConfigPaytmSettings();

		$checkSum = "";
		$paramList = array();

		// Create an array having all required parameters for creating checksum.
		$paramList["MID"] = 'wSsmEN64869628261975';
		$paramList["ORDER_ID"] = $payment_order_id;
		$paramList["CUST_ID"] = $payment_order_id;
		$paramList["INDUSTRY_TYPE_ID"] = 'Retail';
		$paramList["CHANNEL_ID"] = 'WEB';
		$paramList["TXN_AMOUNT"] = $amount;
		$paramList["WEBSITE"] = 'WEBSTAGING';
		$paramList["CALLBACK_URL"] = url( '/paytm-callback' );
        $paytm_merchant_key = 'gVaH&G!#vttQ5h!8';
        

		//Here checksum string will return by getChecksumFromArray() function.
		$checkSum = getChecksumFromArray( $paramList, $paytm_merchant_key );
		return array(
            'checkSum' => $checkSum,
			'paramList' => $paramList
        );


	}
    
    // payment getallfun_code 
    function getAllEncdecFunc(){
        function encrypt_e($input, $ky) {
            $key   = html_entity_decode($ky);
            $iv = "@@@@&&&&####$$$$";
            $data = openssl_encrypt ( $input , "AES-128-CBC" , $key, 0, $iv );
            return $data;
        }
        
        function decrypt_e($crypt, $ky) {
            $key   = html_entity_decode($ky);
            $iv = "@@@@&&&&####$$$$";
            $data = openssl_decrypt ( $crypt , "AES-128-CBC" , $key, 0, $iv );
            return $data;
        }
        
        function generateSalt_e($length) {
            $random = "";
            srand((double) microtime() * 1000000);
        
            $data = "AbcDE123IJKLMN67QRSTUVWXYZ";
            $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
            $data .= "0FGH45OP89";
        
            for ($i = 0; $i < $length; $i++) {
                $random .= substr($data, (rand() % (strlen($data))), 1);
            }
        
            return $random;
        }
        
        function checkString_e($value) {
            if ($value == 'null')
                $value = '';
            return $value;
        }
        
        function getChecksumFromArray($arrayList, $key, $sort=1) {
            if ($sort != 0) {
                ksort($arrayList);
            }
            $str = getArray2Str($arrayList);
            $salt = generateSalt_e(4);
            $finalString = $str . "|" . $salt;
            $hash = hash("sha256", $finalString);
            $hashString = $hash . $salt;
            $checksum = encrypt_e($hashString, $key);
            return $checksum;
        }
        function getChecksumFromString($str, $key) {
            
            $salt = generateSalt_e(4);
            $finalString = $str . "|" . $salt;
            $hash = hash("sha256", $finalString);
            $hashString = $hash . $salt;
            $checksum = encrypt_e($hashString, $key);
            return $checksum;
        }
        
        function verifychecksum_e($arrayList, $key, $checksumvalue) {
            $arrayList = removeCheckSumParam($arrayList);
            ksort($arrayList);
            $str = getArray2StrForVerify($arrayList);
            $paytm_hash = decrypt_e($checksumvalue, $key);
            $salt = substr($paytm_hash, -4);
        
            $finalString = $str . "|" . $salt;
        
            $website_hash = hash("sha256", $finalString);
            $website_hash .= $salt;
        
            $validFlag = "FALSE";
            if ($website_hash == $paytm_hash) {
                $validFlag = "TRUE";
            } else {
                $validFlag = "FALSE";
            }
            return $validFlag;
        }
        
        function verifychecksum_eFromStr($str, $key, $checksumvalue) {
            $paytm_hash = decrypt_e($checksumvalue, $key);
            $salt = substr($paytm_hash, -4);
        
            $finalString = $str . "|" . $salt;
        
            $website_hash = hash("sha256", $finalString);
            $website_hash .= $salt;
        
            $validFlag = "FALSE";
            if ($website_hash == $paytm_hash) {
                $validFlag = "TRUE";
            } else {
                $validFlag = "FALSE";
            }
            return $validFlag;
        }
        
        function getArray2Str($arrayList) {
            $findme   = 'REFUND';
            $findmepipe = '|';
            $paramStr = "";
            $flag = 1;	
            foreach ($arrayList as $key => $value) {
                $pos = strpos($value, $findme);
                $pospipe = strpos($value, $findmepipe);
                if ($pos !== false || $pospipe !== false) 
                {
                    continue;
                }
                
                if ($flag) {
                    $paramStr .= checkString_e($value);
                    $flag = 0;
                } else {
                    $paramStr .= "|" . checkString_e($value);
                }
            }
            return $paramStr;
        }
        
        function getArray2StrForVerify($arrayList) {
            $paramStr = "";
            $flag = 1;
            foreach ($arrayList as $key => $value) {
                if ($flag) {
                    $paramStr .= checkString_e($value);
                    $flag = 0;
                } else {
                    $paramStr .= "|" . checkString_e($value);
                }
            }
            return $paramStr;
        }
        
        function redirect2PG($paramList, $key) {
            $hashString = getchecksumFromArray($paramList);
            $checksum = encrypt_e($hashString, $key);
        }
        
        function removeCheckSumParam($arrayList) {
            if (isset($arrayList["CHECKSUMHASH"])) {
                unset($arrayList["CHECKSUMHASH"]);
            }
            return $arrayList;
        }
        
        function getTxnStatus($requestParamList) {
            return callAPI(PAYTM_STATUS_QUERY_URL, $requestParamList);
        }
        
        function getTxnStatusNew($requestParamList) {
            return callNewAPI(PAYTM_STATUS_QUERY_NEW_URL, $requestParamList);
        }
        
        function initiateTxnRefund($requestParamList) {
            $CHECKSUM = getRefundChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY,0);
            $requestParamList["CHECKSUM"] = $CHECKSUM;
            return callAPI(PAYTM_REFUND_URL, $requestParamList);
        }
        
        function callAPI($apiURL, $requestParamList) {
            $jsonResponse = "";
            $responseParamList = array();
            $JsonData =json_encode($requestParamList);
            $postData = 'JsonData='.urlencode($JsonData);
            $ch = curl_init($apiURL);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);                                                                  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                         
            'Content-Type: application/json', 
            'Content-Length: ' . strlen($postData))                                                                       
            );  
            $jsonResponse = curl_exec($ch);   
            $responseParamList = json_decode($jsonResponse,true);
            return $responseParamList;
        }
        
        function callNewAPI($apiURL, $requestParamList) {
            $jsonResponse = "";
            $responseParamList = array();
            $JsonData =json_encode($requestParamList);
            $postData = 'JsonData='.urlencode($JsonData);
            $ch = curl_init($apiURL);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);                                                                  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                         
            'Content-Type: application/json', 
            'Content-Length: ' . strlen($postData))                                                                       
            );  
            $jsonResponse = curl_exec($ch);   
            $responseParamList = json_decode($jsonResponse,true);
            return $responseParamList;
        }
        function getRefundChecksumFromArray($arrayList, $key, $sort=1) {
            if ($sort != 0) {
                ksort($arrayList);
            }
            $str = getRefundArray2Str($arrayList);
            $salt = generateSalt_e(4);
            $finalString = $str . "|" . $salt;
            $hash = hash("sha256", $finalString);
            $hashString = $hash . $salt;
            $checksum = encrypt_e($hashString, $key);
            return $checksum;
        }
        function getRefundArray2Str($arrayList) {	
            $findmepipe = '|';
            $paramStr = "";
            $flag = 1;	
            foreach ($arrayList as $key => $value) {		
                $pospipe = strpos($value, $findmepipe);
                if ($pospipe !== false) 
                {
                    continue;
                }
                
                if ($flag) {
                    $paramStr .= checkString_e($value);
                    $flag = 0;
                } else {
                    $paramStr .= "|" . checkString_e($value);
                }
            }
            return $paramStr;
        }
        function callRefundAPI($refundApiURL, $requestParamList) {
            $jsonResponse = "";
            $responseParamList = array();
            $JsonData =json_encode($requestParamList);
            $postData = 'JsonData='.urlencode($JsonData);
            $ch = curl_init($apiURL);	
            curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_URL, $refundApiURL);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            $headers = array();
            $headers[] = 'Content-Type: application/json';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);  
            $jsonResponse = curl_exec($ch);   
            $responseParamList = json_decode($jsonResponse,true);
            return $responseParamList;
        }
    } 

    // payment getPaymentSetting
    function getConfigPaytmSettings(){
        define('PAYTM_ENVIRONMENT', 'TEST'); // PROD
        define('PAYTM_MERCHANT_KEY', 'gVaH&G!#vttQ5h!8'); //Change this constant's value with Merchant key received from Paytm.
        define('PAYTM_MERCHANT_MID', 'wSsmEN64869628261975'); //Change this constant's value with MID (Merchant ID) received from Paytm.
        define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); //Change this constant's value with Website name received from Paytm.

        $PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/merchant-status/getTxnStatus';
        $PAYTM_TXN_URL='https://securegw-stage.paytm.in/theia/processTransaction';
        if (PAYTM_ENVIRONMENT == 'PROD') {
            $PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
            $PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
        }

        define('PAYTM_REFUND_URL', '');
        define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
        define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
        define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
    }




    // paymentcheck
    public function paymentCallback( Request $request ) {
        
        // return $request;
        // die();
		$payment_order_id = $request['ORDERID'];

		if ( 'TXN_SUCCESS' === $request['STATUS'] ) {
            echo 'success';
			$transaction_id = $request['TXNID'];
			$order = DB::table('appointment_tables')->where('payment_order_id',$payment_order_id)->update(['payment_status'=>2,'transaction_id'=>$transaction_id]);
			// $order-> = '1';
			// $order->transaction_id = $;
            // $order->save();
            session()->flash('Payment_Done','Payment is done');
			return redirect( 'dashboard_page');

		} else if( 'TXN_FAILURE' === $request['STATUS'] ){
            echo 'error';
            // session()->flash('payment-fail','The Payment is failed.Please try after sometime.');
			// return redirect('dashboard_page');
		}
	}



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout_link()
    {
        Session::flush();
        return redirect('/');
    }
}
