
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register As Lawer </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('register/css/style.css')}}">
    <style>
    .usercheck{
        /* border-bottom: 2px solid #ebebeb; */
        border-bottom: 2px solid red;
        /* background:#f14444c2 !important; */
        padding:10px !important; 
    }
    
    </style>
</head>
<body>

    <div class="main">

        <div class="container">
            <form action="/register_lawer_form" method="POST" class="appointment-form" id="appointment-form" enctype="multipart/form-data">
            @csrf()
            <span style='color:red;font-size:30px;float:right;cursor: pointer;' onclick="location.href='http://127.0.0.1:8000/'">&times; </span>
                <h2 class='text-center'>Lawer Register Page</h2>
                <div class="form-group">
                <!-- <div class="select-list"> -->
                        <select name="gender" id="confirm_type">
                            <option value='mr'>Male</option>
                            <option value='mrs' >Female</option>
                        </select>
                    <!-- </div> -->
                    <input type="hidden" name="type" value='admin' readonly required />
                    <select name="law_type" id="" class='form-control'>
                @foreach($data as $dd)
                    <option value="{{$dd->id}}">{{$dd->law_type}}</option>
                @endforeach
                </select>
                    <input type="text" name="fname" id="title" placeholder="First name" required />
                    <input type="text" name="lname" id="title" placeholder="Last name" />
                    <div style='position:relative'>
                    <input type="text" name="username" pattern='[a-z]{1,15}' title='Username should only contain lowercase letters . e.g = jarvis' id="username"  placeholder="Username" required />
                    <div id='user_check' style=' position: absolute;
                                                        top: -25px;
                                                        box-shadow: grey -2px 1px 8px;
                                                        color: white;
                                                        text-shadow: darkred 1px 2px 6px;
                                                        right: -87%;
                                                        padding: 9px;
                                                        font-size: 15px;
                                                        background: #c1aeae5e;
                                                        z-index: 9999999;'> A User with this name is already registered. </br> Use Some Different username
                        </div>
                    </div>
                    <div style='position:relative'>
                        <input type="email" name="email" id="email" placeholder="Email" required />
                        <div id='email_check' style=' position: absolute;
                                                            top: -20px;
                                                            box-shadow: grey -2px 1px 8px;
                                                            color: white;
                                                            text-shadow: darkred 1px 2px 6px;
                                                            right: -87%;
                                                            padding: 9px;
                                                            font-size: 15px;
                                                            background: #c1aeae5e;
                                                            z-index: 9999999;'> A User with this email is already registered. </br> Use Some Different email
                        </div>
                    </div>
                    <input type="text" name="father_n" id="father_n" placeholder="Your Father Name" required />
                    <input type="text" name="mother_n" id="mother_n" placeholder="Your Mother Name" required />
                    <input type="number" name="contact" pattern='[7-9].{1}{0-9}.{7}' title='Should be 10 digits long' id="phone_number" placeholder="Phone number" required />
                    <input type="number" name="alt_contact" id="phone_number" title='Should be 10 digits long' placeholder="Alternate Phone number" required />
                    <input type="password" name="password" pattern='(?=.*\d(?=.*[a-z])(?=.*[A-Z]).{8,}' id="password" placeholder="Password" required />
                    <div style='position:relative'>
                        <input type="password" name="c_password" onchange='checkpass()'  id="c_password" placeholder="Confirm Password" required />
                        <div id='pass_not_same' style=' position: absolute;
                                                        top: -25px;
                                                        box-shadow: grey -2px 1px 8px;
                                                        color: white;
                                                        text-shadow: darkred 1px 2px 6px;
                                                        right: -87%;
                                                        padding: 9px;
                                                        font-size: 15px;
                                                        background: #c1aeae5e;
                                                        z-index: 9999999;'> The Password You have enter is not matching
                        </div>
                    </div>
                    <input type="date" name="dob" id="dob" placeholder="" required />
                    <textarea type="text" name="address" style='border:none; width:100%; border-bottom:2px solid #ebebeb;' id="phone_number" placeholder="Enter full address" required /></textarea>
                    <input type="number" name="postal_code" id="dob" style='margin-top:20px !important' placeholder="enter postal code" required />
                    
                    <div class="select-list" style='margin-top:20px !important'>
                    <input name="state"  type='text' placeholder="enter state name"  required class='form-control '/>
                    <input name="city"  type='text' placeholder="enter city name"  required class='form-control '/>
                    </div>
                    <input type="file" name="image" id="c_password" placeholder="Confirm Password" required />
                </div>
                <!-- <div class="form-group-2">
                    <h3>How would you like to bo located ?</h3>
                    <div class="select-list">
                        <select name="confirm_type" id="confirm_type">
                            <option seleected value="">By phone</option>
                            <option value="by_email">By email</option>
                        </select>
                    </div>
                    <div class="select-list">
                        <select name="hour_appointment" id="hour_appointment">
                            <option seleected value="">Hours : 8am 10pm</option>
                            <option value="9h-11h">Hours : 9am 11pm</option>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div> -->
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Sign Up" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('register/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>


<script>
$(function(){
    $('#pass_not_same').hide();
    $('#user_check').hide();   
    $('#email_check').hide();   


})
function checkpass(){

let pa = $('#password').val();
let c_pa = $('#c_password').val();
    if(pa == c_pa){
        $('#pass_not_same').hide();
        $('#submit').removeAttr('disabled',false);
        $('#submit').css({'box-shadow': '0px 1px 15px 0px rgba(73, 102, 177,0.55)' });
        document.getElementById('c_password').style.borderBottom='2px solid green';
    }else{
        $('#pass_not_same').show();
        $('#submit').css({'box-shadow': 'none' });

        $('#submit').attr('disabled',true);
        document.getElementById('c_password').style.borderBottom='2px solid red';
    //  alert('error');   
    }
}
</script>






<script>

        $('#username').focusout(function(){
            var username = $(this).val();
            var state = '';
            $.ajax({
                url: "{{url('user_exists')}}",
                type:'get',
                data:{uname:username},
                success: function(data){
                    // alert(data);
                    if(data == 1 ){
                        $('#user_check').show();   
                        $('#username').addClass('usercheck');   
                        $('#submit').attr('disabled','disabled');
                }else{
                        $('#user_check').hide();   
                    $('#username').removeClass('usercheck');
                    $('#submit').removeAttr('disabled','disabled');
                }
                }
            });
        });


        $('#email').focusout(function(){
            var email = $(this).val();
            var state = '';
            $.ajax({
                url: "{{url('email_exists')}}",
                type:'get',
                data:{email:email},
                success: function(data){
                    // alert(data);
                    if(data == 1 ){
                        $('#email_check').show();   
                        $('#email').addClass('usercheck');   
                        $('#submit').attr('disabled','disabled');
                }else{
                    $('#email_check').hide();   
                    $('#email').removeClass('usercheck');
                    $('#submit').removeAttr('disabled','disabled');
                }
                }
            });
        });

    
</script>

<script>
    function getCountry(){
        var country = 101;
        var state = '';
        $.ajax({
            url: 'http://stsmentor.com/locationapi/locationApi.php?type=getStates&countryId='+country,
            success: function(data){
                //alert(JSON.stringify(data));
                for(x in data.result){
                    //city += JSON.stringify(data.result[x]);
                    for(k in data.result[x]){
                        state += "<option value='"+k+"'>"+data.result[x][k]+"</option>";
                    }
                }
                $('#state').html(state);
            }
        });
    }

    getCountry();

    function getCity(){
        var state = $('.state').val();
        var city = '';
        $.ajax({
            url: 'http://stsmentor.com/locationapi/locationApi.php?type=getCities&stateId='+state,
            success: function(data){
                //alert(JSON.stringify(data));
                for(x in data.result){
                    //city += JSON.stringify(data.result[x]);
                    for(k in data.result[x]){
                        city += "<option value='"+k+"'>"+data.result[x][k]+"</option>";
                    }
                }
                $('#city').html(city);
            }
        });
    }
    
    
    






    </script>
</html>