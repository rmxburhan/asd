  <div class="container mt-5">
    <div class="row">
        @foreach ($data as $item)
        <div class="col-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ $item->foto }}" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title">{{ $item->name }}</h5>
                  <p class="card-text">Rp. {{ number_format($item->harga ,0,',','.')}}</p>
                  <a href="{{ route('view.detail', $item->id) }}" class="btn btn-info text-white">Detail</a>
                </div>
              </div>
            </div>
            @endforeach
    </div>
  </div>