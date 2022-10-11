<div class="container">
    @if(Session::has('status'))
    <span class="text-success">Berhasil melakukan cekout</span>
    @endif
    @foreach ($data as $item)
    <div class="row mt-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6 p-2">
                        <img src="{{ $item->produk->foto }}" alt="asd">
                    </div>
                    <div class="col-6 p-2">
                        <h3>{{ $item->produk->name }}</h3>
                        <h6>Harga : Rp. {{ number_format($item->produk->harga, 0, ',','.') }}</h6>
                        <input type="number" name="qty" id="Qty" value="{{ $item->qty }}" class="form-control mb-2">
                        <span>Total : Rp. {{ number_format($item->total_harga, 0,',','.')}}</span>
                        <br>
                        <a href="{{ route('view.bayar', $item) }}" class="btn btn-danger mt-3">Bayar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>