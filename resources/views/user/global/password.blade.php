@extends('user.app')

@section('content')

	@include('user.global._picture')

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="profile-menu widget">
					<ul class="nav nav-pills nav-stacked">
						<li class="{{ set_active('home.profile') }}"><a href="{{ route('home.profile') }}">Profil</a></li>
						<li class="{{ set_active('home.password') }}"><a href="{{ route('home.password') }}">Password</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">			
				<div class="entry profile-form">
					{!! Form::open(['route' => ['auth.passwordupdate'], 'method' =>'patch', 'role' => 'form', 'class' => 'form-horizontal']) !!}
		                <div class="form-body">
							<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
		                        {!! Form::label('password', 'Password', ['class' => 'col-md-3 control-label']) !!}
		                        <div class="col-md-6">
		                            {!! Form::password('password', ['class'=> 'form-control', 'id' => 'password']) !!}
		                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
		                        </div>
		                    </div>
		                    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
		                        {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'col-md-3 control-label']) !!}
		                        <div class="col-md-6">
		                            {!! Form::password('password_confirmation', ['class'=> 'form-control', 'id' => 'password']) !!}
		                            {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
		                        </div>
		                    </div>
		                    <div class="form-group">
			                    <div class="col-md-offset-3">
			                        {!! Form::submit('Update Password', ['class'=>'btn btn-flat btn-success']) !!}
			                    </div>
			                </div>
		                </div>
			        {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection