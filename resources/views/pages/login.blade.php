 @extends('layouts.master-general')
 @section('stylesheets')
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"> 
 <link href="css/form-elements.css" type="text/css" rel="stylesheet">
        <link href="css/login-style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css"> 
        
@endsection
 @section('content')
<!--  <div class="top-content">
            
        <div class="inner-bg">
            <div class="container"> -->
                <div class="row">
                        <div class="col-md-6 col-md-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox"> Remember me
                                      </label>
                                  </div>
                                  <div class="form-group">
                                        <a href="student-mess" class="btn btn-primary submit-button">Login</a>
                                    </div>
                                    

			                    </form>
		                    </div>
                        </div>
                    
                </div>
           
@endsection