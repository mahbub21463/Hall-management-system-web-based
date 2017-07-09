
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  @yield('title');


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">




  @yield('stylesheets')


  <link href="/css/navbar.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="/css/form-elements.css">
  <link rel="stylesheet" href="/css/style.css">

</head>

<body>

  <div id="wrapper">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

     <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="{{Request::is('/')?'active':''}}"><a href="/">Home </a></li>
          <li><a href="hall-public">Suhrawardy Hall</a></li>
          <li><a href="hall-public">Ahsanullah Hall</a></li>
          <li><a href="hall-public">Titumir Hall</a></li>
          <li><a href="hall-public">Rashid Hall</a></li>
          <li><a href="hall-public">Sher-e-bangla Hall</a></li>
          <li><a href="hall-public">Nazrul Islam Hall</a></li>
          <li><a href="hall-public">Chatri Hall</a></li>
        </ul>

        

          
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
               <li class="dropdown">
                    <a href="#" class="dropdown-toggle" style="background-color:#006400" data-toggle="dropdown" role="button" aria-expanded="false">
                    <?php 
                      if(Auth::user()->user_type === 'student')
                      {
                         $username = App\Student::where('student_id',Auth::user()->username)->first()->name;
                      }
                      else if(Auth::user()->user_type === 'supervisor' || Auth::user()->user_type === 'provost')
                      {
                        $username = App\Employee::where('employee_id',Auth::user()->username)->first()->name;
                      }
                      echo $username;
                    ?>

                    <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="{{ url('/profile') }}"><span class="glyphicon glyphicon-user"></span>Profile</a>
                        </li>
                        <li>
                           <a href="{{ url('/logout') }}"><span class="
glyphicon glyphicon-log-out"></span>Logout</a>
                        </li>
                        
                    </ul>
                </li>
            @else
              <li><a class="launch-modal" href="#" data-modal-id="modal-login" style="background-color:#006400" >Login</a></li>
            @endif
        </ul>



      </div><!-- /.navbar-collapse -->

     </nav>



    <div class="container-fluid"  style="margin-top:31px">
        @yield('content')
    </div>     
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
                      <!-- {!! csrf_field() !!} -->
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


  </div>
 <!-- /#wrapper -->

        <!-- jQuery -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
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
        @yield('scripts')
       

</body>

</html>