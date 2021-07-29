<nav class="navbar navbar-expand-lg sticky fixed-top lorem-nav">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{ asset('public/assets/img/logo.svg') }}" alt="logo">
        </a>
        <button class="navbar-toggler pr-0 pl-0" type="button" data-toggle="collapse" data-target="#navbarId">
            <span>
                <i class="fas fa-bars hamburger"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarId">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ url()->current() == 'http://localhost/lorem-studio' ? 'active':'' }}">
                    <a href="{{ url('/') }}" class="nav-link">HOME</a>
                </li>
                <li class="nav-item {{ url()->current() == 'http://localhost/lorem-studio/about' ? 'active':'' }}">
                    <a href="{{ route('about') }}" class="nav-link">ABOUT US</a>
                </li>
                {{-- <li class="nav-item {{ url()->current() == 'http://localhost/lorem-studio/services' ? 'active':'' }}">
                    <a href="{{ route('services') }}" class="nav-link">SERVICES</a>
                </li> --}}
                <li class="nav-item {{ url()->current() == 'http://localhost/lorem-studio/portfolio' ? 'active':'' }}">
                    <a href="{{ route('portfolio') }}" class="nav-link">PORTFOLIO</a>
                </li>
                <li class="nav-item {{ url()->current() == 'http://localhost/lorem-studio/contact' ? 'active':'' }}">
                    <a href="{{ route('contact') }}" class="nav-link">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"></a>
                </li>

            </ul>
        </div>
        <a href="{{ route('hireus') }}" class="hire-btn {{ url()->current() == 'http://localhost/lorem-studio/hireus' ? 'active':'' }}">HIRE US NOW</a>
    </div>
</nav>