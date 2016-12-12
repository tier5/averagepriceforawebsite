@extends('layouts.master')
@section('content')
<div class="web_section">
     <div class="container">

       <div class="row web_ques_second">
       <h3>DO PEOPLE HAVE TO LOG IN?</h3>
       <P>An email login is generally best to start with unless your app will have tight <br>integration with services like Facebook or Twitters.</P>
       </div>

       <div class="row app_andr">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPagePeopleLogin') :route('postPeopleLogin') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" value="SOCIAL" name="btn"><img src="{{url('/')}}/public/images/log1.png" alt="image"></button>
            <p><button type="submit" value="SOCIAL" name="btn" class="btn btn-default">SOCIAL</button></p>
            <input type="hidden" name="step" value="2"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPagePeopleLogin') :route('postPeopleLogin') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" value="EMAIL" name="btn"><img src="{{url('/')}}/public/images/log2.png" alt="image"></button>
            <p><button type="submit" value="EMAIL" name="btn" class="btn btn-default">EMAIL</button></p>
            <input type="hidden" name="step" value="2"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPagePeopleLogin') :route('postPeopleLogin') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" value="NO" name="btn"><img src="{{url('/')}}/public/images/log3.png" alt="image"></button>
            <p><button type="submit" value="NO" name="btn" class="btn btn-default">NO</button></p>
            <input type="hidden" name="step" value="2"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-3 col-sm-3 col-xs-12">
         <form action="{{ isset($parent) ? route('postLastPagePeopleLogin') :route('postPeopleLogin') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" value="DON'T KNOW" name="btn"><img src="{{url('/')}}/public/images/log4.png" alt="image"></button>
            <p><button type="submit" value="DON'T KNOW" name="btn" class="btn btn-default">DON'T KNOW</button></p>
            <input type="hidden" name="step" value="2"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-3 -->
       </div>
@endsection