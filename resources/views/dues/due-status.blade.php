 @extends('layouts.master-student-side')

 @section('stylesheets')

 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11,fc-3.2.1,fh-3.1.1/datatables.min.css"/>
  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.1.2/css/select.dataTables.min.css"/>
 @endsection

 @section('content')

    

 <div class="row" style="text-align:center">
 <h1> <span class="label label-default">Dues</span></h1>
 </div>
   

 

    
    <table class="table table-bordered" id="due-table">
        <thead >
        <tr>
            
            <!-- <th>Due ID</th> -->
            <th>Student ID</th>
            <th>Fee Type</th>
            <th>Amount </th>
            <th>Last Payment Date</th>
            <th>Fine</th>
            <th>Total</th>
            
            
            
        </tr>
    </thead
    <tbody>
        @foreach($dues as $due)
            <tr>
                <!-- <td>{{$due->due_id}}</td> -->
                <td>{{$due->student_id}}</td>
                <td>{{$due->fee_type}}</td>
                <td>{{$due->amount}}</td>
                <td>{{$due->last_payment_date}}</td>
               <?php
                    $d1=strtotime($due->las_payment_date);
                    $lastdate=date_create($due->last_payment_date);
                    date_default_timezone_set("Asia/Dhaka");
                    $now = new DateTime();

                    $diff=date_diff($lastdate,$now);
                    $fine=0;
                    if($diff->invert !== 1)
                    {
                        $fine = $diff->days * $due->fine_per_day;
                    }
                    if($due->fee_type == "Mess Charge" && $fine>=30*$due->fine_per_day)
                    {
                        $fine= 30 * $due->fine_per_day;
                    }
                    $total = $due->amount + $fine;
                    echo "<td>$fine</td>";
                    echo "<td>$total</td>";
                    ?>

                
                
            </tr>
        @endforeach
    </tbody>
    
     <tfoot>
            <tr>
                <th colspan="5" style="text-align:right">Total:</th>
                <th></th>
                
            </tr>
    </tfoot>
</table>
 
  

@endsection

@section('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.120.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11,fc-3.2.1,fh-3.1.1/datatables.min.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js"></script>

<!-- <script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.11/api/sum().js"></script> -->

<script type="text/javascript" >
$(document).ready(function() {
    $('#due-table').DataTable( {
        
         select:true,
        
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            // total = api
            //     .column( 5 )
            //     .data()
            //     .reduce( function (a, b) {
            //         return intVal(a) + intVal(b);
            //     }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 5, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 5 ).footer() ).html(
                'Tk. '+pageTotal 
            );
        },
        scrollY : "300px"

    } );
} );


</script>


@endsection


