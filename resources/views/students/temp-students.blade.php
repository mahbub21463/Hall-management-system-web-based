 @extends('layouts.master-provost-side')

 @section('stylesheets')


 
 
  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11,fc-3.2.1,fh-3.1.1/datatables.min.css"/>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.1.2/css/select.dataTables.min.css"/>

 @endsection

 @section('content')

    


  <div class="row" style="text-align:center">
 <h1> <span class="label label-default">New Students</span></h1>
 </div>

 <div class="row">


  <div class='col-md-12'>
   
    
    <table class="table table-bordered" id="student-table" cellspacing="0" width="100%" cellpadding="0" border="0" >
        <thead >
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Level</th>
            <th>Term</th>
            <th>Resident Status</th>
            <th>Room No</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->student_id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->dept}}</td>
                <td>{{$student->level}}</td>
                <td>{{$student->term}}</td>
                <td>{{$student->resident_status}}</td>
                <td>{{$student->room_no}}</td>
                
                

              
            </tr>
        @endforeach
    </tbody>
   <!--  <tfoot>
           <th>Student ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Level</th>
            <th>Term</th>
            <th>Resident Status</th>
            <th>Room No</th>
            
            
            
    </tfoot> -->
 </table>
 <hr>
 <div class="row">
    <div class="col-md-2 col-md-offset-5">
       <a href="/approve" class ="btn btn-success btn-block">Approve</a> 
    </div>
     
 </div>
  
  </div>  
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery.js"></script>
<!-- <script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11,fc-3.2.1,fh-3.1.1/datatables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js"></script>
<script>
$(document).ready(function()  {
   
    // $('#student-table tfoot th').each( function (i) {
    //     var title = $(this).text();

       
      
    //     if(title !=='')
    //     {
           
    //           $(this).html( '<input type="text" size="8" placeholder="Search '+'" data-index="'+i+'" />' );
    //     }
        
    // } );
 
    // DataTable
    var table = $('#student-table').DataTable({
        
        scrollY:      "300px",
        
        scrollCollapse: true,
        paging: true,
        
       
           select:        true
        });
 
    // Apply the search
    // $( table.table().container() ).on( 'keyup change', 'tfoot input', function () {
    //     table
    //         .column( $(this).data('index') )
    //         .search( this.value )
    //         .draw();
    // } );

  
} );
</script>
@endsection