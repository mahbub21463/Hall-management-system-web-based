 @extends('layouts.master-students-side')

 @section('stylesheets')

 

 @endsection

 @section('content')


<div class="row" style="margin-top:50px">
    



  <div class='col-md-12'>


  {!! Form::open(['route' => 'payments.store'] )!!}
      <div class="row form-group">
         <div class="col-md-2">
              {{ Form::label('student_id','Student ID',['class'=>'control-label'])}}
         </div>
         <div class="col-md-3">
               {{ Form::text('student_id',null,['class' => 'form-control'])}}
         </div>
         
        
      </div>
      <hr>
      

      <div class="row form-group">
          <div class="col-md-2">
              {{ Form::label('fee_type','Fee Type',['class'=>'control-label'])}}
          </div>
          <div class="col-md-4">
  
               {{Form::select('fee_type', ['Mess Charge' => 'Mess Charge', 'Hall Admission Fee' => 'Hall Admission Fee','Hall Attachment Fee' => 'Hall Attachment Fee', 'Residency Fee' => 'Residency Fee','Others' => 'Others'],['class'=>'dropdown-menu form-control'])}} 
          </div>

      </div>
         
         <hr>
     <div class="row form-group">
          <div class="col-md-2">
              
         {{ Form::label('amount','Amount',['class'=>'control-label'])}}
          </div>
          <div class="col-md-4">
               {{ Form::text('amount',null,['class' => 'form-control'])}}
          </div>

      </div>

        <hr>
        <div class="row form-group">
          <div class="col-md-2">
               {{ Form::label('payment_date','Payment Date',['class'=>'control-label'])}}
          </div>
          <div class="col-md-4">
               
               {{Form::date('payment_date', \Carbon\Carbon::now()),['class'=>'form-control']}}
          </div>

      </div> 
        
         <hr>
         <div class="row form-group">
          <div class="col-md-2">
               {{Form::label('bank_scroll','Bank Scroll Number',['class'=>'control-label'])}}
          </div>
          <div class="col-md-4">
              {{Form::text('bank_scroll',null,['class' => 'form-control'])}}
          </div>

      </div>  
            

        <hr>

        
         

        
         
        {{Form::submit('Submit',['class' => 'btn btn-success btn-lg'])}}
  {!!Form::close() !!}
  
  </div>  
</div>

@endsection

@section('scripts')

@endsection