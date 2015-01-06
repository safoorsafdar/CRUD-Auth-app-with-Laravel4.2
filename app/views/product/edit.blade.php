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

<h1>Edit {{ $product_detail->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($product_detail, array('route' => array('product.update', $product_detail->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>