<div class="container mt-5">
    <a href="{{ route('view.produk.add') }}" class="btn btn-danger">[+] Tambah</a>
    <br>
    <span class="text-danger">{{ (Session::has('status') ? Session::get('status'): "") }}</span>
    <table class="table table-responsive-sm mt-3">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>
                        <img src="{{ asset($item->foto) }}" width="100" height="100">
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>Rp. {{number_format($item->harga , 0 , ',', '.')}}</td>
                    <td>
                        <div class="d-flex">
                            <button href="{{ route('view.edit', $item->id) }}" class="btn btn-secondary me-2">
                                Edit
                            </button>
                        <form action="{{ route('destroy.produk', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary">
                                Hapus
                            </button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>