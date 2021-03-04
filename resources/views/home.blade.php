@extends('layouts.head')

@section('title', 'Home')

@section('content')
    <div class="h-100" id="home" style="opacity: .75">
        <img src="/icons/site-logo-transparent.webp" class="img-fluid" alt="Website logo" loading="lazy">
    </div>

    <div class="" id="about">
        <h1 class="display-4 text-center">ABOUT ME</h1>
        <p class="font-italic text-center">Programmer, musician, gamer</p>
        <p>
            I picked up a love for programming in 2013, from watching <a
                href="https://api.julianvos.nl/redirect?destination=https%3A%2F%2Fwww.youtube.com%2Fuser%2Fshiffman&amp;origin=website&amp;date=1614877269681">The
                Coding Train</a>. I learned the basics of <a
                href="https://api.julianvos.nl/redirect?destination=https%3A%2F%2Fwww.processing.org&amp;origin=website&amp;date=1614877269681">Processing</a>,
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
                href="https://api.julianvos.nl/redirect?destination=https%3A%2F%2Fclonehero.net&amp;origin=website&amp;date=1614877269681">Clone
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

    <div id="portfolio">
        <h1 class="display-4 text-center">PORTFOLIO</h1>
        <p class="font-italic text-center">Some of my projects.</p>

        <p class="text-center">Work in Progress</p>

        {{-- <div class="text-center">
            <div class="portfolio-column mr-3">
                <a href="{{ route('home') }}">
                    <img src="/images/snake.webp" class="img-fluid portfolio-image" alt="Snake in P5.js">
                    Snake in P5.js
                </a>
            </div>
            <div class="portfolio-column">
                <a href="{{ route('home') }}">
                    <img src="/images/pong.webp" class="img-fluid portfolio-image" alt="Pong in P5.js">
                    Pong in P5.js
                </a>
            </div>
            <div class="portfolio-column ml-3">
                <a href="{{ route('home') }}">
                    <img src="/images/lyrics.webp" class="img-fluid mx-auto portfolio-image" alt="Lyrics repetition chart">
                    Lyrics repetition chart
                </a>
            </div>
            <br />
            <a href="">All projects</a>
        </div> --}}
    </div>

    <br />

    <div id="contact">
        <h1 class="display-4 text-center">CONTACT</h1>

        <div class="text-center">
            <p><span class="material-icons md-18">location_on</span> Klazienaveen, Drenthe, NL</p>
            <p><span class="material-icons md-18">call</span> +31 [six] 48744406</p>
            <p><span class="material-icons md-18">email</span> post[at]julianvos.nl</p>
        </div>
    </div>
@endsection
