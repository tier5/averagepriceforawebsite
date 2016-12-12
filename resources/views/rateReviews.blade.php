@extends('layouts.master')
@section('content')
	<div class="web_section">
     <div class="container">

       <div class="row web_ques_second">
       <h3>DO PEOPLE RATE OR REVIEW THINGS ?</h3>
       <P>Do people rate or review things.</P>
       </div>

       <div class="row app_andr">
        
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPageRateReviews') :route('postRateReviews') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" value="YES" name="btn"><img src="{{url('/')}}/public/images/log12.png" alt="image"></button>
	            <p><button type="submit" value="YES" name="btn" class="btn btn-default">YES</button></p>
	            <input type="hidden" name="step" value="5"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
			<form action="{{ isset($parent) ? route('postLastPageRateReviews') :route('postRateReviews') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" value="NO" name="btn"><img src="{{url('/')}}/public/images/log13.png" alt="image"></button>
	            <p><button type="submit" value="NO" name="btn" class="btn btn-default">NO</button></p>
	            <input type="hidden" name="step" value="5"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPageRateReviews') :route('postRateReviews') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" value="DON'T KNOW" name="btn"><img src="{{url('/')}}/public/images/log14.png" alt="image"></button>
	            <p><button type="submit" value="DON'T KNOW" name="btn" class="btn btn-default">DON'T KNOW</button></p>
	            <input type="hidden" name="step" value="5"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-3 -->
       </div>
@endsection