<div class="container mt-5">
    <a href="" class="btn btn-danger">[+] Tambah</a>
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
                        <form action="" method="POST" class="me-2">
                            <button class="btn btn-secondary">
                                Edit
                            </button>
                        </form>
                        <form action="" method="POST">
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