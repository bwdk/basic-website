<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <!-- En utilisant Request::route au lieu du chemin de la page-->
        <a class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}" href="{{ route('welcome') }}">Welcome</a>
        </li>
        <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() === 'page' ? 'active' : '' }}" href="{{ route('page') }}">Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::route()->getName() === 'about' ? 'active' : '' }}" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::route()->getName() === 'todos' ? 'active' : '' }}" href="{{ route('todos') }}">ToDos</a>
        </li>
        <!-- En utilisant Request::is pour le chemin de la page -->
        <li class="nav-item">
                <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
              </li>
              <!-- Avec Request::is pour get messages -->
        <!--li class="nav-item">
                <a class="nav-link {{ Request::is('contact/messages') ? 'active' : '' }}" href="{{ route('get-messages') }}">See Messages</a>
         </li-->   
         <!-- Avec Request::route pour get messages -->
         <li class="nav-item">
            <a class="nav-link {{ Request::route()->getName() === 'get-messages' ? 'active' : '' }}" href="{{ route('get-messages') }}">See Messages</a>
        </li>     

       
      </ul>
      
    </div>
  </nav>