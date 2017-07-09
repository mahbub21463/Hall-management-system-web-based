 @extends('layouts.master-supervisor-side')

 @section('stylesheets')

 <link rel="stylesheet" href="css/toppadding.css">
<link rel="stylesheet" href="css/tablehead.css">


 @endsection

 @section('content')

    

<div class="row" style="padding-top: 1cm;padding-left: 1cm">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="text-center">
                <h2>Student Database</h2>
                    <!-- <hr class="featurette-divider"></hr> -->
             </div>
        </div>
    </div>
</div>
 <div class="row" style="padding-left: 2cm">


  <div class='col-md-12'>
   
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead class="thead-inverse">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Dept</th>
            <th>Level</th>
            <th>Term</th>
            <th>Room No</th>
            <th>Mess Card No</th>
            <th>Library Card No</th>
        </tr>
    </thead>
 
    <tfoot class="thead-inverse">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Dept</th>
            <th>Level</th>
            <th>Term</th>
            <th>Room No</th>
            <th>Mess Card No</th>
            <th>Library Card No</th>
        </tr>
    </tfoot>
 
    <tbody>
        <tr>
            <td>1205063</td>
            <td>Mahbub Alam</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>
        </tr>
        <tr>
             <td>1205079</td>
            <td>Sonjoy</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>       
        </tr>
        <tr>
             <td>1205043</td>
            <td>Biswajeet</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>
        </tr>
       
       <tr>
            <td>1205063</td>
            <td>Mahbub Alam</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>
        </tr>
        <tr>
             <td>1205079</td>
            <td>Sonjoy</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>       
        </tr>
        <tr>
             <td>1205043</td>
            <td>Biswajeet</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>
        </tr>
       <tr>
            <td>1205063</td>
            <td>Mahbub Alam</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>
        </tr>
        <tr>
             <td>1205079</td>
            <td>Sonjoy</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>       
        </tr>
        <tr>
             <td>1205043</td>
            <td>Biswajeet</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>
        </tr>
       <tr>
            <td>1205063</td>
            <td>Mahbub Alam</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>
        </tr>
        <tr>
             <td>1205079</td>
            <td>Sonjoy</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>       
        </tr>
        <tr>
             <td>1205043</td>
            <td>Biswajeet</td>
            <td>CSE</td>
            <td>3</td>
            <td>2</td>
            <td>1002</td>
             <td>9</td>
            <td>102</td>
        </tr>
       
    </tbody>
</table>
  </div>  
</div>

@endsection

@section('scripts')


@endsection