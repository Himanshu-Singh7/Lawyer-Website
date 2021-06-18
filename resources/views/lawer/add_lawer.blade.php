<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto border border-dark bg-info p-5 mt-5">
        <h2 class='text-center'> Add Lawer Type</h2>
        
<form action="/add_lawer_type_table" method='post' enctype="multipart/form-data">
@csrf
<label for="">Lawer Type</label>
<input type="text" class='form-control' placeholder='Add lawer Type' name='type'>
<label for="">Descrption</label>
<textarea type="text" class='form-control' name='description'  placeholder='Add lawer Type'></textarea>
<label for="">Image</label>
<input type="file" name='image' class='form-control'>
<div class='text-center'>
<input type="submit" class='btn btn-success mt-4'>
</div>
        
        </div>
    </div>

    <div class="row">
        @foreach($data as $dd)
        <div class="col-md-4 ml-2 border border-info">
        <h2>{{$dd->id}}</h2>    
        <h3>{{$dd->law_type}}</h3>
        <h4>{{$dd->description}}</h4>
        <img src='{{asset("public/contact/$dd->image")}}' alt="{{$dd->image}}">
        

        </div>
        @endforeach
    </div>
</div>


</form>