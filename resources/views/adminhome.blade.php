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
@if(Session::has('delete_all_message'))
<div class="container">
	<div class="alert alert-success">
		{{ Session::get('delete_all_message') }}
	</div>
</div>
@endif

@if(Session::has('delete_all_message_error'))
<div class="container">
	<div class="alert alert-success">
		{{ Session::get('delete_all_message_error') }}
	</div>
</div>

@endif

@endsection

