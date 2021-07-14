<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pools manager</title>


    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto|Varela+Round'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script>


    <link rel="stylesheet" href="/editor/minified/themes/default.min.css"/>

    <!-- Include the editors JS -->



    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/i18n/defaults-*.min.js"></script>

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <script type="text/javascript" src="{{ url('js/index.js') }}"></script>


</head>

<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-5">
                    <h2><b>Pools</b> Manager</h2>
                </div>
                <div class="col-sm-7 d-inline-flex">
                    <a href="{{ url('/admin/facility') }}" class="btn btn-success"><span>Facility</span></a>
                    <a href="{{ url('/admin/pool') }}" class="btn btn-info"><span>Pool</span></a>
                    <a href="{{ url('/admin/country') }}" class="btn btn-success"><span>Country</span></a>
                    <a href="{{ url('/admin/state') }}" class="btn btn-info"><span>State</span></a>
                    <a href="{{ url('/admin/city') }}" class="btn btn-success"><span>City</span></a>
                    <a href="{{ url('/admin/waterslide') }}" class="btn btn-info"><span>Waterslide</span></a>
                    <a href="{{ url('/admin/blog') }}" class="btn btn-success"><span>Blog</span></a>

                    <a href="{{ route('logout') }}" class="logout-link btn btn-danger"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>