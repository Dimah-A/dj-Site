    <!-- blockblack -->
    <div class="blockblack">

        <!-- About Starts -->
        @foreach ($abouts as $item)
        
        <div id="about" class="spacer">
          <h3><span class="{{$item->icon}}"></span> {{$item->titre}}</h3>
          <div class="row">
            <div class="col-lg-4 col-sm-4  col-xs-12">
              <img src="{{asset('storage/'.$item->img)}}" class="img-responsive" alt="about" />
            </div>
            <div class="col-lg-5 col-sm-8  col-xs-12">
              <p>{{$item->paragraphe}}</p>
              <blockquote>{{$item->citation}}</blockquote>
            </div>
            <div class="col-lg-3 visible-lg">
              <div class="fb-like-box" data-href="http://www.facebook.com/thebootstrapthemes" data-colorscheme="dark"
                data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="255">
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
        <!-- About Ends -->