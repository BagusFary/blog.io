

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/posts">Bioskop XXI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" aria-current="page" href="/posts"><i class="bi bi-film"></i> Now Playing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" aria-current="page" href="/categories"> Genres</a>
          </li>  
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" aria-current="page" href="/about"><i class="bi bi-info-circle"></i> About Us</a>
          </li> --}}
       
        </ul>


        <ul class="navbar-nav ms-auto">
        @auth
               
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @can('admin')
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Administrator</a></li>
            <li><hr class="dropdown-divider"></li>
            @endcan

            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
              
            </li>
          </ul>
        </li>

            @else

            
              <li class="nav-item">
                <a href="/login" class="nav-link" {{ ($active === 'login') ? 'active' : '' }}><i class="bi bi-box-arrow-in-right"></i>Login</a>
              </li>
            </ul>


        @endauth


        
      </div>
    </div>
  </nav>





  <div class="container mt-4">

    @yield('container')
    
</div>