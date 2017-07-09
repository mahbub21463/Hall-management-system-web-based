 @extends('layouts.master-student-side')

 @section('stylesheets')
 
 

 <link rel="stylesheet" href="css/right-side-bar.css">
 <link rel="stylesheet" href="css/student-mess.css">
 <style type="text/css">
    .jumbotron
    {
        padding-top: 2.5cm;
    }
  </style>
 @endsection

 @section('content')

 
<div class="row" style="padding-top: 1cm;padding-left: 1cm">
  <div class="col-md-9">
    <div class="jumbotron" id="meal-menu">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Todays Meal Menu</h2>
          

        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3>Lunch</h3>
          <hr class="style">
          <p>Rice<br>Dal<br>Chicken<br>Alu vaji</p>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
         <h3>Dinner</h3>
         <hr class="style">
         <p>Rice<br>Dal<br>Chicken<br>Fish<br>Alu vaji</p>
       </div>

      </div>
    </div>
    <div class="jumbotron" id="current-manager" >
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Current Mess Managers</h2>
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3>Md. Mahbub Alam</h3>
          <hr class="style">
          <p>Student ID: 1205063<br>Room No:1002<br>Level:3<br>Term:2</p>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
         <h3>Sonjoy Paul</h3>
         <hr class="style">
         <p>Student ID: 1205079<br>Room No:1002<br>Level:3<br>Term:2</p>
       </div>

     </div>
    </div>
    <div class="jumbotron" id="feedback">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Feed Back</h2>
          

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="detailBox">
            <div class="titleBox">
              <label>Mess Feedback</label>
              
            </div>
           
            <div class="actionBox">
              <ul class="commentList">
                <li>
                  <div class="commenterImage">
                    <img src="img/anonymous.png" />
                  </div>
                  <div class="commentText">
                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                  </div>
                </li>
                <li>
                  <div class="commenterImage">
                    <img src="img/anonymous.png" />
                  </div>
                  <div class="commentText">
                    <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>

                  </div>
                </li>
                <li>
                  <div class="commenterImage">
                    <img src="img/anonymous.png" />
                  </div>
                  <div class="commentText">
                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                  </div>
                </li>
              </ul>
              <form class="form-inline" role="form">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Write your feedback" />
                </div>
                <div class="form-group">
                  <button class="btn btn-default">Submit</button>
                </div>
              </form>
            </div>
          </div> <!--detailBox-->
        </div>

      </div>
    </div>
  
  <div class="jumbotron" id="apply-mess">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Apply for Mess Manager</h2>

          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h3>Applicant 1</h3>
            <hr class="style">
            <div class="input-group input-group-lg">

              <input type="text" class="form-control" placeholder="Student ID" aria-describedby="sizing-addon1">
            </div>

            <div class="input-group input-group-lg">

              <input type="text" class="form-control" placeholder="Name" aria-describedby="sizing-addon1">
            </div>

            <div class="input-group input-group-lg">
              <input type="text" class="form-control" placeholder="Room No" aria-describedby="sizing-addon1">
            </div>
          </div>
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
              <h3>Applicant 2</h3>
              <hr class="style">
           <div class="input-group input-group-lg">

            <input type="text" class="form-control" placeholder="Student ID" aria-describedby="sizing-addon1">
          </div>

          <div class="input-group input-group-lg">

           <input type="text" class="form-control" placeholder="Name" aria-describedby="sizing-addon1">
         </div>



         <div class="input-group input-group-lg">
          <input type="text" class="form-control" placeholder="Room No" aria-describedby="sizing-addon1">
        </div>
      </div>


        <div class="form">

          <div class='form-row'>
            <div class='col-xs-12 form-group'>
              <hr class="featurette-divider"></hr>

              <div class='error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.

                </div>
              </div>
              <button class='form-control btn btn-primary submit-button'  type='submit'> Submit</button>
            </div>

          </div>
        </div>

      </div>
   

    </div>
    </div>
            
        <!--/span-->
        <!-- /#sidebar-wrapper -->
        <div class="col-md-3">
            <div class="sidebar-nav-fixed pull-right affix">
                <div class="well">
          <ul class="nav ">
            <li class="nav-header">Navigation</li>
            <li class="active"><a href="#meal-menu">Todays Meal Menu</a>
            </li>
            <li><a href="#current-manager">Current Mess Managers</a>
            </li>
            <li><a href="#feedback">Feedback</a>
            </li>
            <li><a href="#apply-mess">Apply for Mess Manager</a>
            </li>

          </ul>
        </div>
            </div>
            <!--/sidebar-nav-fixed -->
        </div>
   </div>

@endsection

@section('scripts')
<script src="js/bootstrap-datepicker.js"> </script>
<script> 
  $(function(){
    $('.datepicker').datepicker()
  });
</script>
@endsection