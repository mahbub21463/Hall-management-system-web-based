@extends('layouts.master-supervisor-side')

@section('stylesheets')


@endsection

@section('content')
<!-- <script>
 
$(document).ready(function()  {
	window.alert('sfdl');
	$("#student_type").change(function() {
		//alert('hjk');
	}
}
//    function changeStudentType() {
//    	alert('hjk');
//     var selectBox = document.getElementById("student_type");
//    // var selected = selectBox.options[selectBox.selectedIndex].value;

//     if(selectBox.selectedIndex == 0){
//         $('#specific').show();
//         $('#level-term').hide();
//     }
//     else if(selectBox.selectedIndex == 3)
//     {
//          $('#specific').hide();
//         $('#level-term').show();
//     }
//     else
//     {
//     	 $('#specific').hide();
//         $('#level-term').hide();
//     }
// }
</script> -->

 <div class="row" style="text-align:center">
 <h1> <span class="label label-default">Add Dues</span></h1>
 </div>
   
<hr>


		{!! Form::open(['route' => 'dues.store'] )!!}


		<div class="row form-group">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				{{ Form::label('select_student_type','Select Students',['class' => 'control-label'])}}

			</div>
			
			<div class="col-md-3">
				<select name = "select_student_type" id = "select_student_dropdown" onchange="changeStudentType()" class="dropdown form-control">
					
					<option value="All Residents">All Residents</option>
					<option value="Specific Student">Specific Student</option>
					<option value="All Attached">All Attached</option>
					<option value="Specific Level/Term">Specific Level/Term</option>
					<option value="All Students">All Students</option>

				</select>
				 

			</div>  
			<div id="level-term">
					<div class="col-md-2">
						{{ Form::label('level', 'Level:',['class' => 'control-label']) }}

					</div>

					<div class="col-md-1">
						<!-- {{Form::select('level', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'])}} -->
						<select name='level' class="dropdown form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							
						</select>

					</div>  
					<div class="col-md-2">
						{{ Form::label('term', 'Term:',['class' => 'control-label']) }}
					</div>
					<div class="col-md-1">
						<!-- {{Form::select('term', ['1'=>'1','2'=>'2'])}}  -->
						<select name='term' class="dropdown form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							
							
						</select>
			        </div> 
			</div> 

			
			<div id='specific'>
				<div class="col-md-2">
					{{ Form::label('student_id','Student ID')}}
				</div>
				<div class="col-md-3">
					{{ Form::text('student_id',null,['class' => 'form-control'])}}
				</div>
			</div>
			


			

		</div>





		<hr>

	


		<div class="row form-group">
		<div class="col-md-1"></div>
			<div class="col-md-2">
				{{ Form::label('fee_type','Fee Type')}}
			</div>
			<div class="col-md-3">
				<!-- {{Form::select('fee_type', ['Mess Charge' => 'Mess Charge', 'Hall Admission Fee' => 'Hall Admission Fee','Hall Attachment Fee' => 'Hall Attached Fee', 'Residency Fee' => 'Residency Fee','Others' => 'Others'],['class'=>'dropdown form-control'])}} -->
				<select name='fee_type' class="dropdown form-control" onchange="changeStudentType()" id="hall_fee_dropdown">
							<option value="Mess Charge">Mess Charge</option>
							<option value="Hall Admission Fee">Hall Admission Fee</option>
							<option value="Hall Attachment Fee">Hall Attachment Fee</option>
							<option value="Others">Others</option>
				</select>
			</div>
			<div id = 'others' class="col-md-3">
					{{ Form::text('other_charge',null,['class' => 'form-control','placeholder'=>'Please Specify'])}}
			</div>


		</div>

		<hr>
		<div class="row form-group">
		<div class="col-md-1"></div>
			<div class="col-md-2">

				{{ Form::label('amount','Amount')}}
			</div>
			<div class="col-md-3">
				{{ Form::text('amount',null,['class' => 'form-control'])}}
			</div>

		</div>

		<hr>
		<div class="row form-group">
		<div class="col-md-1"></div>
			<div class="col-md-2">

				{{ Form::label('fine_per_day','Fine Per Day')}}
			</div>
			<div class="col-md-3">
				{{ Form::text('fine_per_day',null,['class' => 'form-control'])}}
			</div>

		</div>

		<hr>
		<div class="row form-group">
		<div class="col-md-1"></div>
			<div class="col-md-2">
				{{ Form::label('last_payment_date','Last Payment Date')}}
			</div>
			<div class="col-md-3">

				{{Form::date('last_payment_date', \Carbon\Carbon::now())}}
			</div>

		</div> 

		<hr>
<!-- 		<div class="row">
			<div class="col-md-2">
				{{Form::label('bank_scroll','Bank Scroll Number')}}
			</div>
			<div class="col-md-4">
				{{Form::text('bank_scroll',null,['class' => 'form-control'])}}
			</div>

		</div>  


		<hr> -->




		<div class="row form-group">
			<div class="col-md-2 col-md-offset-5">
				{{Form::submit('Submit',['class' => 'btn btn-success btn-lg'])}}
			</div>
		</div>

		
		{!!Form::close() !!}

@endsection

@section('scripts')

<script>
$(document).ready(function () {
	$('#specific').hide();
    $('#level-term').hide();
    $('#others').hide();
});
function changeStudentType()
{
   // window.alert('mahbub');
	var selectBox = document.getElementById("select_student_dropdown");
    // var selected = selectBox.options[selectBox.selectedIndex].value;
  // document.getElementById("select_student").innerHTML = "You selected: " + selected;
    if(selectBox.selectedIndex == 1){
           $('#specific').show();
           $('#level-term').hide();
     }
     else if(selectBox.selectedIndex == 3)
     {
          $('#specific').hide();
         $('#level-term').show();
     }
     else
     {
     	 $('#specific').hide();
        $('#level-term').hide();
     }

     var selectHallFee = document.getElementById("hall_fee_dropdown");
     if(selectHallFee.selectedIndex == 3)
     {
     	$('#others').show();
     }
     else
     {
     	$('#others').hide();
     }

}

</script>
@endsection