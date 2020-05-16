@extends('layouts.forms.main')

@section('form')

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		{!! Form::open(['action' => 'UserController@index', 'method' =>'POST']) !!}
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
                    <div class="form-group">
                        {!! Form::text('lg_username', '', ['id'=>'lg_username','class' => 'form-control', 'placeholder' => 'username']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('lg_password', ['id'=>'lg_password','class' => 'form-control', 'placeholder' => 'password']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::checkbox('lg_remember', '', false, ['id'=>'lg_remember','class' => 'form-control']) !!}
                         {!! Form::label('lg_remember', 'remmber') !!}
                    </div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>forgot your password? <a href="#">click here</a></p>
				<p>new user? <a href="#">create new account</a></p>
			</div>
            {!! Form::close() !!}
	</div>
	<!-- end:Main Form -->
</div>


@endsection
