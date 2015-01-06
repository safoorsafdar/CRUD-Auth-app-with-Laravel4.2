<!DOCTYPE html>
<html>
    <head>
        <title>Look! I'm CRUDding</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    @if(Auth::check())
                        <a class="navbar-brand" href="{{ URL::to('product') }}">Products</a>
                    @endif
                </div>
                <ul class="nav navbar-nav">
                    @if(!Auth::check())
                    <li>{{ HTML::link('user/register', 'Register') }}</li>   
                    <li>{{ HTML::link('user/login', 'Login') }}</li>   
                    @else
                    <li><a href="{{ URL::to('product') }}">View All Products</a></li>
                    <li><a href="{{ URL::to('product/create') }}">Create a Product</a>
                    <!--<li>{{ HTML::link('user/logout', 'Logout['.Auth::user()->email.']') }}</li>-->
                    <li><a href="{{ URL::to('user/logout') }}">Logout [<?php echo Auth::user()->email; ?>]</a>
                    @endif
                </ul>
            </nav>
