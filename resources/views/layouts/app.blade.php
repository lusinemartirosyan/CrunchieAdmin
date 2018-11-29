<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome -->
    <link href="{{ asset('css/font-awesome/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/favicon.ico') }}">

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Required Prerequisites -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/plugins/MomentsJS/moments.min.js') }}"></script>

    <!-- Date Range Picker -->
    <script src="{{ asset('js/plugins/Daterangepicker/daterangepicker.js')  }}"></script>
    <link rel="stylesheet"  href="{{ asset('css/plugins/Daterangepicker/daterangepicker.css')  }}">

    <!-- Data Tables -->
    <script src="{{ asset('js/plugins/Datatables/jquery.dataTables.min.js')  }}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

    <!-- Main Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="dark-bg">
    <header class="platform-header">
        <div class="container">
            <div class="col-sm-2">
                <img height="45" src="{{ asset('/images/platform-logo.png') }}" alt="Crunche Logo">
            </div>
            <div class="col-sm-8">
                <nav class="navbar">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    @if (Auth::check())
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav platform-header">
                                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">Campaigns</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('campaign') }}">Network Campaigns</a></li>
                                        <li><a href="#">Vault Campaigns</a></li>
                                        <li><a href="#">External Campaigns</a></li>
                                        <li><a href="{{ url('campaign/create') }}">Create Campaign</a></li>
                                        <li><a href="#">Generate Campaign Links</a></li>
                                        <li><a href="#">Test Partner Link</a></li>
                                        <li><a href="#">Deconstruct Link</a></li>
                                        <li><a href="#">Pixel Reference</a></li>
                                        <li><a href="#">System Changes</a></li>
                                        <li><a href="#">Scrubs</a></li>
                                        <li><a href="#">Invoicing - Manage</a></li>
                                        <li><a href="#">Invoicing - View</a></li>
                                        <li><a href="#">Invoice Manager</a></li>
                                        <li><a href="#">Advertiser Invoicing/Commission</a></li>
                                        <li><a href="#">Review Inactive Campaigns</a></li>
                                        <li><a href="#">Banner Manager</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">Traffic</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Statistics</a></li>
                                        <li><a href="#">Hourly</a></li>
                                        <li><a href="#">Traffic Lookup</a></li>
                                        <li><a href="#">Placement Lookup</a></li>
                                        <li><a href="#">Conversion Analysis</a></li>
                                        <li><a href="#">Referrer Analysis</a></li>
                                        <li><a href="#">Display Optimizer</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">Publishers</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('publisher') }}">List</a></li>
                                        <li><a href="{{ url('publisher/create') }}">Create New</a></li>
                                        <li><a href="{{ url('publisher/placementStats') }}">Placement Stats</a></li>
                                        <li><a href="{{ url('publisher/placementMissing') }}">Missing Placements</a></li>
                                        <li><a href="#">API Request Log</a></li>
                                        <li><a href="#">Contacts Review</a></li>
                                        <li><a href="#">Messages</a></li>
                                        <li><a href="#">Applications</a></li>
                                        <li><a href="#">Commission Manager</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">Advertisers</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('advertiser') }}">List</a></li>
                                        <li><a href="{{ url('advertiser/create') }}">Create New</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">VaultAds</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">List AdBlocks</a></li>
                                        <li><a href="#">Create AdBlock</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">Tools</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Redirect Tracer</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    @endif
                </nav>
            </div>
            <div class="col-sm-2">
                <!-- Right Side Of Navbar -->
                <ul class="logged-user-info">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </header>
</div>
@yield('content')
<!-- Scripts -->
<script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>
