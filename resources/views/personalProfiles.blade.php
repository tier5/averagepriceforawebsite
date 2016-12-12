@extends('layouts.master')
@section('content')
	<div class="web_section">
     <div class="container">

       <div class="row web_ques_second">
       <h3>DO PEOPLE CREATE PERSONAL PROFILES?</h3>
       <P>A profile means that some of the people that use your app will have to enter <br>information about themselves that might be viewed publicly.</P>
       </div>

       <div class="row app_andr">
        
        <div class="col-md-4 col-sm-4 col-xs-12">
        	<form action="{{ isset($parent) ? route('postLastPagePersonalProfiles') :route('postPersonalProfiles') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" value="YES" name="btn"><img src="{{url('/')}}/public/images/log5.png" alt="image"></button>
	            <p><button type="submit" value="YES" name="btn" class="btn btn-default">YES</button></p>
	            <input type="hidden" name="step" value="3"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPagePersonalProfiles') :route('postPersonalProfiles') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" value="NO" name="btn"><img src="{{url('/')}}/public/images/log6.png" alt="image"></button>
	            <p><button type="submit" value="NO" name="btn" class="btn btn-default">NO</button></p>
	            <input type="hidden" name="step" value="3"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPagePersonalProfiles') :route('postPersonalProfiles') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" value="DON'T KNOW" name="btn"><img src="{{url('/')}}/public/images/log7.png" alt="image"></button>
	            <p><button type="submit" value="DON'T KNOW" name="btn" class="btn btn-default">DON'T KNOW</button></p>
	            <input type="hidden" name="step" value="3"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
       </div>
    </div>
@endsection