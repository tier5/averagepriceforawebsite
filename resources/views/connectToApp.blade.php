@extends('layouts.master')
@section('content')
	<div class="web_section">
     <div class="container">

       <div class="row web_ques_second">
       <h3>DOES YOUR WEBSITE NEED TO CONNECT WITH ANOTHER APP OR WEBSITE (IE. SHARE DATA WITH A MOBILE APPLICATION)?</h3>
       <P>This means you'll need to make an API</P>
       </div>

       <div class="row app_andr">
        
        <div class="col-md-4 col-sm-4 col-xs-12">
         <form action="{{ isset($parent) ? route('postLastPageConnectTo') :route('postConnectTo') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" value="YES" name="btn"><img src="{{url('/')}}/public/images/log15.png" alt="image"></button>
            <p><button type="submit" value="YES" name="btn" class="btn btn-default">YES</button></p>
            <input type="hidden" name="step" value="7"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
           <form action="{{ isset($parent) ? route('postLastPageConnectTo') :route('postConnectTo') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" value="NO" name="btn"><img src="{{url('/')}}/public/images/log16.png" alt="image"></button>
            <p><button type="submit" value="NO" name="btn" class="btn btn-default">NO</button></p>
            <input type="hidden" name="step" value="7"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPageConnectTo') :route('postConnectTo') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" value="DON'T KNOW" name="btn"><img src="{{url('/')}}/public/images/log17.png" alt="image"></button>
            <p><button type="submit" value="DON'T KNOW" name="btn" class="btn btn-default">DON'T KNOW</button></p>
            <input type="hidden" name="step" value="7"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-3 -->
       </div>
@endsection