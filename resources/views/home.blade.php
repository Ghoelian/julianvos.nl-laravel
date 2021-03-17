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
                            $('#contact-details').html(data)
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
                    minimumSpacing: 100,
                    step: 500,
                    leftArrow: "<",
                    rightArrow: ">"
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

    <div id="portfolio-section">
        <h1 class="display-4 text-center">Portfolio</h1>
        <p class="font-italic text-center">Some of my projects</p>

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

                <li class="jtimeline-event" data-timestamp="1551394800">
                    Mar 2018<br />
                    Finished internship at Ndevr Ltd.
                </li>

                <li class="jtimeline-event" data-timestamp="1580511600">
                    Oct 2018<br />
                    Started internship at Atos
                </li>

                <li class="jtimeline-event" data-timestamp="1590962400">
                    Mar 2018<br />
                    Finished internship at Atos
                </li>

                <li class="jtimeline-event" data-timestamp="1596232800">
                    Aug 2020<br />
                    Finished software developer education
                </li>

                <li class="jtimeline-event" data-timestamp="1600120800">
                    Sep 2020<br />
                    Started working at ASUS Holland
                </li>

                <li class="jtimeline-event" data-timestamp="{{ now()->timestamp }}">
                    Now<br />
                    Still working at ASUS Holland
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
