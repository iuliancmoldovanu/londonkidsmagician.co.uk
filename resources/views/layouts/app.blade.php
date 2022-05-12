<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <title>Russell Magician | @yield('title')</title>

@section('style')
    <!-- Styles -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@show
    <style>
        .red-text {
            color: #FF3300 !important;
        }
        .margin-top-20{
            margin-top: 20px;
        }
    </style>

</head>
<body>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">Russell's Magic</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{url('/')}}" class="{{ (Request::is('/')) ? 'active' : '' }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/children')}}" class="{{ (Request::is('children')) ? 'active' : '' }}">
                                Kids Magician
                            </a>
                        </li>
                        <li>
                             <a href="{{url('/adults')}}" class="{{ (Request::is('adults')) ? 'active' : '' }}">
                                Adults Magician
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/gallery')}}" class="{{ (Request::is('gallery')) ? 'active' : '' }}">
                                Magician Gallery
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/contact')}}" class="{{ (Request::is('contact')) ? 'active' : '' }}">
                                Contact Magician
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/faq')}}" class="{{ (Request::is('faq')) ? 'active' : '' }}">
                                FAQ
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <div class="col-md-2"></div>

</div>

<!-- Start Main Content -->
@yield('content')

@section('scripts')
    <!-- JavaScripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
@show
</body>
</html>