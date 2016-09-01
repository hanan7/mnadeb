@extends('admin-ar/default')
@section('body')
<div class="wrapper">
    
    @include('admin-ar/layouts/sidebar')
    
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my-navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">
                        <i class="fa fa-home"></i>
                        الرئيسية
                    </a>
                </div>
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-left">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-globe"></i>
                                <b class="caret"></b>
                                <span class="notification">5</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>
                        <li class="hidden-xs hidden-sm ser">
                            <a href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="بحث">
                            </div>
                            <button type="submit" class="btn btn-danger">بحث</button>
                        </form>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span><i class="fa fa-user"></i></span> ADMIN
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i>الرئيسية</a></li>
            <li  class="active"><a href="qutations.html">Operation</a></li>
        </ol>
        @yield('content')
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-right">
                    <ul>
                        <li>
                            <a href="#">
                                الرئيسية
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                عن الشركة
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-left">
                    &copy; 2016 <a href="#">Zakaa</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>
@yield('modals')
@endsection
