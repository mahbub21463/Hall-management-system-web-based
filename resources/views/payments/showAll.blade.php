 @extends('layouts.master-supervisor-side')

 @section('stylesheets')


 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11,fc-3.2.1,fh-3.1.1/datatables.min.css"/>
  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.1.2/css/select.dataTables.min.css"/>
 @endsection

 @section('content')

    

 <div class="row" style="margin-top:30px;text-align:center">
 <h1> <span class="label label-default">Payments</span></h1>
 </div>
 





   
    
    <table class="table table-bordered" id="payment-table">
        <thead >
        <tr>
            
            <th>Student ID</th>
            <th>Fee Type</th>
            <th>Amount </th>
            <th>Payment Date</th>
            <th>Bank Scroll No</th>
            <th>Entry Date</th>
            
            
            
        </tr>
    </thead>
    <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{$payment->student_id}}</td>
                <td>{{$payment->fee_type}}</td>
                <td>{{$payment->amount}}</td>
                <td>{{$payment->payment_date}}</td>
                <td>{{$payment->bank_scroll}}</td>
                <td>{{$payment->created_at}}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
          
            <th>Student ID</th>
            <th>Fee Type</th>
            <th>Amount </th>
            <th>Payment Date</th>
            <th>Bank Scroll No</th>
            <th>Entry Date</th>
            
    </tfoot>
        
    </table>


@endsection

@section('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.120.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11,fc-3.2.1,fh-3.1.1/datatables.min.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js"></script>

<script type="text/javascript" >
$(document).ready(function(i)  {
   
    $('#payment-table tfoot th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        //$(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
         $(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
    } );
 
    // DataTable
    var table = $('#payment-table').DataTable({
        
        scrollY:      "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging: true,
        fixedColumns: true,
        select:true
        });
 
    // Apply the search
     $( table.table().container() ).on( 'keyup change', 'tfoot input', function () {
        table
            .column( $(this).data('index') )
            .search( this.value )
            .draw();
    } );
      
    // table.columns().every( function () {
    //     var that = this;
 
    //     $( 'input', this.footer() ).on( 'keyup change', function () {
    //         if ( that.search() !== this.value ) {
    //             that
    //                 .search( this.value )
    //                 .draw();
    //         }
    //     } );
    // } );
} );


</script>


@endsection


