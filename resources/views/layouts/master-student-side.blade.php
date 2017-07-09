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

    
    <link href="/css/sidebar.css" type="text/css" rel="stylesheet">
    <link href="/css/navbar.css" type="text/css" rel="stylesheet">
    
    @yield('stylesheets')

    

    </head>

    <body>
     
      

      <div id="wrapper">


  
      
    

                

      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">


       

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav">
               <li>
                 <h4><span class="label label-primary">Welcome to {{Auth::user()->hall}} Hall</span></h4>
               </li>
                <li>
                     <a href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>  
                </li>
                <li class="{{Request::is('/')?'active':''}}"><a href="/">Home </a></li>
                
                <li class="{{Request::is('/')?'active':''}}"><a href="#">Alumni</a></li>
                <li class="{{Request::is('/')?'active':''}}"><a href="#">Achievements</a></li>
                <li class="{{Request::is('/')?'active':''}}"><a href="#">Provost List</a></li>
                
             </ul>
             <ul class="nav navbar-nav navbar-right">
                
                <li class="{{Request::is('/')?'active':''}}"><a href="#">Notice Board</a></li>
               
                <li class="{{Request::is('/')?'active':''}}"><a href="#">Notification</a></li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" style="background-color:#006400" data-toggle="dropdown" role="button" aria-expanded="false">
                    <?php 
                      if(Auth::user()->user_type === 'student')
                      {
                         $username = App\Student::where('student_id',Auth::user()->username)->first()->name;
                      }
                      else if(Auth::user()->user_type === 'supervisor' || Auth::user()->user_type == 'provost')
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

                

             </ul>

        




            </div><!-- /.navbar-collapse -->

        </nav>
     
     
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                        <li class="{{Request::is('/')?'active':''}}">
                            <a href="#" ><b>Upcoming Events</b></a>
                        </li>

                        <li class="{{Request::is('dues')?'active':''}}">
                            <a href="/dues"><b>Dues Status</b></a>
                        </li>

                        

                        <li class="{{Request::is('/')?'active':''}}">
                            <a href="student-apply-roomchange"><b>Apply For Room Change</b></a>
                        </li>
                        <li class="{{Request::is('complaints/create') || Request::is('complaints') ?'active':''}}">
                            <a href="/complaints"><b>Complain Box</b></a>
                        </li>
                        <li class="{{Request::is('/')?'active':''}}">
                            <a href="#"><b>Hall Library</b></a>
                        </li>
                        <li class="{{Request::is('/')?'active':''}}">
                            <a href="student-mess"><b>Mess</b></a>
                        </li>

                        <li class="{{Request::is('payments')?'active':''}}">
                            <a href="/payments"><b>My Payments</b></a>
                        </li>
                        <li class="{{Request::is('/')?'active':''}}">
                            <a href="#"><b>Change Password</b></a>
                        </li>

                </ul>
        </div>

        <div class="container-fluid" style="margin-top:31px">
              @yield('content')
        </div>     

   </div>
   <!-- /#wrapper -->
    
<!-- jQuery -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@yield('scripts')
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>