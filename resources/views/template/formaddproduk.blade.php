<div class="container mt-5 px-5">
    <div class="card mx-5 shadow">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h3 class="text-center" >Tambah produk</h3>
                    <form action="{{ route('store.produk') }}" method="POST" class="mt-3">
                        <div class="mb-3">
                            <input type="text" name="name" id="namaProduk" class="form-control" placeholder="Nama produk">
                        </div>
                        <div class="mb-3">
                            <select class="form-select form-select" aria-label=".form-select-sm example">
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="harga" id="hargaProduk" class="form-control" placeholder="Harga">
                        </div>
                            <button class="btn btn-danger">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
