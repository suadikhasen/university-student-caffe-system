@extends('extend.extend')
@section('title','log in')
@section('header')
  @include('includes.header')
@endsection


@section('body')
  
@if(Session::has('username_password'))
  <div class="alert alert-danger">
    {{ Session::get('username_password') }}
  </div>
@endif

  <div class="container" style="padding-top: 100px;">
      @if(Session('message'))
      <div class="alert alert-danger ">
          {{ Session('message') }}
      </div>
      @endif
      <div class="row">
          <div class="col-md-6">
              <div style="text-align: center;"><small>sign in</small></div>
              <form method="post" action="{{ route('adminhome') }}">
                @method('post')
                <div class="form-group">
                    <input type="text" name="username" placeholder="your username" autofocus="autofocus" class="form-control" required="required">
                    
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="your password" class="form-control" required="required">
                </div>
                <input type="submit" name="submit" value="sign in" class="btn btn-primary">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>
          </div>
      </div>

  </div>

@endsection
