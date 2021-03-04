<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('icons/site-logo.webp') }}" height="30" class="d-inline-block align-top" alt="julianvos.nl logo" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="header">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ \Request::route()->getName() === 'home' ? '#' : route('home') }}" onclick="document.body.scrollTop = 0; document.documentElement.scrollTop = 0;"><span class="material-icons md-18">home</span> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about"><span class="material-icons md-18">person</span> About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio"><span class="material-icons md-18">apps</span> Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact"><span class="material-icons md-18">email</span> Contact</a>
            </li>
        </ul>
    </div>
</nav>
&nbsp;