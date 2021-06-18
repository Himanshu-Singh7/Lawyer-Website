@extends('navbar')
<head>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
    .overlay{
        position:absolute;
        /* right , top , bottom : 0px; */
        left:9%;

    }
    .custom_img{
        width:250px;
        height:250px;
        margin:auto;
    }
</style>

</head>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Case Studies</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Case <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<div class="container">
    <div class="row position-relative mt-5  mt-5 mb-5" style='height:300px;'>
        <div class="overlay">
        <img src="{{asset('images/balance-scale-solid.svg')}}" alt="" style='width:1000px;height:500px;opacity: 0.02;'>
        </div>
        <div class="col-md-5 p-0 text-center">
            <div class="custom_img mt-4">
                <img src="{{asset('images/person_1.jpg')}}" style='width:100%; height: 100%;border-radius:50%;object-fit:cover' alt="" >
            </div>
            <h3 class=''>Finest And Strongest Law Firm Win The World</h3>
            <p>There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in
                some form, by injected humour, or randomised words
                which don't look even slightly believable.
            </p>
        </div>
        <div class="col-md-5 ml-auto p-0" style="width:80%; height: 80%;text-align:center;">
            <div class="custom_img mt-4" style='background:#ff000061;border-radius:50%; '>
                <h2 style='line-height:250px'>90%</h2>
            </div>
            <h3>About Lawyer Justice</h3>
            <p> There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in
                some form, by injected humour, or randomised words
                which don't look even slightly believable.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto" style='margin-top:150px'>
            <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit quibusdam unde assumenda quae aut dignissimos natus eaque numquam? Doloribus sint voluptates accusantium exercitationem nemo minus est dolores sunt corporis minima?</h3>
        </div>
    </div>
</div>


@extends('footer')
