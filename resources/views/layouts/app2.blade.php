<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- BOOTSTRAP STYLES-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" /> 
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" /> 
<!-- FONTAWESOME STYLES-->
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
   <!--CUSTOM BASIC STYLES-->
<link href="{{ asset('css/basic.css') }}" rel="stylesheet" />
<!--CUSTOM MAIN STYLES-->
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
<!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    {{-- <title>{{ config('app.name', 'JGX') }}</title> --}}
    <title>@yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    
</head>
<body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">JG EXPRESS</a>
                </div>
        
                <div class="header-right">
        
                    <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                    <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                    <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>
        
                </div>
            </nav>
                <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">
                            <li>
                                <div class="user-img-div">
                                    <img src="{{ asset('img/user.jpeg') }}" class="img-thumbnail" />
        
                                    <div class="inner-text">
                                        {{ Auth::user()->name }} 
                                    <br />
                                        <small>JAM GADANG EXPRESS </small>
                                    </div>
                                </div>
        
                            </li>
        
        
                            <li>
                                <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-desktop "></i>Paket<span class="fa arrow"></span></a>
                                 <ul class="nav nav-second-level">
                                    <li>
                                        <a href="/packets/create"><i class="fa fa-plus"></i>Tambah Paket</a>
                                    </li>
                                    <li>
                                        <a href="/packets"><i class="fa fa-edit"></i>Daftar Paket</a>
                                    </li>
                                </ul>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Kurir<span class="fa arrow"></span></a>
                                 <ul class="nav nav-second-level">
                                    <li>
                                        <a href="/users/create"><i class="fa fa-plus"></i>Tambah Kurir</a>
                                    </li>
                                    <li>
                                        <a href="/users/index"><i class="fa fa-book"></i>Daftar Kurir</a>
                                    </li>   
                                </ul>
                            </li>
                            <li>
                                <a href="table.html"><i class="fa fa-flash "></i>Pengaturan</a>
                                
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                                 <ul class="nav nav-second-level">
                                   
                                     <li>
                                        <a href="form.html"><i class="fa fa-desktop "></i>Basic </a>
                                    </li>
                                     <li>
                                        <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>
                                    </li>
                                     
                                   
                                </ul>
                            </li>
                              
                        </ul>
        
                    </div>
        
                </nav>
                <!-- /. NAV SIDE  -->
                <div id="page-wrapper">
                    <div id="page-inner">
            @yield('content')
    </div>
    </div>
    </div>
</body>
<div id="footer-sec">
    &copy; 2020<a href="#" target="_blank">Jam Gadang Express</a>
</div>
<!-- /. FOOTER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
<script src=""></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
   <!-- CUSTOM SCRIPTS -->
<script src="{{ asset('js/custom.js') }}"></script>

</html>
