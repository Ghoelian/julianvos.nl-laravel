<!DOCTYPE html>
<html>

<head>
  <?php
    require_once("./include_head.php");
  ?>
</head>

<title>Julian Vos</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Lato", sans-serif;
  }

  body,
  html {
    height: 100%;
    color: #777;
    line-height: 1.8;
  }

  /* Create a Parallax Effect */
  .bgimg-1 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  /* First image (Logo. Full height) */
  .bgimg-1 {
    background-image: url('/assets/bgimage1.jpg');
    min-height: 100%;
  }

  .w3-wide {
    letter-spacing: 10px;
  }

  .w3-hover-opacity {
    cursor: pointer;
  }

  /* Turn off parallax scrolling for tablets and phones */
  @media only screen and (max-device-width: 1600px) {
    .bgimg-1 {
      background-attachment: scroll;
      min-height: 400px;
    }
  }
</style>

<body>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);"
        onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fas fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item w3-button">HOME</a>
      <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-user"></i> ABOUT</a>
      <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-th"></i> PORTFOLIO</a>
      <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-envelope"></i> CONTACT</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-dark-grey w3-hide w3-hide-large w3-hide-medium">
      <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
      <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    </div>
  </div>

  <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-xlarge w3-wide w3-animate-opacity"><img
          src='/assets/site-logo-transparent.png' width='100%'></span><br>
      <!-- <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Julian Vos</span> -->
    </div>
  </div>

  <!-- Container (About Section) -->

  <div class="w3-display-container w3-padding-64" id="about">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide">ABOUT ME</span>
    </div>
  </div>

  <div class="w3-content w3-container">
    <p class="w3-center"><em>Programmer, musician, gamer</em></p>
    <p>
      I picked up a love for programming in 2013, from watching <a href="https://www.youtube.com/user/shiffman">The
        Coding Train</a>.
      I learned the basics of <a href="https://www.processing.org">Processing</a>, and started following an official
      programming education in 2017.
    </p>
    <p>
      For the past 5 months, I have been participating in an international internship in the UK, where I have been
      working with Node.js on the back-end. One of the most difficult and useful skills I've had to learn was using
      Async.js, and subsequently learning to use callbacks, instead of the default async/await.
    </p>
    <p>
      One of my favourite pastimes is playing the guitar. I started taking lessons at the age of 14, but my skills with
      the electric guitar are mostly self-taught.
      I try to practice at least once a day, and am always looking for the next riff to master.
    </p>
    <p>
      For as long as I can remember, video games have been a part of my life. My all-time favourite game is The Legend
      of Zelda: Ocarina of Time, closely followed by <a href="https://www.clonehero.net">Clone Hero</a> and Breath of
      the Wild.
    </p>

    <p class="w3-large w3-center w3-padding-16">I'm proficient in:</p>
    <p class="w3-wide w3-center"><i class="fab fa-node-js"></i>Node.js</p>
    <div class="star-ratings-css">
      <div class="star-ratings-css-top" style="width: 90%">
        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
      <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
    </div>
    <p class="w3-wide w3-center"><img src="/icons/processing-icon.png" width="15"> Processing</p>
    <div class="star-ratings-css">
      <div class="star-ratings-css-top" style="width: 90%">
        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
      <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
    </div>
    <p class="w3-wide w3-center"><i class="fab fa-aws"></i>AWS (Lambda, IoT, etc)</p>
    <div class="star-ratings-css">
      <div class="star-ratings-css-top" style="width: 60%">
        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
      <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
    </div>
  </div>

  <!-- Second Parallax Image with Portfolio Text -->
  <div class="w3-display-container w3-padding-64" id="portfolio">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
    </div>
  </div>

  <!-- Container (Portfolio Section) -->
  <div class="w3-content w3-container w3-center">
    <h3 class="w3-center">MY WORK</h3>
    <p class="w3-center"><em>Some projects I've done.<br></em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding w3-center">
      <div class="w3-col m4">
        <a href="/personal_projects/snake/">
          <img src="/assets/snake.png" style="width:100%" class="w3-hover-opacity" alt="Snake">
          Snake in P5.js</a>
      </div>

      <div class="w3-col m4">
        <a href="/personal_projects/pong/">
          <img src="/assets/pong.png" href="/personal_projects/pong/" style="width:100%" class="w3-hover-opacity"
            alt="Pong">
          Pong in P5.js</a>
      </div>

      <div class="w3-col m4">
        <a href="/personal_projects/lyrics_graph/">
          <img src="/assets/lyrics.png" href="/personal_projects/lyrics_graph/" style="width:100%"
            class="w3-hover-opacity" alt="Lyrics chart">
          Lyrics repetition chart</a>
      </div>
    </div>
    <div class="w3-row-padding w3-center">
      <b><a href="/personal_projects/index.php">All projects</a></b>
    </div>

    <!-- Third Parallax Image with Portfolio Text -->
    <div class="w3-display-container w3-padding-64" id="contact">
      <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
      </div>
    </div>

    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container">
      <div class="w3-large w3-margin-bottom w3-center">
        <i class="fas fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Klazienaveen, Drenthe,
        NL<br>
        <i class="fas fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +31 [six]
        83221625<br>
        <i class="fas fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a href="http://scr.im/48ai">p...@j...s.nl</a>
<br>
      </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
      <a href="#home" class="w3-button w3-light-grey"><i class="fas fa-arrow-up w3-margin-right"></i>To the top</a>
      <div class="w3-xlarge w3-section">
        <a href="https://www.linkedin.com/in/julian-vos-b09783150/">
          <i class="fab fa-linkedin w3-hover-opacity"></i>
        </a>
      </div>
    </footer>

    <script>
      // Modal Image Gallery
      function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        let captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
      }

      // Change style of navbar on scroll
      window.onscroll = function() {
        myFunction()
      };

      function myFunction() {
        let navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-dark-grey";
        } else {
          navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-dark-grey", "");
        }
      }

      // Used to toggle the menu on small screens when clicking on the menu button
      function toggleFunction() {
        let x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else {
          x.className = x.className.replace(" w3-show", "");
        }
      }
    </script>
</body>

</html>
