 @extends('layouts.master-student-side')

 @section('stylesheets')
 <link rel="stylesheet" href="css/payment-details-reset.css">
 <link rel="stylesheet" href="css/payment-details-style.css">
 <link rel="stylesheet" href="css/date-picker.css">



 @endsection

 @section('content')

 <div class="row" style="padding-top: 1cm">

  <div class='col-md-2'>

  </div>
  <div class='col-md-8 well'>
    <div class="row">
      <div class="jumbotron">

        <div class="col-md-12 text-center">
        <h3>Send Complaint</h3>
          <!-- <hr class="featurette-divider"></hr> -->
        </div>
      </div>

    </div>
    <!-- <script src='https://js.stripe.com/v2/' type='text/javascript'></script> -->
    <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post">
     <div style="margin:0;padding:0;display:inline">
      <input name="utf8" type="hidden" value="✓" />
      <input name="_method" type="hidden" value="PUT" />
      <input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" />
    </div>




    <div class='form-row'>
      <div class='col-xs-12 form-group'>
        <label class='control-label'>Subject</label>
        <input autocomplete='off' class='form-control' size='20' type='text'>
      </div>

    </div>










    <div class='form-row'>
      <div class='col-xs-12 form-group'>
        <label class='control-label'>Complain</label>
        <textarea class='form-control' name="message" rows="8" cols="30" placeholder="Write your complain here..."></textarea>
      </div>

    </div>





    <div class='form-row'>
      <div class='col-xs-12 form-group'>
       <hr class="featurette-divider"></hr>

       <div class='error form-group hide'>
        <div class='alert-danger alert'>
          Please correct the errors and try again.

        </div>
      </div>

      <button class='form-control btn btn-primary submit-button' type='submit'> Submit</button>

    </div>
  </div>


</form>

</div>
</div>
<div class='col-md-2'>

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