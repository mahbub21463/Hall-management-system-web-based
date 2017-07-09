 @extends('layouts.master-student-side')

 @section('stylesheets')


 <link rel="stylesheet" href="css/right-side-bar.css">
 <!-- <link rel="stylesheet" href="css/student-mess.css"> -->
 @endsection

 @section('content')


 <div class="row" style="padding-top: 1cm" >

  
  <div class="col-md-10" id="mess-content">

    <div class="row">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
          <div >
            <ul class="nav ">
              <li class="nav-header">Hall Name</li>
              <li> <a href="#">Upcoming Events</a>
              </li>
              <li><a href="#">Achievements</a>
              </li>
              <li><a href="#">Provosts</a>
              </li>
              <li><a href="#">Alumni</a>
              </li>
              

            </ul>
          </div>
        </div>
        <div class="col-md-4">
          
        </div>
    
</div>
   <!-- About Section -->
   <section class="success" >
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Upcoming Events </h2>
          
        </div>
      </div>
    <div class="row">
        

  

   </section>

   <section class="success" >
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Achievements</h2>
          

        </div>
      </div>
    <div class="row">
        

    

   </section>
 
  <section class="success" >
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Provosts</h2>
          

        </div>
      </div>
    <div class="row">
  </section>     

</div>
 

<div class="col-md-2" id="right-sidebar">
  <div class="sidebar-nav-fixed pull-right affix">
    <div>
      <ul class="nav ">
        <li class="nav-header">Other Halls</li>
        <li> <a href="#">Suhrawardy Hall</a>
        </li>
        <li><a href="#">Rashid Hall</a>
        </li>
        <li><a href="#">Sher-e-Bangla Hall</a>
        </li>
        <li><a href="#">Titumir Hall</a>
        </li>
        <li><a href="#">Ahsanullah Hall</a>
        </li>
        <li><a href="#">Nazrul Islamm Hall</a>
        </li>
        <li><a href="#">Chatri Hall</a>
        </li>
        
      </ul>
    </div>
    <!--/.well -->
  </div>
  <!--/sidebar-nav-fixed -->
</div>
</div>


</div>
</div>
</div>
<br>
@endsection

@section('scripts')
<script src="js/bootstrap-datepicker.js"> </script>
<script> 
  $(function(){
    $('.datepicker').datepicker()
  });
</script>
@endsection