<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('partials.css')
</head>
<body>
    @include('template.nav')
    <div class="container mt-5">
        @foreach($detailtransaksi as $item)
        <div class="card">
            <div class="card-body">
                    <div class="row">
                    <div class="col-3">
                        <img src="{{ $item->produk->foto }}" alt="">
                    </div>
                    <div class="col-9">
                        <h5 >{{ $item->produk->name }}</h5>
                        <h6>Invoice : {{ $item->transaksi->kode }}</h6>
                        <p>Harga : Rp. {{ number_format($item->produk->harga , 0 , ',' ,'.') }}
                            <br>
                            <hr>
                            Total : {{ number_format($item->total_harga, 0 , ',','.') }}
                        </p>

                    </div>
                </div>
                </div>
        </div>
        @endforeach
    </div>
    @include('partials.js')
</body>
</html>