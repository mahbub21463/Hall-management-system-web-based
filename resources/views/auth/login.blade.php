@extends('layouts.master-general')
@section('stylesheets')
<link rel="stylesheet" href="/css/form-elements.css">
<link rel="stylesheet" href="/css/style.css">

@endsection
@section('content')
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="modal-login-label">Login to your hall</h3>
                <p>Enter your username and password to log on:</p>
            </div>

            <div class="modal-body">

                       
                    {!!Form::open(['url'=>'/login','method'=>'post']) !!}

                    <div class="row form-group">
                        <div class="col-md-4">
                            {{Form::label('username','User Name:',['class'=>'control-label'])}}
                        </div>
                        <!-- <div class="col-md-2">
                            
                        </div> -->
                         <div class="col-md-8">
                             {{Form::text('username',null,['class'=>'form-control','placeholder'=>'Username'])}}
                        </div>
                       <!--  <div class="col-md-2">
                            
                        </div>
                          -->
                        
                     </div>
                      <div class="row form-group">
                        <div class="col-md-4">
                            {{Form::label('password','Password:',['class'=>'control-label'])}}
                        </div>
                        
                         <div class="col-md-8">
                             {{Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
                        </div>
                        
                        
                  



                     
                     <div class="row">
                         <div class="col-md-4">

                         </div>
                         <div class="col-md-6">
                             {{Form::checkbox('remember')}}
                             {{Form::label('remember','Remember Me')}}
                         </div>

                     </div>
                     
                     <div class="row">
                      <div class="col-md-2 col-md-offset-5">
                        {{Form::submit('Login',['class'=>'btn btn-primary'])}}
                    </div>

                </div>


                {!!Form::close() !!}

            </div>

        </div>
    </div>
</div>


@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {

        /*
        Modals
        */
        $('.launch-modal').on('click', function(e){
            e.preventDefault();
            $( '#' + $(this).data('modal-id') ).modal();
        });

    });
</script>
@endsection