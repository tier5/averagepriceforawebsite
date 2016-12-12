<!DOCTYPE html>
<html lang="en">
  <head>
   @include('includes.head-scripts')
  </head>

  <body>
   <div class="web_option_section budget_link">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <a href="{{ route('index') }}"><i class="fa fa-arrow-left fa-2x web_last_click"><span>Start Again</span></i></a>
        </div>
         <div class="col-md-6 col-sm-6 col-xs-6 budget_area">
          <p><a class="btn btn-default pull-right" href="#" role="button">GET LINK TO SAVE OR SHARE</a></p>
         </div>
        
        <a target="_blank" href="http://www.tier5.us"><img src="{{url('/')}}/public/images/logo.png" class="img-responsive center-block pages_logo" alt="Responsive image"></a>
      </div>
     </div>
   </div>

   <div class="web_option_section">
     <div class="container">
       
       <div class="row message_box center-block">
         <h3>YOUR WEBSITE ESTIMATE: ${{ Session::get('tier5_cost_step10') }}</h3>
         
         <h3>OTHER COMPANY'S COST: ${{ Session::get('other_cost_step10') }}</h3>
        <div style="display: none;">
            @foreach($details as $detail)
              {{$data[] = $detail}}
            @endforeach 
        </div>
         <!-- <h4><a href="#">SHOW BREAKDOWN</a></h4> -->
         <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">SHOW BREAKDOWN <i class="fa fa-caret-square-o-down"></i>
         </button>
          <div id="demo" class="collapse">
            <hr>
            <p>HOW MANY MARKETING PAGES DO YOU WANT ? {{ $data[0]->name }}<a href="{{ route('changeMarketingpages', ['step' => base64_encode(1)]) }}">(Change?)</a></p><hr>

            <p>DO PEOPLE HAVE TO LOG IN? {{ $data[1]->name }} <a href="{{ route('changePeopleLogin', ['step' => base64_encode(2)]) }}">(Change?)</a></p> <hr>

            <p>DO PEOPLE CREATE PERSONAL PROFILES? {{ $data[2]->name }} <a href="{{ route('changePersonalProfiles', ['step' => base64_encode(3)]) }}">(Change?)</a></p><hr>

            <p>WILL YOU NEED TO ACCEPT PAYMENTS ? {{ $data[3]->name }} <a href="{{ route('changePayment', ['step' => base64_encode(4)]) }}">(Change?)</a></p><hr>

            <p>DO PEOPLE RATE OR REVIEW THINGS ? {{ $data[4]->name }} <a href="{{ route('changeRateReview', ['step' => base64_encode(5)]) }}">(Change?)</a></p><hr>

            <p>DOES YOUR WEBSITE NEED SHARING FUNCTION ? {{ $data[5]->name }} <a href="{{ route('changeSharing', ['step' => base64_encode(6)]) }}">(Change?)</a></p><hr>

            <p>DOES YOUR WEBSITE NEED TO CONNECT WITH ANOTHER APP OR WEBSITE? {{ $data[6]->name }} <a href="{{ route('changeConnectTo', ['step' => base64_encode(7)]) }}">(Change?)</a></p><hr>

            <p>DO YOU NEED A CONTENT MANAGEMENT SYSTEM (CMS)? {{ $data[7]->name }} <a href="{{ route('changeCms', ['step' => base64_encode(8)]) }}">(Change?)</a></p><hr>

            <p>DOES YOUR WEBSITE NEED SEARCH? {{ $data[8]->name }} <a href="{{ route('changeSearch', ['step' => base64_encode(9)]) }}">(Change?)</a></p><hr>

            <p>DO YOUR WEBSITE NEED TO LOOK GOOD ON MOBILE DEVICES ? {{ $data[9]->name }} <a href="{{ route('changeLook', ['step' => base64_encode(10)]) }}">(Change?)</a></p><hr>
          </div>
         <p>On Tier 5, we've handpicked the best app and website makers out there. Get your project started now or check out some
         Sexamples of work done on Tier 5.</p>
         <p><a class="btn btn-primary" href="https://www.tier5.us/#contact" role="button">START PROJECT ON TIER5</a></p>
       </div>
      @include('includes.footer')       
  </body>
</html>