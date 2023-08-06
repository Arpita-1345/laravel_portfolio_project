<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Portfolio website of Animesh Rawat. A summary of professional experience, 
      skills, projects details and contact information." />
    <title>Arpita Saha- Portfolio</title>

    <!--==================== OPEN GRAPH META TAGS ===================== -->
    <meta property="og:title" content="Animesh Rawat - Portfolio" />
    <meta property="og:image" content="/assets/img/PwaImages/ios/512.png" />
    <meta property="og:description"
        content="Portfolio website of Animesh Rawat. A summary of professional experience, 
      skills, projects details and contact information." />

    <!--==================== TWITTER META TAGS ===================== -->
    <meta name="twitter:title" content="Animesh Rawat - Portfolio" />
    <meta name="twitter:description"
        content="Portfolio website of Animesh Rawat. A summary of professional experience, 
      skills, projects details and contact information." />
    <meta name="twitter:image" content="/assets/img/PwaImages/ios/512.png" />

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- ====================PWA================== -->
    <link rel="manifest" href="manifest.json" />
    <!-- ios support -->
    <link rel="apple-touch-icon" href="/assets/img/PwaImages/ios/32.png" />
    <link rel="apple-touch-icon" href="/assets/img/PwaImages/ios/72.png" />
    <link rel="apple-touch-icon" href="/assets/img/PwaImages/ios/100.png" />
    <link rel="apple-touch-icon" href="/assets/img/PwaImages/ios/128.png" />
    <link rel="apple-touch-icon" href="/assets/img/PwaImages/ios/144.png" />
    <link rel="apple-touch-icon" href="/assets/img/PwaImages/ios/152.png" />
    <link rel="apple-touch-icon" href="/assets/img/PwaImages/ios/192.png" />
    <link rel="apple-touch-icon" href="/assets/img/PwaImages/ios/256.png" />
    <link rel="apple-touch-icon" href="/assets/img/PwaImages/ios/512.png" />
    <meta name="apple-mobile-web-app-status-bar" content="#6E57E0" />
    <meta name="theme-color" content="#6E57E0" />

    <!-- ============FAVICONS============== -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets//img/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png" />
    <link rel="icon" type="image/x-icon" href="/assets/img/favicons/favicon.ico" />

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="/swiper-bundle.min.css" />

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="/styles1.css" />
</head>

<body>
    <!-- ===================== LOADER ==================== -->
    <div id="loading">
        <div class="loader"><span>
                << /span><span>/></span></div>
    </div>

    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo noSelect">Arpita Saha</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link noSelect active-link">
                            <i class="uil uil-estate nav__icon"></i> Home
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link noSelect">
                            <i class="uil uil-user nav__icon"></i> About
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link noSelect">
                            <i class="uil uil-file-alt nav__icon"></i> Skills
                        </a>
                    </li>

                    {{-- <li class="nav__item">
              <a href="#services" class="nav__link noSelect">
                <i class="uil uil-briefcase-alt nav__icon"></i> Services
              </a>
            </li> --}}

                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link noSelect">
                            <i class="uil uil-scenery nav__icon"></i> Portfolio
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link noSelect">
                            <i class="uil uil-message nav__icon"></i> Contact Me
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close noSelect" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                <!-- theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>

                <div class="nav__toggle noSelect" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/rawatanimesh/" target="_blank"
                            class="home__social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://github.com/rawatanimesh" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                        <a href="https://t.me/rawatanimesh" target="_blank" class="home__social-icon">
                            <i class="uil uil-telegram-alt"></i>
                        </a>
                    </div>

                    {{-- <div class="home__img">
              <svg
                class="home__blob"
                viewBox="0 0 200 187"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <mask id="mask0" mask-type="alpha">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                </mask>
                <g mask="url(#mask0)">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                  <image
                    class="home__blob-img"
                    x="-20"
                    xlink:href="assets/img/hacker-profile.png"
                  ></image>
                </g>
              </svg>
            </div> --}}

                    <div class="home__data">
                        <h1 class="home__title">Hi, I am Arpita</h1>
                        <h3 class="home__subtitle">Web Developer</h3>
                        <p class="home__description">
                            {{ $main->description }}
                        </p>
                        <a href="#contact" class="button button--flex">
                            Contact Me<i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll Down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!--==================== ABOUT ====================-->


    <section class="about section" id="about">
        <h2 class="section__title">About Me</h2>
        <span class="section__subtitle">{{ $main->title }}</span>

        <div class="about__container container grid">
            <img src="<?php echo $main->bc_img; ?>" alt="" class="about__image" />

            <div class="about__data">
                <p class="about__description">
                    {{ $main->sub_title }}
                </p>
                <div>
                    <ul class="theme-list">
                        <li><b>From:</b> Bangladesh</li>
                        <li><b>Lives In:</b> Dhaka,Bangladesh</li>
                        <li><b>Age:</b> 24</li>
                        <li><b>Gender:</b> Female</li>
                    </ul>

                    <div class="about__info">
                        <div>
                            <span class="about__info-title">{{ $main->years }}+</span>
                            <span class="about__info-name">Years <br />
                                experience</span>
                        </div>

                        <div>
                            <span class="about__info-title">{{ $main->projects }}+</span>
                            <span class="about__info-name">Projects <br />
                                completed</span>
                        </div>

                        <div>
                            <span class="about__info-title">{{ $main->companies }}+</span>
                            <span class="about__info-name">Companies <br />
                                worked</span>
                        </div>
                    </div>
                </div>
                {{-- 
          <div class="about__buttons">
            <a
              download=""
              href="assets/pdf/animesh-rawat-resume.pdf"
              class="button button--flex"
            >
              Download Resume<i class="uil uil-download-alt button__icon"></i
            ></a>
          </div> --}}
            </div>
        </div>
    </section>

    <!--==================== SKILLS ====================-->

    <section class="skills section" id="skills">
        <h2 class="section__title">Skills</h2>
        <span class="section__subtitle">My tech stack</span>
        <div class="skills__container container grid">
            <div class="skills__container-box">
                <img class="skills__container-img" src="/assets/img/skills/angular.svg" alt="angular" />
                <div class="skills__container-name">Angular</div>
            </div>

            <div class="skills__container-box">
                <img class="skills__container-img" src="/assets/img/skills/react.svg" alt="react" />
                <div class="skills__container-name">React</div>
            </div>

            <div class="skills__container-box">
                <img class="skills__container-img" src="/assets/img/skills/vue.svg" alt="vue" />
                <div class="skills__container-name">Vue</div>
            </div>

            <div class="skills__container-box">
                <img class="skills__container-img" src="/assets/img/skills/typescript.svg" alt="typescript" />
                <div class="skills__container-name">TypeScript</div>
            </div>

            <div class="skills__container-box">
                <img class="skills__container-img" src="/assets/img/skills/javascript.svg" alt="javascript" />
                <div class="skills__container-name">JavaScript</div>
            </div>

            <div class="skills__container-box">
                <img class="skills__container-img" src="/assets/img/skills/html.svg" alt="html" />
                <div class="skills__container-name">HTML</div>
            </div>

            <div class="skills__container-box">
                <img class="skills__container-img" src="/assets/img/skills/css.svg" alt="css" />
                <div class="skills__container-name">CSS</div>
            </div>

            <div class="skills__container-box">
                <img class="skills__container-img" src="/assets/img/skills/sass.svg" alt="sass" />
                <div class="skills__container-name">SASS</div>
            </div>

            <div class="skills__container-box">
                <img class="skills__container-img" src="/assets/img/skills/firebase.svg" alt="firebase" />
                <div class="skills__container-name">Firebase</div>
            </div>

            <div class="skills__container-box">
                <img class="skills__container-img" src="/assets/img/skills/figma.svg" alt="figma">
                <div class="skills__container-name">Figma</div>
            </div>
        </div>
    </section>

    <!--==================== QUALIFICATOIN ====================-->

    <section class="qualification section">
        <h2 class="section__title">Qualification</h2>
        <span class="section__subtitle">My personal journey</span>

        <div class="qualification__container container">
            <div class="qualification__tabs">
                <div class="qualification__button button--flex qualification__active" data-target="#work">
                    <i class="uil uil-briefcase-alt qualification__icon"> </i> Work
                </div>

                <div class="qualification__button button--flex" data-target="#education">
                    <i class="uil uil-graduation-cap qualification__icon"> </i>
                    Education
                </div>
            </div>

            <div class="qualification__sections">
                <!--==================== QUALIFICATOIN CONTENT 1====================-->
                <div class="qualification__content qualification__active" data-content id="work">
                    <!--==================== QUALIFICATOIN 1====================-->
                    <div class="qualification__data">

                        <div>
                            <h3 class="qualification__title">"<?php echo $educations[0]->title1; ?>"</h3>
                            <span class="qualification__subtitle"> "<?php echo $educations[0]->description; ?> "</span>
                            <div class="qualification__calender">
                                <i class="uil uil-calendar-alt"></i> "<?php echo $educations[0]->title2; ?>"
                            </div>
                        </div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                    </div>

                    <!--==================== QUALIFICATOIN 2====================-->
                    {{-- <div class="qualification__data">
              <div></div>
              <div>
                <span class="qualification__rounder"></span>
                <span class="qualification__line"></span>
              </div> 
              <div>
                <h3 class="qualification__title">Frontend Developer</h3>
                <span class="qualification__subtitle"> Mobikasa </span>
                <div class="qualification__calender">
                  <i class="uil uil-calendar-alt"></i> 2018-2019
                </div>
              </div> 
            </div --}}

                </div>

                <!--==================== QUALIFICATOIN CONTENT 2====================-->
                <div class="qualification__content" data-content id="education">
                    @if (count($educations) > 0)
                        @foreach ($educations as $education)
                            <!--==================== QUALIFICATOIN 1====================-->
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">"<?php echo $education->title1; ?>"</h3>
                                    <span class="qualification__subtitle">
                                        "<?php echo $education->title2; ?>"
                                    </span>
                                    <div class="qualification__calender">
                                        <i class="uil uil-calendar-alt"></i> "<?php echo $education->description; ?>"
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>


                            <!--==================== QUALIFICATOIN 2====================-->
                            {{-- <div class="qualification__data">
              <div></div>
              <div>
                <span class="qualification__rounder"></span>
                <!-- <span class="qualification__line"></span> -->
              </div>
              <div>
                <h3 class="qualification__title">HSC,Science</h3>
                <span class="qualification__subtitle"> Feni Govt College </span>
                <div class="qualification__calender">
                  <i class="uil uil-calendar-alt"></i> 2016-2018
                </div>
             
            </div>
          </div>  --}}

                </div>
                @endforeach
                @endif

            </div>


    </section>



    <!--==================== PORTFOLIO ====================-->

    <section class="portfolio section" id="portfolio">
        <h2 class="section__title">Portfolio</h2>
        <span class="section__subtitle">Most recent work</span>

        <div class="portfolio__container container swiper-container">
            <div class="swiper-wrapper">
                <!--==================== PORTFOLIO 1====================-->
                @if (count($portfolios) > 0)
                @foreach ($portfolios as $portfolio)
                <div class="portfolio__content grid swiper-slide">
                    <img src="<?php echo $portfolio->image; ?>" alt="" class="portfolio__img" />
                    <div class="portfolio__data">
                        <h3 class="portfolio__title">"<?php echo $portfolio->title1;?>"</h3>
                        <p class="portfolio__description">
                            "<?php echo $portfolio->description;?>"
                        </p>
                    </div>
                </div>

                <!--==================== PORTFOLIO 2====================-->
                {{-- <div class="portfolio__content grid swiper-slide">
                    <img src="/assets/img/portfolio/2.jpg" alt=""
                        class="portfolio__img" />
                    <div class="portfolio__data">
                        <h3 class="portfolio__title">AS Grocery Shop</h3>
                        <p class="portfolio__description">
                            Create a E-commerce Website using PYTHON,MYSQL, HTML, CSS, PHP, BOOTSTRAP‑5.
                        </p>
                    </div>
                </div> --}}

                <!--==================== PORTFOLIO 3====================-->
                {{-- <div class="portfolio__content grid swiper-slide">
                    <img src="/assets/img/portfolio/3.jpg" alt="" class="portfolio__img" />
                    <div class="portfolio__data">
                        <h3 class="portfolio__title">Weather App</h3>
                        <p class="portfolio__description">
                            Create a Changing Weather app Using PYTHON, MYSQL, HTML, CSS, PHP, BOOTSTRAP‑5
                        </p>
                    </div>
                </div> --}}


                {{-- <div class="portfolio__content grid swiper-slide">
                    <img src="/assets/img/portfolio/4.jpg" alt="" class="portfolio__img" />
                    <div class="portfolio__data">
                        <h3 class="portfolio__title">Student Enrollment System</h3>
                        <p class="portfolio__description">
                            Create Student Enrollment system using PYTHON, MYSQL, HTML, CSS, DJANGO
                        </p>
                    </div>
                </div> --}}
                @endforeach
                @endif
            </div>

            <!-- Add arrows -->
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--==================== PROJECT IN MIND ====================-->

    <section class="project section">
        <div class="project__bg">
            <div class="project__container container grid">
                <div class="project__data">
                    <h2 class="project__title">You have a new project ?</h2>
                    <p class="project__description">
                        I would love to chat with you about your project and see how we
                        can work together to create something truly amazing. Let's
                        connect.
                    </p>
                    <a href="#contact" class="button button--flex button--white">
                        Contact Me
                        <i class="uil uil-message project__icon button__icon"></i>
                    </a>
                </div>

                <img src="/assets/img/travel-pic3.png" alt="" class="project__img" />
            </div>
        </div>
    </section>

    <!--==================== CONTACT ME ====================-->

    <section class="contact section" id="contact">
        <h2 class="section__title">Contact Me</h2>
        <span class="section__subtitle">Get in touch</span>

        <div class="contact__container container grid">
            <div>
                <div class="contact__information">
                    <i class="uil uil-phone contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Call Me</h3>
                        <span class="contact__subtitle">+001720337502</span>
                    </div>
                </div>

                <div class="contact__information">
                    <i class="uil uil-envelope contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Email</h3>
                        <span class="contact__subtitle">sahaarpita602@gmail.com</span>
                    </div>
                </div>

                <div class="contact__information">
                    <i class="uil uil-map-marker contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Location</h3>
                        <span class="contact__subtitle">Dhaka,Bangladesh</span>
                    </div>
                </div>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" class="contact__form grid">
                @csrf
                <div class="contact__inputs grid">
                    <div class="contact__content">
                        <label for="" class="contact__label">Name</label>
                        <input type="text" id="name" name="name" class="contact__input" />
                    </div>

                    <div class="contact__content">
                        <label for="" class="contact__label">Email</label>
                        <input type="email" id="email" name="email" class="contact__input" />
                    </div>
                </div>
                <div class="contact__content">
                    <label for="" class="contact__label">Project</label>
                    <input type="text" id="project" name="project"class="contact__input" />
                </div>
                <div class="contact__content">
                    <label for="" class="contact__label">Message</label>
                    <textarea name="message" id="message" cols="0" rows="7" class="contact__input"></textarea>
                </div>

                <div>
                    <a href="#" class="button button--flex">
                        Send Message
                        <i class="uil uil-message button__icon"></i>
                    </a>
                </div>
            </form>
        </div>
    </section>

    <!--==================== FOOTER ====================-->

    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Animesh</h1>
                    <span class="footer__subtitle">Web Developer</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contact Me</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Frawatanimesh"
                        target="_blank" class="footer__social">
                        <i class="uil uil-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com/rawatanimesh/?hl=en" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>

                    <a href="https://twitter.com/rawataniimesh?lang=en" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>

            <p class="footer__copy">&#169; Animesh Rawat. All rights reserved.</p>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->

    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="/main.js"></script>

    <!-- ===================== SHOW/HIDE LOADER ==================== -->
    <script>
        window.onload = function() {
            document.getElementById("loading").style.display = "none";
        };
    </script>

    <!-- =====================REGISTER SERVICE WORKER================ -->
    <script>
        if ("serviceWorker" in navigator) {
            window.addEventListener("load", function() {
                navigator.serviceWorker
                    .register("/serviceWorker.js")
                    .then((res) => console.log("service worker registered"))
                    .catch((err) => console.log("service worker not registered", err));
            });
        }
    </script>
</body>

</html>
