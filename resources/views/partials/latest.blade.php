     <!-- latest release starts-->

     
     @foreach ($albums as $item)
      <div id="album" class="releases spacer">
        <h3><span class="{{$item->icon}}"></span> Album</h3>


        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="album"><img src="{{asset('storage/'.$item->img)}}" class="img-responsive" alt="music theme" />
              <div class="albumdetail">
                <h5>{{$item->titreSon}}</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span
                class="glyphicon glyphicon-headphones"></span>{{$item->titreSon}}</a>
              </div>

            </div>
          </div>

          {{-- <div class="col-sm-3 col-xs-12">
            <div class="album"><img src="/images/1.jpg" class="img-responsive" alt="music theme" />
              <div class="albumdetail">
                <h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span
                    class="glyphicon glyphicon-headphones"></span> Listen Song</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-12">
            <div class="album"><img src="/images/2.jpg" class="img-responsive" alt="music theme" />
              <div class="albumdetail">
                <h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span
                    class="glyphicon glyphicon-headphones"></span> Listen Song</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-12">
            <div class="album"><img src="/images/4.jpg" class="img-responsive" alt="music theme" />
              <div class="albumdetail">
                <h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span
                    class="glyphicon glyphicon-headphones"></span> Listen Song</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-12">
            <div class="album"><img src="/images/4.jpg" class="img-responsive" alt="music theme" />
              <div class="albumdetail">
                <h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span
                    class="glyphicon glyphicon-headphones"></span> Listen Song</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-12">
            <div class="album"><img src="/images/2.jpg" class="img-responsive" alt="music theme" />
              <div class="albumdetail">
                <h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span
                    class="glyphicon glyphicon-headphones"></span> Listen Song</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-12">
            <div class="album"><img src="/images/3.jpg" class="img-responsive" alt="music theme" />
              <div class="albumdetail">
                <h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span
                    class="glyphicon glyphicon-headphones"></span> Listen Song</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-12">
            <div class="album"><img src="/images/1.jpg" class="img-responsive" alt="music theme" />
              <div class="albumdetail">
                <h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span
                    class="glyphicon glyphicon-headphones"></span> Listen Song</a>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
      @endforeach

      

      <!-- latest release ends-->