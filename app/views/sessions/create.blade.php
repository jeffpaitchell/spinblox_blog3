@extends('layouts.master')

@section('content')

<h1>Login</h1>

<div class="admin_login_form">
{{ Form::open(array('route' => 'sessions.store')) }}

		<table>

		<tr>
			<td>{{ Form::label('email', 'Email:') }}</td>
			<td>{{ Form::text('email') }}</td>
		</tr>	

		<tr>	
			<td>{{ Form::label('password', 'Password:') }}</td>
			<td>{{ Form::password('password') }}</td>
		</tr>	

		</table>
			{{ Form::submit() }}	


{{ Form::close() }}		
</div>

@stop

