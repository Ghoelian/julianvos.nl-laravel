@extends('layouts.head')

@section('title', 'Home')

@push('assets')
    <script src="/js/home.js" nonce="{{ csp_nonce() }}"></script>
@endpush

@section('content')
    <div class="h-100" id="home-section">
        <img src="/icons/site-logo-transparent.webp" class="img-fluid" alt="Website logo" loading="lazy">
    </div>

    <div id="about-section">
        <h1 class="display-4 text-center">About Me</h1>
        <p class="font-italic text-center">Programmer, musician, gamer</p>
        <p>
            I picked up a love for programming in 2013, from watching <a
                href="{{ route('api/redirect', ['redirectUrl' => urlencode('https://www.youtube.com/user/shiffman')]) }}">The
                Coding Train</a>. I learned the basics of <a
                href="{{ route('api/redirect', ['redirectUrl' => urlencode('https://processing.org')]) }}">Processing</a>,
            and started following an official programming education in 2017.</p>
        <p>From October 2018 until March 2019, I was participating in an international internship in the UK, where I have
            been
            working with Node.js on the back-end. One of the most difficult and useful skills I've had to learn was using
            Async.js, and subsequently learning to use callbacks, instead of the default async/await.
        </p>
        <p>
            One of my favourite pastimes is playing the guitar. I started taking lessons at the age of 14, but my skills
            with
            the electric guitar are mostly self-taught.
            I try to practice at least once a day, and am always looking for the next riff to master.
        </p>
        <p>
            For as long as I can remember, video games have been a part of my life. My all-time favourite game is The Legend
            of Zelda: Ocarina of Time, closely followed by <a
                href="{{ route('api/redirect', ['redirectUrl' => urlencode('https://clonehero.net')]) }}">Clone
                Hero</a> and Breath of the Wild.
        </p>
        <p>
            I'm proficient in:
        <ul>
            <li>Laravel (Which is what this website was made in)</li>
            <li>Node.js</li>
            <li>C# (.NET)</li>
            <li>AWS (Lambda, IoT, etc.)</li>
        </ul>
        </p>
    </div>

    <br />

    <div id="portfolio-section">
        <h1 class="display-4 text-center">Portfolio</h1>
        <p class="font-italic text-center">Some of my projects</p>

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <a href="{{ route('home') }}" class="portfolio-link">
                        <img src="/images/snake.webp" class="card-img-top" alt="Snake in P5.js">
                    </a>

                    <div class="card-body">
                        <p class="card-text">Snake in P5.js</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <a href="{{ route('home') }}" class="portfolio-link">
                        <img src="/images/pong.webp" class="card-img-top" alt="Pong in P5.js">
                    </a>

                    <div class="card-body">
                        <p class="card-text">Pong in P5.js</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <a href="{{ route('home') }}" class="portfolio-link">
                        <img src="/images/lyrics.webp" class="card-img-top" alt="Lyrics repetition chart">
                    </a>

                    <div class="card-body">
                        <p class="card-text">Lyrics repetition chart</p>
                    </div>
                </div>
            </div>
        </div>

        <br />

        <div class="row">
                <button class="btn btn-primary col-sm-2 mx-auto" id="all-projects-button">All projects</button>
        </div>
    </div>

    <br />

    <div id="experience-section">
        <h1 class="display-4 text-center">Experience</h1>
        <p class="font-italic text-center">What I've been up to</p>
        <div id="experience">
        </div>
    </div>

    <br />

    <div id="contact-section">
        <h1 class="display-4 text-center">Contact</h1>

        <div class="text-center" id="contact-details">
            <button class="btn btn-primary g-recaptcha" data-sitekey="6LcWLoIaAAAAAPddYiFygvar6ztBHGneqTzKov7d"
                data-callback="onSubmit" data-action="click">Show Contact Info</button>
        </div>
    </div>
@endsection
