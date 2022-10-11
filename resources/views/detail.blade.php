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
                <img src="{{  $produk->foto  }}" alt="{{ $produk->name }}">
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $produk->name }}</h3>
                        <p>Rp. {{ number_format($produk->harga, 0,',','.') }}</p>
                        <h6>Kategori : {{ $produk->kategori->name }} </h6>
                        <form action="{{ route('keranjang', $produk->id) }}" method="POST" >
                            @csrf
                            <input type="number" name="qty" class="form-control mb-2">
                            @if(Session::has('status'))
                                <p class= "text-danger">{{ Session::get('status') }}</p>
                            @endif
                            <input type="submit" value="Masukan keranjang" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.js')
</body>
</html>