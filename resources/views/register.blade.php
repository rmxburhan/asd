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
        <h3 class="text-center">Register</h3>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Name" class="form-label">
                    Name
                </label>
                <input required type="text" name="name" class="form-control" id="Name">
            </div>
            <div class="mb-3">
                <label for="Username" class="form-label">
                    Username
                </label>
                <input required type="text" name="username" class="form-control" id="Username">
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">
                     Password
                 </label>
                 <input required type="text" name="password" id="Password" class="form-control">
            </div>
            <input type="submit" class="btn btn-danger">
        </form>
    </div>
    @include('partials.js')
</body>
</html>