 @extends('layouts.master-supervisor-side')

 @section('stylesheets')



 @endsection

 @section('content')




 <div class="row" style="text-align:center">
 <h1> <span class="label label-default">Add Payments</span></h1>
 </div>
 <hr>
 {!!Form::open(['route' => 'payments.store']) !!}
 <div class="row">
  <div class='col-md-12'>
  
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
</table>
   
  
  </div>  
</div>
<div class="row">
    <div class="col-md-2 col-md-offset-5">
         {{Form::submit('Submit',['class' => 'btn btn-success btn-lg btn-block'])}}
   
    </div>
</div>
{!!Form::close()!!}
@endsection

@section('scripts')

@endsection