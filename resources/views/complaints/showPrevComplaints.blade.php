@extends('layouts.master-student-side')

 @section('stylesheets')

 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11,fc-3.2.1,fh-3.1.1/datatables.min.css"/>
  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.1.2/css/select.dataTables.min.css"/>
 @endsection

 @section('content')

    

<div class="row" style="text-align:center">
 <h1> <span class="label label-default">Unsolved Complaints</span></h1>
 </div>
<div class="row" style="text-align:right">
 <a href = "/complaints/create" class = 'btn btn-primary'>Make New Complaint</a>

 </div>
<hr> 

    <table class="table table-stripped" id="complaint-table">
        <thead>
        <tr>
            
            <th>Title</th>
            <!-- <th>Student ID</th> -->
            <!-- <th>Student Name</th> -->
            <!-- <th>Room No</th> -->
            
            <th>Description</th>
            
            
            
            
        </tr>
    </thead>
    <tbody>


        @foreach($complaints as $complaint)

            <tr>
            	 <?php 
                   
                    if(strlen($complaint->title)>70)
                    {
                        $title = substr($complaint->title,0,70);
                    }
                    else
                    {
                        $title = $complaint->title;
                    }
                 ?>
                <td>{{$title}}</td>
           
                <td><a class="btn btn-info btn-md block" href="complaints/{{$complaint->complaint_id}}">Details</a></td>
                
            </tr>
        @endforeach
    </tbody>
    
        
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
        
        scrollY:      "300px",
        
        paging: true,
         "columnDefs": [
            {
                "targets": [ 4 ],
                
                "searchable": false

            }
          ],
        
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


