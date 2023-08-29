<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">INTITUT</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto"><img src="{{ asset('ass/assets/img/logo.png') }}" alt="" class="img-fluid" height="60cm" width="60cm"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="/">Acceuil</a></li>
          <li><a href="about.html">Actualités</a></li>
          <li><a href="/inscription">Pré-inscription</a></li>
          <li><a href="pricing.html">Espace Apprenant</a></li>
          

          <li class="dropdown"><a href="#"><span>Nos opportunités</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="/contact">Contact</a></li>
          @guest
         <a href="/register">Inscription</a>
        @endguest

         
        
         
        @if (auth()->check())
          @if (Auth::User()->hasPermission('administrateur-bord'))
              <a href="/dashboard" class="nav-item nav-link">Dashboard</a> 
          @endif
      @endif
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

        @guest
         <a href="/login" class="get-started-btn">Connexion</a>
        @endguest
    
      
      

    </div>
  </header><!-- End Header -->