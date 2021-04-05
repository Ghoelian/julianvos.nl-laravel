<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('icons/site-logo.webp') }}" height="30" class="d-inline-block align-top" alt="julianvos.nl logo" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="header">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ (\Request::route()->getName() === 'home' || \Request::route()->getName() === '') ? 'active' : '' }}" id="home" href="{{ route('home') }}"><span class="material-icons md-18">home</span> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ \Request::route()->getName() === 'about' ? 'active' : '' }}" id="about" href="{{ route('about') }}"><span class="material-icons md-18">person</span> About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ \Request::route()->getName() === 'portfolio' ? 'active' : '' }}" id="portfolio" href="{{ route('portfolio') }}"><span class="material-icons md-18">apps</span> Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ \Request::route()->getName() === 'experience' ? 'active' : '' }}" id="experience" href="{{ route('experience') }}"><span class="material-icons md-18">linear_scale</span> Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ \Request::route()->getName() === 'contact' ? 'active' : '' }}" id="contact" href="{{ route('contact') }}"><span class="material-icons md-18">email</span> Contact</a>
            </li>
        </ul>
    </div>
</nav>
&nbsp;
