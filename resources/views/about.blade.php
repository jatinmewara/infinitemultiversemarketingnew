<!DOCTYPE html>
<html lang="en">
@include('header')

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Infinite Multiverse Marketing</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{asset('css/about.css')}}">
  <link rel="stylesheet" href="{{asset('css/new.css')}}">
</head>

<body>
  <div class="aboutmain">
    <div class="particles" id="particles-js"></div>
    <section class="hero">
      <div class="container">
        <h3 class="section-title mb-5 mt-5 text-dark"><span class="mcutext">W</span>here Every Brand Has Its <span
            class="mcutext">O</span>wn Universe</h3>
        <p class="text-dark">At Infinite Multiverse Marketing, we don't just run campaigns — we create heroic journeys. Inspired by the
          boundless worlds of the Marvel Cinematic Universe, our agency is a nexus where creativity meets strategy, and
          ordinary brands become extraordinary legends.</p>
      </div>
    </section>

    <section class="section abouttwo">
      <div class="container mainabout">
        <h2 class="mainhead-title"><span class="mcutext">O</span>ur Origin <span class="mcutext">S</span>tory</h2>
        <div class="origin-story">
          <div class="origin-content">
            <p>To unite creativity, technology, and marketing under one multiverse. As fans of the MCU, we believe in
              infinite possibilities, dynamic storytelling, and heroic transformations. And we bring that same energy to
              your brand.</p>
            <p>Whether you're a startup ready to make your first heroic leap or an established business seeking a brand
              reboot, we are your <strong>SHIELD</strong> in the marketing battlefield.</p>
            <p>Our team of marketing Avengers combines diverse skills and perspectives to create campaigns that resonate
              across all dimensions of your target audience.</p>
          </div>
          <div class="origin-image">
            <div class="hexagon">
              <img src="img/aboutuspage.jpeg" alt="Marketing Team">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section superpowers">
      <div class="container">
        <h2 class="mainhead-title text-dark">Our <span class="mcutext">S</span>uper<span class="mcutext">p</span>owers</h2>
        <div class="powers-grid">
          <div class="power-card">
            <div class="power-icon">
              <i class="fas fa-search"></i>
            </div>
            <h3 class="text-dark">Strategic SEO Sorcery</h3>
            <p class="text-dark">Rise through the search engine ranks like Doctor Strange bends reality. Our SEO strategies are
              scientifically crafted to make your brand appear where it matters most.</p>
          </div>

          <div class="power-card">
            <div class="power-icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h3 class="text-dark">Social Media Shielding</h3>
            <p class="text-dark">Build unbreakable bonds with your audience across all platforms. We create content that engages, protects
              your brand reputation, and grows your following.</p>
          </div>

          <div class="power-card">
            <div class="power-icon">
              <i class="fas fa-pen-fancy"></i>
            </div>
            <h3 class="text-dark">Creative Content Cloning</h3>
            <p class="text-dark">Shape-shift your brand voice to fit every platform with precision. From blog posts to videos, we create
              content that resonates with your audience.</p>
          </div>

          <div class="power-card">
            <div class="power-icon">
              <i class="fas fa-code"></i>
            </div>
            <h3  class="text-dark">Website Development Wizardry</h3>
            <p  class="text-dark">Build portals (websites) that are powerful, fast, and engaging. Our web solutions are as reliable as
              Vibranium and as cutting-edge as Stark Tech.</p>
          </div>

          <div class="power-card">
            <div class="power-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3  class="text-dark">Performance Analytics Like J.A.R.V.I.S.</h3>
            <p  class="text-dark">Smart insights that help you act faster than Quicksilver. We turn data into actionable strategies that
              drive real results.</p>
          </div>

          <div class="power-card">
            <div class="power-icon">
              <i class="fas fa-bolt"></i>
            </div>
            <h3  class="text-dark">Paid Advertising Power</h3>
            <p  class="text-dark">Launch targeted campaigns with the precision of Hawkeye. We maximize your ROI through carefully optimized
              paid strategies.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section mission">
      <div class="container">
        <div class="mission-content">
          <div class="mission-icon">
            <i class="fas fa-star"></i>
          </div>
          <h2 class="mainhead-title"><span class="mcutext">O</span>ur <span class="mcutext">M</span>ission</h2>
          <p>To help every brand discover its <strong>true identity</strong> and unleash its <strong>heroic
              potential</strong>. Because in this infinite multiverse of ideas, only the bold become legends.</p>
          <p>We combine MCU-inspired creativity with real-world marketing science to craft experiences that feel larger
            than life. We think like Tony Stark, execute like Black Widow, and adapt like Loki.</p>
        </div>
      </div>
    </section>

    <!-- <section class="section team">
      <div class="container teamavangerblock">
        <h2 class="section-title">Our <span class="mcutext">M</span>arketing <span class="mcutext">A</span>vengers</h2>
        <div class="team-grid">
          <div class="team-member">
            <div class="member-image">
              <img
                src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                alt="Team Member">
            </div>
            <div class="member-info">
              <h3>Nick Fury</h3>
              <p>Director of Strategy</p>
              <div class="member-social">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="team-member">
            <div class="member-image">
              <img
                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80"
                alt="Team Member">
            </div>
            <div class="member-info">
              <h3>Pepper Potts</h3>
              <p>Client Relations</p>
              <div class="member-social">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="team-member">
            <div class="member-image">
              <img
                src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=761&q=80"
                alt="Team Member">
            </div>
            <div class="member-info">
              <h3>Shuri</h3>
              <p>Creative Director</p>
              <div class="member-social">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="team-member">
            <div class="member-image">
              <img
                src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                alt="Team Member">
            </div>
            <div class="member-info">
              <h3>J.A.R.V.I.S.</h3>
              <p>Data Analytics</p>
              <div class="member-social">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  </div>
@include('footer')
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
  // Particles.js initialization
  particlesJS("particles-js", {
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#2cbab4"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        }
      },
      "opacity": {
        "value": 0.3,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 3,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#2cbab4",
        "opacity": 0.2,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 2,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "grab"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 140,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true
  });

  // Scroll to top button
  const scrollTop = document.getElementById('scrollTop');

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
      scrollTop.classList.add('active');
    } else {
      scrollTop.classList.remove('active');
    }
  });

  scrollTop.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  // Animate elements on scroll
  const animateOnScroll = () => {
    const elements = document.querySelectorAll('.power-card, .team-member, .hexagon');

    elements.forEach(element => {
      const elementPosition = element.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.3;

      if (elementPosition < screenPosition) {
        element.style.opacity = '1';
        element.style.transform = 'translateY(0)';
      }
    });
  };

  // Set initial state for animation
  document.querySelectorAll('.power-card, .team-member, .hexagon').forEach(element => {
    element.style.opacity = '0';
    element.style.transform = 'translateY(20px)';
    element.style.transition = 'all 0.5s ease';
  });

  window.addEventListener('scroll', animateOnScroll);
  window.addEventListener('load', animateOnScroll);
</script>


</html>