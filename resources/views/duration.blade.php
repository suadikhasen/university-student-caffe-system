@extends('extend.extend')
@section('title','adminhome')
@section('header')
  @include('includes.header')
@endsection
@section('body')
 <nav class="navbar navbar-default">
	<div class="navbar-brand navbar-left">
       <p>WOU CAFFE</p>
	</div>
	<div class="navbar-brand navbar-right">
		<a href="{{ route('adminlogout') }}"><span class="glyphicon glyphicon-log-out"></span>Log out</a>
		
	</div>

	<div class="navbar-right navbar-brand">
		<div class="dropdown">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href=" {{ route('add_user') }} ">Add User</a></li>
				<li><a href="{{ route('add_one') }}">Add One student</a></li>
				<li><a href="{{ route('add_multi') }}">Upload Student file</a></li>
				<li><a href=" {{ route('delete_one') }} ">Delete One Student</a></li>
				<li><a href="{{ route('delete_all') }}">Delete All student</a></li>
				<li><a href="{{ route('duration') }}">Change Duration</a></li>
				<li><a href="http://localhost/phpmyadmin">Go to Database</a></li>
			</ul>
		</div>
	</div>
 
</nav>

<div class="container" style="margin-top: 150px;">
		@if(Session::has('duration_message'))
	      <div class="alert alert-success">
	      	{{ Session::get('duration_message') }}
	      </div>
		@endif

        @if(Session::has('duration_message_error'))
	      <div class="alert alert-danger">
	      	{{ Session::get('duration_message_error') }}
	      </div>
		@endif
       <h1 style="background-color: green;text-align: center;">Changing A time</h1>
	  <form method="post" action=" {{ route('duration_control') }} ">
	  	 
			<div class="form-group">
				<input type="text" name="hour" placeholder="enter a hour" required="required" class="form-control" autofocus="autofocus">

			</div>

			<div class="form-group">
				<input type="text" name="minute" placeholder="enter a minute" required="required" class="form-control">
			</div>
	       

	        <div class="form-group">
	        	<button type="submit" name="submit" value="change" class="btn btn-primary">change time</button> 
	        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	        </div>
	        
	  </form>
</div>

@endsection

