
      <!-- playlist Starts -->
      <div id="playlist" class="spacer">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <h3><span class="glyphicon glyphicon-list"></span> Playlist</h3>
@foreach ($playlists as $item)
    
<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="{{$item->lienPlaylist}}"></iframe>          </div>
@endforeach
        </div>
      </div>
      <!-- #playlist Ends -->

