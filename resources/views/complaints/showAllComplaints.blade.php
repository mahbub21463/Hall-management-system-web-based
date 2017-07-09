@extends('layouts.master-supervisor-side')

 @section('stylesheets')

 <link rel="stylesheet" href="css/toppadding.css">
 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11,fc-3.2.1,fh-3.1.1/datatables.min.css"/>
  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.1.2/css/select.dataTables.min.css"/>
 @endsection

 @section('content')

    

<div class="row" style="text-align:center">
 <h1> <span class="label label-default">Complaints</span></h1>
 </div>
 <hr>
  <!--  <div class="row form-group">
            <div class="col-md-1"></div>
            <div class="col-md-2" style="text-align:center">
                {{ Form::label('select_complaint_type','Select Complaint Type',['class' => 'control-label'])}}

            </div>
            
            <div class="col-md-3">
                <select name = "select_complaint_type" id = "select_complaint_dropdown"  class="dropdown form-control">
                    
                    <option value="Unsolved Complaints">Unsolved Complaints</option>
                    <option value="Solved Complaints">Solved Complaints</option>
                    <option value="All Complaints">All Complaints</option>
                    

                </select>
                 

            </div>  
    </div> -->
    
    <table class="table table-bordered" id="complaint-table">
        <thead >
        <tr>
            
            <th>Title</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Room No</th>
            <th>Status</th>
            <th>Description</th>
            
            
            
            
        </tr>
    </thead>
    <tbody>


        @foreach($complaints as $complaint)

            <tr>
            	 <?php 
                    $temp_student = App\Student::where('student_id',$complaint->student_id)->first() ;
                    if(strlen($complaint->title)>35)
                    {
                        $title = substr($complaint->title,0,35);
                        $title = $title."...";
                    }
                    else
                    {
                        $title = $complaint->title;
                    }
                 ?>
                <td>{{$title}}</td>
                <td>{{$complaint->student_id}}</td>
                <td>{{$temp_student->name}}</td>
                <td>{{$temp_student->room_no}}</td>
                <td>{{$complaint->status}}</td>
                <td><a class="btn btn-info btn-md block" href="complaints/{{$complaint->complaint_id}}">Details</a></td>
                
            </tr>
        @endforeach
    </tbody>
    <tfoot>
          <th>Title</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Room No</th>
            <th>Status</th>
            <th>Description</th>
            
            
    </tfoot>
        
    </table>
 
  

@endsection

@section('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.120.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11,fc-3.2.1,fh-3.1.1/datatables.min.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js"></script>

<script type="text/javascript" >
$(document).ready(function(i)  {
   
    $('#complaint-table tfoot th').each( function (i) {
        var title = $(this).text();
         if(title !=='Description')
        {
            
              $(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
        }
    } );
 
    // DataTable
    var table = $('#complaint-table').DataTable({
       
        scrollY:      "250px",
        scrollX: true,
        paging: true,
         scrollCollapse: true,
         "columnDefs": [
            {
                "targets": [ 5 ],
                
                "searchable": false

            }
          ],
        fixedColumns:   {
            leftColumns: 1,
            rightColumns: 1
        },
        select:true
        });
 
    // Apply the search
     $( table.table().container() ).on( 'keyup change', 'tfoot input', function () {
        table
            .column( $(this).data('index') )
            .search( this.value )
            .draw();
    } );
      
    
} );



</script>


@endsection


