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
            <button class="btn btn-danger">[+] Tambah</button>
        <div class="row mt-3">
            <table class="table table-responsive">
                <thead>
                    <th>
                        Id
                    </th>
                    <th>
                        Nama
                    </th>
                    <th>
                        Username
                    </th>
                    <th>
                        Role
                    </th>
                    <th>
                        Aksi
                    </th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $user->id }}
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->username }}
                            </td>
                            <td>
                                {{ $user->role }}
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="" class="btn btn-secondary me-2">Edit</a>
                                <form action="{{ route('user.delete', $user->id) }}" method="POST">
                                @csrf
                            @method("DELETE")
                        <button class="btn btn-danger">Delete</button></form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
    @include('partials.js')
</body>
</html>