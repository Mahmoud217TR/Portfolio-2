<nav class="navbar @if($style == 'main') navbar-dark @else navbar-light @endif navbar-expand-lg container d-lg-flex justify-content-center mt-3 d-block">
    
    <div class="logo d-flex justify-content-center">
        <a href="/">MahmoudTR </a>
    </div>
    
    <div class="d-flex justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-items-container" aria-controls="nav-items-container" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    
    <div class="collapse navbar-collapse" id="nav-items-container">
        <ul class="navbar-nav flex-lg-row ms-auto mb-2 mb-lg-0 mt-3 mt-lg-0">
            <li class="nav-item @if(Route::currentRouteName() == 'home') nav-item-active @endif text-center px-2"><a href="{{ route('home') }}">Home</a></li>
            <li class="nav-item @if(Route::currentRouteName() == 'about') nav-item-active @endif text-center px-2"><a href="{{ route('about') }}">About</a></li>
            <li class="nav-item @if(Route::currentRouteName() == 'projects') nav-item-active @endif text-center px-2"><a href="{{ route('projects') }}">Projects</a></li>
            <li class="nav-item @if(Route::currentRouteName() == 'contact') nav-item-active @endif text-center px-2"><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>
    
</nav>