
<div>  
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach ($event as $events)
          <div class="carousel-item active">
            <img src="{{$events->image }}" class="d-block w-100" height="200" alt="...">
          </div>
{{--           <div class="carousel-item">
            <img src="{{$events->image }}" class="card-img-top" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{$events->image }}" class="card-img-top" alt="...">
          </div> --}}
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
     
</div>
