   <!-- Header Section Start -->
   <header class="site-header">
        <div class="container">
            <nav class="navbar">

                <div class="site-logo">
                    <a href="{{ route('home') }}" class="bg-center bg-no-repeat bg-contain">
                    </a>
                </div>

                <div class="navbar-toggler menu-btn bg-contain bg-center bg-no-repeat "></div>

                <div class="navbar-menu">
                    <ul>
                        <li><a class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Page D'accueil</a></li>
                        <li><a class="{{ Route::currentRouteName() == 'how-to-play' ? 'active' : '' }}" href="{{ route('how-to-play') }}">Comment Jouer</a></li>              
                        <li><a class="{{ Route::currentRouteName() == 'about-us' ? 'active' : '' }}" href="{{ route('about-us') }}">À Propos</a></li>
                        <li><a class="{{ Route::currentRouteName() == 'contact-us' ? 'active' : '' }}" href="{{ route('contact-us') }}">Contactez-nous</a></li>
                    </ul>
                    @if(!Auth::check())
                    <a href="" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                        class="header-btns header-signup">S'inscrire</a>
                    <a href="" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                        class="header-btns header-login">Se connecter</a>
                    @endif
                    @if(Auth::check())
                       <div class="profile">
                        <div class="avatar">
                            <div class="avatar-content">
                                <a href="#">
                                <img src="{{(!empty(Auth::user()->image)) ? asset(Auth::user()->image) : asset('images/dummy.jpg') }}" alt="dp">
                                    <span>{{ ucfirst(Auth::user()->name) }}</span>
                                </a>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                            </div>
                            <div class="dropdown">
                                <ul>
                                    <li><a href="{{ route('profile.profile') }}">
                                            <div class="profile-dropdown-options profile-image-dropdown"></div>Mon profil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('profile.matches')}}"><div class="profile-dropdown-options profile-image-stadium"></div>Mes matchs</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"><div class="profile-dropdown-options profile-image-logout"></div>Se déconnecter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class=" navbar-closer bg-contain close-btn  bg-center bg-no-repeat "></div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Section End -->