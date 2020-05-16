@extends('layouts.forms.main')

@section('form')

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">register</div>
	<!-- Main Form -->
	<div class="login-form-1">

            {!! Form::open(['action' => 'PlaceController@store', 'method' =>'POST', 'id'=>'register-form', 'class'=>'text-left']) !!}
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">

                    <div class="form-group">
                        <label for="reg_username" class="sr-only">User name</label>
                        {!! Form::text('reg_username', '', ['id'=>'reg_username','class' => 'form-control', 'placeholder' => 'username']) !!}
                    </div>

                    <div class="form-group">
                        <label for="reg_password" class="sr-only">Password</label>
                        {!! Form::password('reg_password', ['id'=>'reg_password','class' => 'form-control', 'placeholder' => 'password']) !!}
                    </div>

                    <div class="form-group">
                        <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                        {!! Form::password('reg_password_confirm', ['id'=>'reg_password_confirm','class' => 'form-control', 'placeholder' => 'confirm password']) !!}
                    </div>

                    <div class="form-group">
                        <label for="reg_email" class="sr-only">Email</label>
                        {!! Form::email('reg_email','', ['id'=>'reg_email','class' => 'form-control', 'placeholder' => 'email']) !!}
                    </div>

                    <div class="form-group">
                        <label for="reg_fullname" class="sr-only">Full name</label>
                        {!! Form::text('reg_fullname','', ['id'=>'reg_fullname','class' => 'form-control', 'placeholder' => 'full name']) !!}
                    </div>


					<div class="form-group login-group-checkbox">
                        {!! Form::radio('reg_gender','', false ,['id'=>'male','class'=>'', 'placeholder' => 'username']) !!}
                        {!! Form::label('male', 'Male') !!}

                        {!! Form::radio('reg_gender','', false ,['id'=>'female','class'=>'', 'placeholder' => 'username']) !!}
                        {!! Form::label('female', 'Female') !!}
					</div>

					<div class="form-group login-group-checkbox">
                        {!! Form::checkbox('reg_agree','', false ,['id'=>'reg_agree','class'=>'']) !!}
						<label for="reg_agree">i agree with <a href="#">terms</a></label>
					</div>
                </div>

				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="#">login here</a></p>
			</div>
            {!! Form::close() !!}
	</div>
	<!-- end:Main Form -->
</div>

@endsection
