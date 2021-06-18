for(i in data)
            {
              if(data[i].status == 2){
                appoint_count++;
                console.log(appoint_count)
                
                li += "<li class='nav-item' value="+data[i].id+"><a class='nav-link'>"+data[i].name+"</a></li>";
                // li += "<li>"+data[i].email+"</li>";
              }
            $('#discart_appoint').html(li);
            $('.appoint_count').html(appoint_count);

            }




            @for($career = 0 ; $career <=count($career_detail)-1 ; $career++ )
			@foreach($lawer_detail as $dd)
				<div class="col-md-4 ftco-animate">
					@if($dd->id == $career_detail[$career]->uid)
					<div class="case img d-flex align-items-center justify-content-center" style='background-image: url("{{asset("public/lawer_register/$dd->image")}}");'>
					@endif
        				<div class="text text-center">
						<a href="{{url('case_stydy',[$career_detail[$career]->id])}}">
							<h3><a href="#">{{$career_detail[$career]->lawer_type}}</a></h3>
							<span>{{$career_detail[$career]->case_name}}</span>
							<span>{{$career_detail[$career]->court_name}}</span>
							<span>{{$career_detail[$career]->case_status}}</span>
						</a>
						</div>
					</div>
				</div>
			@endforeach
      @endfor
      

      {{url('case_stydy',[$career_detail[$career]->id])}}



      <script>
		$('#case_link').click(function(){
			alert('ddd')
			// window.location.replace("{{url('case_stydy',[$career_detail[$career]->id])}}");
		})
	</script>