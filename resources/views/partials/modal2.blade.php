  <!-- Modal -->
  <div class="modal fade" id="albumdetail" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">

{{$albums}}
@foreach ($albums as $item)
      <h2>{{$item->titreSon}}</h2>

<iframe width="100%" height="450" scrolling="no" frameborder="no"
 src="{{$item->lien}}">
</iframe>
@endforeach
        

          

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->




