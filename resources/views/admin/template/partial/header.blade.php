
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
     <meta name="csrf-token" content="{{ csrf_token() }}">
      <div class="input-group input-group-sm">
       <h4>Selamat Datang di Admin PERPUSTAKAAN YOGYAKARTA KOTA</h4>
      </div>

      <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
             <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();" 
                      class="dropdown-item" >
                      Keluar
                  </a>
              </div>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
              </form>
            </li>
        </ul>
      </li>
      </ul>
    </div>
  </nav>