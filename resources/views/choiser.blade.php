@extends('extend.extend')
@section('title','home')
@section('header')
  @include('includes.header')

@endsection
@section('body')
<nav class="navbar navbar-default">
	<div class="navbar-brand navbar-left">
       <p>WOU CAFFE</p>
	</div>
	<div class="navbar-brand navbar-right">
		<a href="{{ route('logout') }}">
			<span class="glyphicon glyphicon-log-out"></span>
			Log out
		</a>
		
	</div>
 
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-6">
		  <div class="modal-title bg-primary" style="text-align: cennter;"><h1 style="text-align: center;">Choose The Current Task</h1></div>
		    <br>

		  <div class="btn-link"><a href="#"><h1 style="background-color: 190,113,57;">BreakFast</h1></a></div>

		  <div class="btn-link"><a href="#"><h1>Launch</h1></a></div>

		  <div class="btn-link"><a href="#"><h1>Break Fast</h1></a></div>

		</div>
	</div>
	
</div>
@endsection