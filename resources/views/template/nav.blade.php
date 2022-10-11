<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Eyyo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('view.keranjang') }}">Keranjang</a>
          </li>
        </ul>
        <div class="ms-auto d-block">
            <a href="{{ route('view.login') }}"class="btn btn-danger ">Login</a>
            <a href="{{ route('logout') }}"class="btn btn-outline-danger">Logout</a>
        </div>
      </div>
    </div>
  </nav>