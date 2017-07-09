@extends('layouts.master-general')
@section('stylesheets')
  <link href="css/right-side-bar.css" type="text/css" rel="stylesheet">
  <style type="text/css">
    .jumbotron
    {
        padding-top: 2.5cm;
    }
  </style>
@endsection
@section('content')

  
    <div class="row" style="padding-top: 1cm">
        <div class="col-md-9">
            <div class="jumbotron" id="upcoming-events">
                 <h1>Upcoming Events</h1>

                <p>This is a template for a simple marketing or informational website. It
                    includes a large callout called the hero unit and three supporting pieces
                    of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg">Learn more »</a>
                </p>
            </div>
            <div class="jumbotron" id="achievements">
                 <h1>Achievements</h1>

                <p>This is a template for a simple marketing or informational website. It
                    includes a large callout called the hero unit and three supporting pieces
                    of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg">Learn more »</a>
                </p>
            </div>
            <div class="jumbotron" id="provosts">
                 <h1>Provosts</h1>

                <p>This is a template for a simple marketing or informational website. It
                    includes a large callout called the hero unit and three supporting pieces
                    of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg">Learn more »</a>
                </p>
            </div>
            <div class="jumbotron" id="alumni">
                 <h1>Alumni</h1>

                <p>This is a template for a simple marketing or informational website. It
                    includes a large callout called the hero unit and three supporting pieces
                    of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg">Learn more »</a>
                </p>
            </div>
           
        </div>
        <!--/span-->
        <!-- /#sidebar-wrapper -->
        <div class="col-md-3">
            <div class="sidebar-nav-fixed pull-right affix">
                <div class="well">
                    <ul class="nav ">
                        <!-- <li class="nav-header">Sidebar</li> -->
                        <li> <a href="#upcoming-events">Upcoming Events</a>
                        </li>
                        <li><a href="#achievements">Achievements</a>
                        </li>
                        <li><a href="#provosts">Provosts</a>
                        </li>
                        <li><a href="#alumni">Alumni</a>
                        </li>


                    </ul>
                </div>
                <!--/.well -->
            </div>
            <!--/sidebar-nav-fixed -->
        </div>
   </div>

<!--/.fluid-container-->
@endsection