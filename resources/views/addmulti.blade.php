
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

<div class="container">
 	<div class="badge badge-info">
 		<h3>Dear Admin</h3>
 		<div class="alert alert-info">
 			<p>
 				before you upload the following condition must be satisfied

 			</p>
 			<p>your file must be an sql file format</p>
 			<p>the column of your file must be identical with the column of student table (see student table)</p>
 			<p>the table name must be student </p>
 		</div>
 		<p>in order to upload student file follow the following method </p>
 		<span>step1: </span> <p>go to your admin homepage</p>
        <span>step2: </span> <p>go to your  admin button and click it</p>
        <span>step3: </span> <p>select "Go to your database"</p>
        <span>step4: </span> <p> select "homestad database"</p>
        <span>step5: </span> <p>select "export button at the top"</p>
        <span>step6: </span> <p>click browse</p>
        <span>step7: </span> <p>select your sql file and click upload</p>


 	</div>
@endsection