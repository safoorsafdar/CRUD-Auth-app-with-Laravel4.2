@include("../inc/header")
{{ Form::open(array('url'=>'user/create', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Please Register</h2>
    {{ HTML::ul($errors->all()) }}
    {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
    {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
    {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
    {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
 
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}
@include("../inc/footer")

