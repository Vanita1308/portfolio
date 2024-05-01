<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vanita Bhanushali</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/v3.webp" alt="Vanita Bhanushali" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Vanita Bhanushali">Vanita Bhanushali</h1>

          <p class="title">Software Engineer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:inquire.vanita13@gmail.com" class="contact-link">inquire.vanita13@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+917874331833" class="contact-link">+91 78743 31833</a>
            </div>

          </li>

          <!-- <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="2001-08-13">August 13, 2001</time>
            </div>

          </li> -->

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Bhuj, Kutch</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://wa.me/+917874331833" class="social-link" target="_blank">
              <ion-icon name="logo-whatsapp"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.linkedin.com/in/vanita-/" class="social-link" target="_blank">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.instagram.com/_vxnitx_/" class="social-link" target="_blank">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <!-- <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li> -->

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            Creative and skilled Web Developer and Graphic Designer with a passion for designing aesthetically 
            pleasing and user-friendly websites. Proficient in both web development and graphic design principles.
          </p>
          <a href="./assets/images/vanita.pdf" download="vanita.PDF" style="text-decoration: none;" target="_blank";>
          <button class="form-btn" type="submit" data-form-btn>
            <ion-icon name="paper-plane"></ion-icon>
            Download Resume
          </button></a>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/website development-icon.png" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web Design</h4>
                <p class="service-item-text">
                  Web design is the process of creating and organizing the visual elements of a website. 
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/graphic design-icon.png" alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Graphic Design</h4>

                <p class="service-item-text" style="text-align: justify;">
                  Expert in Adobe Creative Suite, transforming ideas into compelling design solutions.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/logo-icon.png" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Advertising & Branding</h4>

                <p class="service-item-text" style="text-align: justify;">
                  Developed and executed integrated advertising campaigns across digital, print, and social media platforms.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/social media marketing-icon.png" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Social Media Handling</h4>
                
                <p class="service-item-text" style="text-align: justify;">
                  Proficient in managing and optimizing accounts on major social media platforms, including Facebook, YouTube, Instagram and LinkedIn.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/graphic design-icon.png" alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">MS Word / MS Excel / Power Point</h4>

                <p class="service-item-text" style="text-align: justify;">
                  Extensive experience creating and formatting documents, spreadsheets, and presentations to a professional standard.
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Harin Kaniya</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Exceptional attention to detail and creativity! Vanita transformed our 
                    vision into a stunning website that exceeded our expectations. Highly recommend!
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Sarah Memon</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    A true professional in every sense! Vanita consistently delivered 
                    high-quality work and innovative design solutions. A pleasure to work with!
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Reena Doru</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Creative genius! Vanita has an uncanny ability to capture the essence 
                    of a brand and translate it into visually stunning graphics. Highly recommended!"
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.png" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Mohit Pomal</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Dedicated and reliable! Vanita consistently met deadlines and went above 
                    and beyond to ensure our project's success. An invaluable asset to any team.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">Clients</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/ionic.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/root.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/krasiva.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/murli.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/ionic.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/root.png" alt="client logo">
              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Krantiguru Shyamji Krishna Verma Kachchh University</h4>

              <span>2019 - 2022</span>

              <p class="timeline-text">
                Bachelor of Science (Computer Applications & Information Technology)
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Krantiguru Shyamji Krishna Verma Kachchh University</h4>

              <span>2022 — 2024</span>

              <p class="timeline-text">
                Master of Science (M.Sc) in Computer Application and Information Technology Integrated
              </p>

            </li>
          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title"> WARBLE SOLUTIONS</h4>

              <span>September 2022 - February 2023</span>

              <p class="timeline-text">
                Graphic Designer & Wordpress Developer
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">IONIC SOFTECH</h4>

              <span>February 2023 — December 2023</span>

              <p class="timeline-text">
                Front End Designer & Senior Graphic Designer
              </p>
            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">MOLTERA CERAMIC</h4>

              <span>January 2024 — Current</span>

              <p class="timeline-text">
                Social Media Handler & Graphic Designer
              </p>

            </li>


          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Graphic Design</h5>
                <data value="95">95%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 95%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Wordpress</h5>
                <data value="85">85%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 85%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Front End Design</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Digital Marketing</h5>
                <data value="95">95%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 95%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Banner Creation</h5>
                <data value="93">93%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 93%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Canva</h5>
                <data value="100">100%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 100%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Logo Design</h5>
                <data value="98">98%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 98%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Advertising & Branding</h5>
                <data value="100">100%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 100%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">MS Word / MS Excel / Power Point</h5>
                <data value="100">100%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 100%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>

      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <!-- <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li> -->

            <li class="filter-item">
              <button data-filter-btn>Graphics</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web Design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Logo</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Banner</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Visiting Card</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Post</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Client Work</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <!-- <li class="select-item">
                <button data-select-item>All</button>
              </li> -->

              <li class="select-item">
                <button data-select-item>Graphics</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web Design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Logo</button>
              </li>

              <li class="select-item">
                <button data-select-item>Banner</button>
              </li>

              <li class="select-item">
                <button data-select-item>Visiting Card</button>
              </li>

              <li class="select-item">
                <button data-select-item>Post</button>
              </li>

              <li class="select-item">
                <button data-select-item>Client Work</button>
              </li>
              
            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="graphics">
              <a href="./assets/images/graphics/2023.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/graphics/2023.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">3D Model</h3>

                <p class="project-category">Graphics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="logo">
              <a href="./assets/images/logo/memorable.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/logo/memorable.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Memorable Trip</h3>

                <p class="project-category">Logo</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="graphics">
              <a href="./assets/images/graphics/Jeep.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/graphics/Jeep.jpg" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">Jeep Poster</h3>

                <p class="project-category">Graphics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="banner">
              <a href="./assets/images/banner/banner-4.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/banner/banner-4.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Tours & Travel Banner</h3>

                <p class="project-category">Banner</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/kathination/index.php" target="blank">
  
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/kathination/preview.png" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Cafe Website</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/murli/index.php" target="blank">
  
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/murli/preview.png" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Music Website</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/moltera/index.php" target="blank">
  
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/moltera/preview.jpg" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Moltera Website</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/ionicsoftech/index.php" target="blank">
  
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/ionicsoftech/preview.jpg" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Ionic Softech Webite</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/portfolio/index.html" target="blank">
  
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/portfolio/preview.png" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Portfolio Site</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>




            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/travel/index.html" target="blank">
  
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/travel/readme-images/desktop.png" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Travel Website</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="graphics">
              <a href="./assets/images/graphics/flower effect.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/graphics/flower effect.jpg" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Flower</h3>

                <p class="project-category">Graphics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="logo">
              <a href="./assets/images/logo/murli.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/logo/murli.jpg" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Murli Music Classes</h3>

                <p class="project-category">Logo</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/digital-agency/index.html" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/digital-agency/readme-images/desktop.png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">Design Agency Website</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="graphics">
              <a href="./assets/images/graphics/shadow effect.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/graphics/shadow effect.jpg" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Shadow Effects</h3>

                <p class="project-category">Graphics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/food-master/index.html" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/food-master/readme-images/desktop.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Food Master</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="graphics">
              <a href="./assets/images/graphics/Just do it.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/graphics/Just do it.jpg" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">Overlap Effect</h3>

                <p class="project-category">Graphics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="logo">
              <a href="./assets/images/logo/messy.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/logo/messy.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Messy Trips</h3>

                <p class="project-category">Logo</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/halloween/index.html" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/halloween/preview.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Halloween Website</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="graphics">
              <a href="./assets/images/graphics/Make the logo bigger.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/graphics/Make the logo bigger.jpg" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">3D Text</h3>

                <p class="project-category">Graphics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="visiting card">
              <a href="./assets/images/card/ionic-card.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/card/ionic-card.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Ionic Softech Visiting Card</h3>

                <p class="project-category">Visiting Card</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="visiting card">
              <a href="./assets/images/card/volteca-card.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/card/volteca-card.jpg" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Volteca</h3>

                <p class="project-category">Visiting Card</p>

              </a>
            </li>



            <li class="project-item  active" data-filter-item data-category="banner">
              <a href="./assets/images/banner/banner-2.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/banner/banner-2.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Music Classes Banner (English)</h3>

                <p class="project-category">Banner</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="graphics">
              <a href="./assets/images/graphics/Wild.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/graphics/Wild.jpg" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Typography</h3>

                <p class="project-category">Graphics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/restaurant/index.html" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/restaurant/preview.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Restaurant Website</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="banner">
              <a href="./assets/images/banner/banner-1.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/banner/banner-1.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Property Dealer Banner</h3>

                <p class="project-category">Banner</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="graphics">
              <a href="./assets/images/graphics/Abcd.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/graphics/Abcd.jpg" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Blend Text</h3>

                <p class="project-category">Graphics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/home-dealer/index.html" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/home-dealer/readme-images/desktop.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Home Dealer Website</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="banner">
              <a href="./assets/images/banner/banner-3.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/banner/banner-3.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Music Classes Banner (Gujarati)</h3>

                <p class="project-category">Banner</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="graphics">
              <a href="./assets/images/graphics/creative corner.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/graphics/creative corner.jpg" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Text Outline Effect</h3>

                <p class="project-category">Graphics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/web/pet-master/index.html" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/web/pet-master/readme-images/desktop.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Pet Shop E-Commerce Website</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/1.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/1.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Stay Fit</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/2.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/2.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Just Do It</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/3.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/3.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Mojito</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/4.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/4.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Samosa</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/5.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/5.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Coffee</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/6.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/6.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Pizza</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/7.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/7.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Card</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/8.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/8.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Card</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/9.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/9.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Juice</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/10.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/10.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Shoes</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/11.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/11.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Coffee</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/12.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/12.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Burger</h3>

                <p class="project-category">Post</p>

              </a>
            </li>


            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/13.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/13.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Furniture</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/14.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/14.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Furniture</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/15.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/15.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Salad</h3>

                <p class="project-category">Post</p>

              </a>
            </li>


            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/16.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/16.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Juice</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/17.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/17.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Coffee</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/18.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/18.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Headphone</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/19.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/19.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Watch</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/20.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/20.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Shoes</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/21.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/21.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Ice-Cream</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/22.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/22.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Pizza</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/23.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/23.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Smoothie</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/24.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/24.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Ring</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/25.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/25.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Furniture</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/26.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/26.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Travel</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/27.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/27.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Ring</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/28.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/28.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Let's Play</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/29.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/29.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Food Delivery</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/30.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/30.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Food Delivery</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="post">
              <a href="./assets/images/post/31.png" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/post/31.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Cream</h3>

                <p class="project-category">Post</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="logo">
              <a href="./assets/images/logo/kutchcraze.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/logo/kutchcraze.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">KutchCraze</h3>

                <p class="project-category">Logo</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="logo">
              <a href="./assets/images/logo/reenascreation.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/logo/reenascreation.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Reena's Creation</h3>

                <p class="project-category">Logo</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="logo">
              <a href="./assets/images/logo/artcraze.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/logo/artcraze.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">ArtCraze</h3>

                <p class="project-category">Logo</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="logo">
              <a href="./assets/images/logo/braincare.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/logo/braincare.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Brain Care</h3>

                <p class="project-category">Logo</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="logo">
              <a href="./assets/images/logo/volteca1.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/logo/volteca1.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Volteca</h3>

                <p class="project-category">Logo</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="logo">
              <a href="./assets/images/logo/volteca2.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/logo/volteca2.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Volteca</h3>

                <p class="project-category">Logo</p>

              </a>
            </li>


            <li class="project-item  active" data-filter-item data-category="banner">
              <a href="./assets/images/banner/banner-6.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/banner/banner-6.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Moltera Banner</h3>

                <p class="project-category">Banner</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="logo">
              <a href="./assets/images/logo/kd.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/logo/kd.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">KD</h3>

                <p class="project-category">Logo</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="banner">
              <a href="./assets/images/banner/banner-8.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/banner/banner-8.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Festival Banner</h3>

                <p class="project-category">Banner</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="banner">
              <a href="./assets/images/banner/banner-7.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/banner/banner-7.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Invitation Card</h3>

                <p class="project-category">Banner</p>

              </a>
            </li>


            <li class="project-item  active" data-filter-item data-category="banner">
              <a href="./assets/images/banner/banner-9.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/banner/banner-9.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Moltera Newsletter</h3>

                <p class="project-category">Banner</p>

              </a>
            </li>

            
            <li class="project-item  active" data-filter-item data-category="banner">
              <a href="./assets/images/banner/banner-5.jpg" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/banner/banner-5.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Moltera Banner</h3>

                <p class="project-category">Banner</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="client work">
              <a href="./assets/images/work/ionic/ionicsoftech.pdf" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/work/ionic/ionic.jpg" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Ionic Softech</h3>

                <p class="project-category">Work</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="client work">
              <a href="./assets/images/work/krasiva/krasiva.pdf" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/work/krasiva/krasiva.jpg" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Krasiva Skin Clinic</h3>

                <p class="project-category">Work</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="client work">
              <a href="./assets/images/work/kwp/kutchwestpolice.pdf" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/work/kwp/kwp.jpg" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Kutch West Police</h3>

                <p class="project-category">Work</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="client work">
              <a href="./assets/images/work/pavitra/pavitraskills.pdf" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/work/pavitra/pavitra.jpg" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Pavitra Skiils Academy</h3>

                <p class="project-category">Work</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="client work">
              <a href="./assets/images/work/root/rootinfosys.pdf" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/work/root/root.jpg" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Root Infosys</h3>

                <p class="project-category">Work</p>

              </a>
            </li>

          </ul>

        </section>

      </article>



      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117305.14980317351!2d69.5865179955162!3d23.25087568735297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3950e209000b6f17%3A0x7077f358af0774a6!2sBhuj%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1714460827032!5m2!1sen!2sin"
            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

            <form action="contactprocess.php" method="post" class="form">

            <div class="input-wrapper">
              <input type="text" name="name" id="name" class="form-input" placeholder="Full name" required>

              <input type="email" name="email" id="email" class="form-input" placeholder="Email address" required>
            </div>

            <textarea name="message" id="message" class="form-input" placeholder="Your Message" required></textarea>

            <button class="form-btn" type="submit" name="submit">
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>

  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>