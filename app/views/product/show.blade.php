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
        <a class="navbar-brand" href="{{ URL::to('product') }}">Products</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('product') }}">View All Products</a></li>
        <li><a href="{{ URL::to('product/create') }}">Create a Product</a>
    </ul>
</nav>

<h1>Showing {{ $product_detail->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{$product_detail->name }}</h2>
        <p>
            <!--<strong>Email:</strong> {{ $product_detail->email }}<br>-->
<!--            <strong>Level:</strong> {{ $product_detail->nerd_level }}-->
        </p>
    </div>

</div>
</body>
</html>