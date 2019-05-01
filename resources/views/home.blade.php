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

@if($controller==3)
  <div class="alert alert-danger">
  	<p>illegal person</p>
  </div>
@endif

<p id="demo"></p>

<div class="container" >
	<div class="row">
		
			<form method="post" action=" {{ route('student') }}">
			<div class="col-md-6">
				<div class="form-group">
				<input type="text" name="id" class="form-control" autofocus="autofocus">
				</div>
			</div>
			<div class="col-md-2">
				
				<input type="hidden" name="hour" id="hour">
				<input type="hidden" name="minute" id="minute">
				<input type="hidden" name="second" id="second">
				
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="submit" class="btn btn-primary" >
				
                
			</div>

		</form>

	</div>
	
</div>
<div class="container bg-inverse" style="padding: 10px;">
	<div class="row"  style="padding: 10px;">
		<div class="col-md-3" style="padding-top: 30px;">
			<pre class="text-info">Total student   {{ App\Student::count() }}</pre>
			<pre class="text-info">current user student   {{ App\Temporary::count() }}</pre>
			<pre class="text-info">remaining user    {{ (App\Student::count())-(App\Temporary::count()) }}</pre>
		</div>
	  @if($controller!=0 AND $controller!=3 )
			<div class="col-md-3" style="padding: 25px;">
				<img src="{{ asset('img/'.$data->id.'.jpg') }}" class="img-circle" style="width: 150px;height: 150px;">
			</div>
      
           
		       
				<div class="col-md-4" >
					<pre>name     {{ $data->name }}</pre>
					<pre>id       {{   $data->id }}</pre>
					<pre>department {{ $data->department }}</pre>
					<pre>sex       {{ $data->sex }}</pre>
					@if($controller==1)
					<h1 style="background-color: green; text-align: center;">
						have a nice food!!
					</h1>
					@endif
					
	                 @if($controller==2)
						<h1 style="background-color: red; text-align: center;">
							you come a gain
						</h1>
					@endif

				</div>
     @endif

  </div>
	
</div>
@php
	if(!(Session::has('hour'))){
	    $hour=App\time::find(1);
    	Session::put('minute',$hour->minute);
        Session::put('hour',$hour->hour);
        Session::put('second',0);
    }
    

@endphp        	
        
        
<script type="text/javascript">
	function execute(hour,minute,second){
	  
	  if(minute==0){
	  	hour--;
	  	minute=59;
	  }

	  if(second==0){
	    second=60;
	   	minute--;
	   	
	   }
	 second--;
     
     hour1=hour;
	 minute1=minute;
	 second1=second;
  
	document.getElementById('demo').innerHTML='0'+hour+':'+ minute+':'+second;
	document.getElementById('hour').value=hour1;
    document.getElementById('minute').value=minute1;
    document.getElementById('second').value=second1;
    
	var recursion=setTimeout(execute, 1000,hour,minute,second);
    

	}
   
	execute(<?php echo Session::get('hour');?>,<?php echo Session::get('minute');  ?>,<?php  echo Session::get('second'); ?>);

</script>
@endsection