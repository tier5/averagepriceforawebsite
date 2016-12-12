<div class="web_start_up">
<div class="container">
  <div class="row">
    <script type="text/javascript">
      function goBack() {
         window.history.back();
      }
    </script>
    <div class="col-md-5 col-sm-5 col-xs-5">
        @if(Session::get('step') > 0)
          <button class="btn btn-link btn-link-style" onclick="goBack()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous Question</button>
        @else
          <a href="{{ route('index') }}"><i class="fa fa-arrow-left fa-2x web_click"><span>Start Again</span></i></a>
        @endif
    </div>
     <div class="col-md-7 col-sm-7 col-xs-7 cost_area">
     <div style="display: none;">
       {{ $step = Session::get('step') }}
     </div>
      <h4 id="app-price" class="pull-right">Tier5 Cost : $  {{Session::get('tier5_cost_step'.$step)}}
      <br>
      Other Cost : $  {{Session::get('other_cost_step'.$step)}}
      </h4>
     </div>
  <a target="_blank"><img src="{{url('/')}}/public/images/white_logo.png" class="img-responsive center-block pages_logo" alt="Responsive image"></a>
  </div>
 </div>
</div>
