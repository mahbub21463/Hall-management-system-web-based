 @extends('layouts.master-student-side')

@section('title')

@endsection

@section('stylesheets')

 



 @endsection

 @section('content')

<div class="row" style="text-align:center">
 <h1> <span class="label label-default">Make Complaint</span></h1>
 </div>
 <div class="row" style="text-align:right">
 <a href = "/complaints" class = 'btn btn-primary'>Previous Complaints</a>
 </div>
   
  {!! Form::open( ['route' => ['complaints.store']]) !!}
    
    



        <div class="row form-group">
            <div class="col-md-2 col-md-offset-1">
              {{ Form::label('subject', 'Subject',['class' => 'control-label']) }}
            </div>
            
            
            
        </div>
        
        <div class="row form-group">
             <div class="col-md-10 col-md-offset-1">
                   {{ Form::text('subject','',   ['class' => 'form-control','placeholder' => 'Subject']) }}
            </div>
       
        </div>
       <!--  <div class="row form-group">
             <div class="col-md-10 col-md-offset-1">
                   <hr>
            </div>
       
        </div> -->
      
        <div class="row form-group">
          <div class="col-md-2 col-md-offset-1">
              {{ Form::label('details', 'Details',['class' => 'control-label']) }}
            </div>
            
           
            
        </div>
         
        <div class="row form-group">
          <div class="col-md-10 col-md-offset-1">
                 {{ Form::textarea('details','',   ['class' => 'form-control','placeholder' =>"Write your complain here...",'rows'=> 10]) }} 
            </div>
           
        </div>
        <!-- <hr> -->
        <div class="row form-group">
             <div class="col-md-10 col-md-offset-1">
                   <hr>
            </div>
       
        </div> 
        <div class="row form-group">
           <div class="col-md-5">
             
           </div>
           <div class="col-md-2">
                {{ Form::submit('Send', ['class' => 'btn btn-success btn-block btn-lg']) }}
           </div>
          
           <div class="col-md-5">
             
           </div>
        </div>
        {!!Form::close() !!}

   

@endsection

@section('scripts')

@endsection