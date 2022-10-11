<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('partials.css')
</head>
<body>
    @include('template.nav')
    <div class="container mt-5">
        <div class="row">
            
            <div class="col-6">
                <form action="{{ route('bayar', $detailtransaksi->id) }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $detailtransaksi->produk->foto }}" alt="..">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h3>{{ $detailtransaksi->produk->name }}</h3>
                                <h6>Total harga : {{ number_format($detailtransaksi->total_harga, 0,',','.') }}</h6>
                                <span>qty : {{ $detailtransaksi->qty }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h5>Bukti pembayaran</h5>
                                <input type="file" name="bukti_pembayaran" required accept="image/*" class="form-control">
                                <button type="submit" class="btn btn-success mt-3" >Upload</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('partials.js')
</body>
</html>