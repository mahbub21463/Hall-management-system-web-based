 @extends('layouts.master-supervisor-side')

 @section('stylesheets')


 
 
  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11,fc-3.2.1,fh-3.1.1/datatables.min.css"/>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.1.2/css/select.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css">
 @endsection

 @section('content')

    


  <div class="row" style="text-align:center">
 <h1> <span class="label label-default">Student Database</span></h1>
 </div>
 <div class="row" style="text-align:right">
 <a href = "/downloadStudentList" class = 'btn btn-primary'>Download Full Student List(PDF)</a>
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
            
             <th>Blood Group</th>
             <th></th>
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
                
                <td>{{$student->blood_group}}</td>
                <td><a class="btn btn-info btn-sm" href="students/{{$student->student_id}}">Details</a></td>

              
            </tr>
        @endforeach
    </tbody>
    <tfoot>
           <th>Student ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Level</th>
            <th>Term</th>
            <th>Resident Status</th>
            <th>Room No</th>
            
            <th>Blood Group</th>
            <th></th>
            
    </tfoot>
 </table>
 
  
  </div>  
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery.js"></script>
<!-- <script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11,fc-3.2.1,fh-3.1.1/datatables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.flash.min.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>

<script type="text/javascript">


$(document).ready(function()  {
   
    $('#student-table tfoot th').each( function (i) {
        var title = $(this).text();

       
      
        if(title !=='')
        {
           
              $(this).html( '<input type="text" size="8" placeholder="Search '+'" data-index="'+i+'" />' );
        }
        
    } );
 
    // DataTable
    var table = $('#student-table').DataTable({
        
        scrollY:      "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging: true,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdf',
                text: 'Download PDF',
                
                orientation:'portrait',
                pageSize:'A4',
                message:'sfdkal',
                title:'Student Database',
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7]
                }
            },
            {
                extend: 'print',
                text: 'Print',
                title:'Student Database',
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7]
                }
                //filename: 'studentList'
            }
        ]
        ,
          "columnDefs": [
            {
                "targets": [ 8 ],
              
                "searchable": false

            }
          ],
           fixedColumns:   {
            leftColumns: 1,
            rightColumns: 1
        },
           select:        true
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