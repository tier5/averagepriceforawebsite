@extends('layouts.master')
@section('content')
	<div class="web_section">
    <div class="container">
       <div class="row web_ques_second">
       <h3>HOW MANY MARKETING PAGES DO YOU WANT ?</h3>
       <P></P>
       </div>
      <div class="row app_andr">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <form action="{{ isset($parent) ? route('postLastPageMarketingPages') :route('postMarketingPages') }}" method="post">
              <button type="submit" class="transparent-btn inside-img" value="1-3" name="btn"><img src="{{url('/')}}/public/images/web2.png" alt="image"></button>
              <p><button type="submit" value="1-3" name="btn" class="btn btn-default">1-3</button></p>
              <input type="hidden" name="step" value="1"></input>
              <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
            </form>
          </div><!-- /.col-lg-3 -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <form action="{{ isset($parent) ? route('postLastPageMarketingPages') :route('postMarketingPages') }}" method="post">
              <button type="submit" class="transparent-btn inside-img" value="4-9" name="btn"><img src="{{url('/')}}/public/images/web3.png" alt="image"></button>
              <p><button type="submit" value="4-9" name="btn" class="btn btn-default">4-9</button></p>
              <input type="hidden" name="step" value="1"></input>
              <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
            </form>
          </div> <!-- /.col-lg-3 -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <form action="{{ isset($parent) ? route('postLastPageMarketingPages') :route('postMarketingPages') }}" method="post">
              <button type="submit" class="transparent-btn inside-img" value="10+" name="btn"><img src="{{url('/')}}/public/images/web4.png" alt="image"></button>
              <p><button type="submit" value="10+" name="btn" class="btn btn-default">10+</button></p>
              <input type="hidden" name="step" value="1"></input>
              <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
            </form>
          </div> <!-- /.col-lg-3 -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <form action="{{ isset($parent) ? route('postLastPageMarketingPages') :route('postMarketingPages') }}" method="post">
              <button type="submit" class="transparent-btn inside-img" value="DON'T KNOW" name="btn"><img src="{{url('/')}}/public/images/web5.png" alt="image"></button>
              <p><button type="submit" value="DON'T KNOW" name="btn" class="btn btn-default">DON'T KNOW</button></p>
              <input type="hidden" name="step" value="1"></input>
              <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection