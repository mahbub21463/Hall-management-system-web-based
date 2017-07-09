 @extends('layouts.master-supervisor-side')

 @section('stylesheets')

 <link rel="stylesheet" href="css/toppadding.css">
<link rel="stylesheet" href="css/tablehead.css">
<link rel="stylesheet" href="css/supervisor-payments.css">

 @endsection

 @section('content')


<!-- <div class="row" style="margin-top:30px;text-align:center">
    <div class="col-md-12">
        <div class="jumbotron">
            <h3>Add Payment Detais</h3>
        </div>
    </div>
</div> -->

 <div class="row" style="margin-top:30px;text-align:center">
 <h1> <span class="label label-success">Add Payments</span></h1>
 </div>
 <hr>
 <div class="row">
  <div class='col-md-12'>
  {!!Form::open(['route' => 'payments.store']) !!}
    <table id="add-payments-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead class="thead-inverse">
        <tr>
            <th>Student ID</th>
            <th>Fee Type</th>
            <th>Amount</th>
            <th>Payment Date</th>
            <th>Bank Scroll Number</th>
       
        </tr>
    </thead>
 
    <tfoot class="thead-inverse">
        <tr>
           <th>Student ID</th>
            <th>Fee Type</th>
            <th>Amount</th>
            <th>Payment Date</th>
            <th>Bank Scroll Number</th>
        </tr>
    </tfoot>
 
    <tbody>
        <tr>
            <td><input type="text" name="student_id1"/></td>
            <td>
                <select name="fee_type1" style="border:0;
                    width:100%">
                    <option value="Mess Charge">Mess Charge</option>
                    <option value="Hall Admission Fee">Hall Admission Fee</option>
                    <option value="Hall Attachment Fee">Hall Attachment Fee</option>
                    <option value="Others">Residency</option>

                </select> 
       
            </td>
            <td><input type="text" name="amount1"/></td>
             <td>
                 {{Form::date('payment_date1', \Carbon\Carbon::now()),['class'=>'form-control']}}
             </td>
            <td><input type="text" name="bankscroll1"/></td>
        </tr>
        <tr>
            <td><input type="text" name="student_id2" /></td>
            
            <td>
                <select name="fee_type2" style="border:0;width:100%">
                    <option value="Mess Charge">Mess Charge</option>
                    <option value="Hall Admission Fee">Hall Admission Fee</option>
                    <option value="Hall Attachment Fee">Hall Attachment Fee</option>
                    <option value="Others">Residency</option>

                </select> 
            </td>
            <td><input type="text" name="amount2"/></td>
            <td>
                 {{Form::date('payment_date2', \Carbon\Carbon::now()),['class'=>'form-control']}}
             </td>
            <td><input type="text" name="bankscroll2" /></td>
        </tr>
        <tr>
            <td><input type="text" name="student_id3"/></td>
            <td>
                <select name="fee_type3" style="border:0;
                    width:100%">
                    <option value="Mess Charge">Mess Charge</option>
                    <option value="Hall Admission Fee">Hall Admission Fee</option>
                    <option value="Hall Attachment Fee">Hall Attachment Fee</option>
                    <option value="Others">Residency</option>

                </select> 
       
            </td>
            <td><input type="text" name="amount3"/></td>
             <td>
                 {{Form::date('payment_date3', \Carbon\Carbon::now()),['class'=>'form-control']}}
             </td>
            <td><input type="text" name="bankscroll3"/></td>
        </tr>
        <tr>
            <td><input type="text" name="student_id4" /></td>
            
            <td>
                <select name="fee_type4" style="border:0;width:100%">
                    <option value="Mess Charge">Mess Charge</option>
                    <option value="Hall Admission Fee">Hall Admission Fee</option>
                    <option value="Hall Attachment Fee">Hall Attachment Fee</option>
                    <option value="Others">Residency</option>

                </select> 
            </td>
            <td><input type="text" name="amount4"/></td>
            <td>
                 {{Form::date('payment_date4', \Carbon\Carbon::now()),['class'=>'form-control']}}
             </td>
            <td><input type="text" name="bankscroll4" /></td>
        </tr>
         <tr>
            <td><input type="text" name="student_id5" /></td>
            
            <td>
                <select name="fee_type5" style="border:0;width:100%">
                    <option value="Mess Charge">Mess Charge</option>
                    <option value="Hall Admission Fee">Hall Admission Fee</option>
                    <option value="Hall Attachment Fee">Hall Attachment Fee</option>
                    <option value="Others">Residency</option>

                </select> 
            </td>
            <td><input type="text" name="amount5"/></td>
            <td>
                 {{Form::date('payment_date5', \Carbon\Carbon::now()),['class'=>'form-control']}}
             </td>
            <td><input type="text" name="bankscroll5" /></td>
        </tr>
        
       
    </tbody>
    {{Form::submit('Submit',['class' => 'btn btn-success btn-lg'])}}
 {!!Form::close()!!}
  
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