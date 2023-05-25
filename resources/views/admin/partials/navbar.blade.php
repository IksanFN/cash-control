<nav class="navbar navbar-expand-lg bg-white py-3 sticky-top">
    <div class="container">
      <a class="navbar-brand fw-semibold text-primary" href="">Cash-Control</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Data Siswa
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Siswa</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.kelas.index') }}">Kelas</a></li>
              <li><a class="dropdown-item" href="#">Jurusan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Data Bills
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Bill</a></li>
              <li><a class="dropdown-item" href="#">Week Bill</a></li>
              <li><a class="dropdown-item" href="#">Month Bill</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Transaction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Expense</a>
          </li>
        </ul>
        {{-- @auth --}}
        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
            <img src="" width="40" height="40" class="ms-2 rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">My Dashboard</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="{{ route('admin.logout') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </div>
        {{-- @endauth --}}
      </div>
    </div>
</nav>