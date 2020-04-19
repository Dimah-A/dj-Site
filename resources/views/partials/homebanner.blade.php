  <!-- overlay -->
  <div class="container overlay">


    <!-- home banner starts -->
    <div id="home" class="homeinfo">
      @can('index', App\User::class)
      
      <button class="btn btn-danger ">
        <a href="{{route('admin')}}">ADMIN</a>
      </button>
      @endcan
      


      @guest
      <button class="nav-item btn btn-warning">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </button>
      @if (Route::has('register'))
          <button class="nav-item btn btn-warning text-white">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </button>
      @endif
  @else
      <li class="nav-item dropdown">
        
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
  @endguest







      <div class="row">
        @foreach ($homes as $item)
            
        <div class="col-sm-6 col-xs-12">
          <div class="fronttext">
          <h2 class="bgcolor  animated fadeInUpBig "><span class="{{$item->icon}}"></span> {{$item->titre}}
            </h2><br>
            <p class=" animated fadeInUp">{{$item->paragraphe}}</p>
          </div>
        </div>

        <div class="col-sm-5 col-xs-12 col-sm-offset-1">
          <div class="player">
            <img src="{{asset('storage/'.$item->img)}}" class="graphics hidden-xs  animated fadeInRightBig" alt="dj" />
            

            <iframe width="100%" height="170" scrolling="no" frameborder="no" allow="autoplay" src="{{$item->son}}" frameborder="0"></iframe>
            
          </div>
        </div>
        @endforeach

      </div>
    </div>
    <!-- home banner ends -->