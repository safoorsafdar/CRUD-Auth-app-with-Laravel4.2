@include("../inc/header")
{{ Form::open(array('url'=>'user/signin', 'class'=>'form-signin')) }}
    <h2 class="form-signin-heading">Please Login</h2>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
 
    {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}
@include("../inc/footer")

