 @extends('layouts.master-student-side')

 @section('stylesheets')

 <!-- <link rel="stylesheet" href="css/toppadding.css"> -->
<link rel="stylesheet" href="css/tablehead.css">

 @endsection

 @section('content')

 <div class="row"  style="padding-top: 1cm;padding-left: 2cm">


  <div class='col-md-12'>
   
    <table class="table">
      <thead class="thead-inverse">
        <tr>
          <th>Fee Type</th>
          <th>Fee</th>
          <th>Last Payment Date</th>
          <th>Fine</th>
          <th>Total</th>
        
        </tr>
      </thead>
      <tbody>
        <tr>
          
          <td>Mess Charge</td>
          <td>1200</td>
          <td>23/04/15</td>
          <td>10</td>
          <td>1210</td>
       
        </tr>
        <tr>
          
          <td>Hall Admission</td>
          <td>3400</td>
          <td></td>
          <td></td>
          <td>3400</td>
        </tr>
        <tr>
          
          <td>Mess Charge</td>
          <td>1200</td>
          <td>23/04/15</td>
          <td>10</td>
          <td>1210</td>
         
        </tr>
        <tr>
          <td colspan="3"></td>
          <td><b>Total</b></td>
          <td><b>67567</b></td>
         
        </tr>
      </tbody>
    </table>
  
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