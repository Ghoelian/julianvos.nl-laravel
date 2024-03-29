@extends('layouts.head')

@section('title', 'Home')

@push('assets')
    <script src="/javascript/jtimeline.js"></script>
    <link href="/styles/jtimeline.css" rel="stylesheet" />

    <script>
        function onSubmit(token) {
            const formData = new FormData()

            formData.append('_token', '{{ csrf_token() }}')
            formData.append('recaptcha_token', token)

            $.ajax({
                    url: '{{ route('recaptcha') }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false
                })
                .done((data) => {
                    if (data !== false) {
                        $('#contact-details').html($(data))
                    } else {
                        $('#contact-details').html(
                            '<button class="btn btn-primary g-recaptcha" data-sitekey="6LcWLoIaAAAAAPddYiFygvar6ztBHGneqTzKov7d" data-callback="onSubmit" data-action="click">Show Contact Info</button>'
                        )
                    }
                })
                .fail((error) => {
                    console.log(error)
                })
        }

        $(document).ready(() => {
            $('#timeline').jTimeline({
                resolution: 100000,
                minimumSpacing: 125,
                step: 500
            })

            $('.nav-link').click((e) => {
                e.preventDefault()

                const eventTarget = $(e.target)
                const offset = 100
                let targetId = null

                if (eventTarget.prop('tagName') === 'SPAN') {
                    targetId = $(e.target).parent().attr('id')
                } else {
                    targetId = $(e.target).attr('id')
                }

                const target = $(`#${targetId}-section`)

                const targetPosition = target.offset().top
                const offsetPosition = targetPosition - offset

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                })

                $('#home').toggleClass('active', false)
                $('#about').toggleClass('active', false)
                $('#portfolio').toggleClass('active', false)
                $('#experience').toggleClass('active', false)
                $('#contact').toggleClass('active', false)

                eventTarget.toggleClass('active', true)

                window.history.pushState({}, document.title, targetId)
            })
        })

    </script>
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
                <button class="btn btn-primary mx-auto" onclick="window.location = '{{ route('projects') }}'">All projects</button>
        </div>
    </div>

    <br />

    <div id="experience-section">
        <h1 class="display-4 text-center">Experience</h1>
        <p class="font-italic text-center">What I've been up to</p>
        <div class="jtimeline" id="timeline">
            <ul class="jtimeline-events">
                <li class="jtimeline-event" data-timestamp="1503612000">
                    Aug 2017<br />
                    Started software developer education
                </li>

                <li class="jtimeline-event" data-timestamp="1538344800">
                    Oct 2018<br />
                    Started internship at Ndevr Ltd.
                </li>

                <li class="jtimeline-event" data-timestamp="1553990400">
                    Mar 2019<br />
                    Finished internship at Ndevr Ltd.
                </li>

                <li class="jtimeline-event" data-timestamp="1580511600">
                    Feb 2020<br />
                    Started internship at Atos
                </li>

                <li class="jtimeline-event" data-timestamp="1593475200">
                    Jun 2020<br />
                    Finished internship at Atos
                </li>

                <li class="jtimeline-event" data-timestamp="1598832000">
                    Aug 2020<br />
                    Finished software developer education
                </li>

                <li class="jtimeline-event" data-timestamp="1601424000">
                    Sep 2020<br />
                    Started working at ASUS Holland
                </li>
                
                <li class="jtimeline-event" data-timestamp="1647298800">
                    Mar 2022<br />
                    Started working at Eventree
                </li>

                <li class="jtimeline-event is-active" data-timestamp="{{ now()->timestamp }}">
                    Now<br />
                    Still working at Eventree
                </li>
            </ul>
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
