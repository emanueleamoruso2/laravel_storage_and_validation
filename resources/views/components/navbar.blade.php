<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid px-0">
    <a class="navbar-brand clink ms-0 ps-3 me-0" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="navbar-collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white clink" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white clink" href="{{route('index')}}">I miei prodotti</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link text-white clink" aria-disabled="false" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white clink" aria-disabled="false" href="{{route('login')}}">Accedi</a>
        </li>
        @endguest
        @auth
         <li class="nav-item">
          <a class="nav-link text-white clink" aria-disabled="false" href="{{route('product.create')}}">Crea_Prodotto</a>
        </li>
        <li class="nav-item">
          <form method="POST" enctype="multipart/form-data" action="{{route('logout')}}">
          <a class="nav-link text-white clink2" aria-disabled="false"> <button type="submit">Logout</button></a>
          </form>
        </li>
        @endauth
      </ul>
      @auth
      <ul class="me-2 mb-2 mb-lg-0">
        <li class="nav-item me-2">
          <a class="nav-link text-white clink me-0" aria-disabled="false" href="#">Benvenuto {{Auth::user()->name}}</a>
        </li>
      </ul>
        @endauth
    </div>
  </div>
</nav>