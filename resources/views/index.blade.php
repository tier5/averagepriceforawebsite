<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head-scripts')
</head>
  <body>
  {{Session::flush()}}
   <div class="head_start">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <a href="#"><i class="fa fa-bars fa-2x first_click"><span style="font-size:20px;">MENU</span></i></a>
        </div>
         
        
        <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-3 social_share">
          <div class="corners corner--t-r js-fade-this fadeIn">
          <!-- AddToAny BEGIN -->

            <div class="a2a_kit a2a_kit_size_20 a2a_default_style">
            
            <p><a id="tw" class="a2a_button_twitter pull-right">Tweet</a></p>
            <p><a id="fb" class="a2a_button_facebook pull-right">Share</a></p>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
             <!-- AddToAny END -->
            <!-- <div class="social-buttons hidden-xs"> -->
            <!-- Facebook Share Button -->
            
            <!-- <div class="fb-share-button" data-href="http://howmuchtomakeanapp.com" data-layout="button"></div> -->
            

            <!-- Twitter Tweet Button -->
            <!-- <a href="https://twitter.com/share" class="twitter-share-button" data-text="How much does it cost to make an app? Find out in less than a minute. –" data-count="none"></a> -->
            <script>
            // !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            </script>
        
           <!-- </div> -->
          </div>
        </div>
      </div>
      <a target="_blank" href="http://www.tier5.us"><img src="{{url('/')}}/public/images/web1.png" class="img-responsive center-block wow fadeInDown" alt="Responsive image"></a>
    </div>
   </div>

  <div class="ques_session">
    <div class="container">
       
       <div class="row intro_page">
        <a target="_blank" href="http://www.tier5.us"><img src="{{url('/')}}/public/images/logo.png" class="img-responsive center-block web_startup wow fadeInDown" alt="Responsive image"></a>
        <h1 class="blue_font">HOW MUCH DOES A WEBSITE COST</h1>
        <p class="text_intro">Easily calculated the cost of a website using this tool.</p>
        <form method="post" accept-charset="utf-8" action="/estimates/question/type">
        <div style="display:none;"><input type="hidden" name="_method" value="POST"></div> 
        <!-- <button type="button" href="first2.html" class="btn btn-primary get_start">GET STARTED</button> -->
        <p><a class="btn btn-primary get_start" href="{{ route('getMarketingPages') }}" role="button">GET STARTED</a></p> 
       </div>
    </div>
  </div>
       @include('includes.footer')       
  </body>
</html>