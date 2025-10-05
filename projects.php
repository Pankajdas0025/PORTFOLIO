
 <!DOCTYPE html>
<html lang="en">
  <head>

  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>PANKAJ KUMAR DAS — Full-Stack Web Developer</title>
  <meta name="description" content="Portfolio of Pankaj Kumar Das, a Full-Stack Web Developer skilled in HTML, CSS, JavaScript, and PHP. Explore projects, services, and contact details." />
  <meta name="author" content="Pankaj Kumar Das" />
  <meta name="keywords" content="Pankaj Kumar Das, full stack developer, web developer, portfolio, HTML CSS JavaScript PHP, CampusXchange" />

  <!-- Mobile / responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Crawling / indexing -->
  <meta name="robots" content="index, follow" />
  <meta name="referrer" content="no-referrer-when-downgrade" />

  <!-- Theme color -->
  <meta name="theme-color" content="#0b74de" />
  <meta name="msapplication-TileColor" content="#0b74de" />

  <!-- Canonical -->
  <link rel="canonical" href="https://pankajportfolio.free.nf/" />

  <!-- Open Graph (Facebook, LinkedIn, WhatsApp, etc.) -->
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="PANKAJ KUMAR DAS — Full-Stack Web Developer" />
  <meta property="og:description" content="Portfolio of Pankaj Kumar Das — explore projects, services, and contact information." />
  <meta property="og:url" content="https://pankajportfolio.free.nf/" />
  <meta property="og:site_name" content="Pankaj Portfolio" />
  <meta property="og:image" content="https://pankajportfolio.free.nf/assets/images/profile-img.jpeg" />
  <meta property="og:image:alt" content="Portfolio of Pankaj Kumar Das — Web Developer" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="PANKAJ KUMAR DAS — Full-Stack Web Developer" />
  <meta name="twitter:description" content="Explore the portfolio of Pankaj Kumar Das: Full-stack web developer skilled in HTML, CSS, JS, and PHP." />
  <meta name="twitter:image" content="https://pankajportfolio.free.nf/assets/images/profile-img.jpeg" />

  <!-- Language -->
  <meta http-equiv="content-language" content="en" />
  <meta name="format-detection" content="telephone=no" />

  <!-- Structured data (JSON-LD) for Person -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Pankaj Kumar Das",
    "url": "https://pankajportfolio.free.nf/",
    "sameAs": [
      "https://www.linkedin.com/in/pankaj-kumar-das-134603297",
      "https://github.com/Pankajdas0025",
      "https://x.com/Pankajdas_0025"
    ],
    "jobTitle": "Full-Stack Web Developer",
    "worksFor": {
      "@type": "Organization",
      "name": "CampusXchange"
    }
  }
  </script>
<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/utilities.css" />

    <style>

/* Project cards */
.card {
  padding: 1rem;
  background: var(--card-background);
  color: #ffffff;
  transition: 0.4s ease-in-out;
  cursor: pointer;

}

.card a {
  color: #ffffff;
  transition: 0.25s ease-in-out;
  font-size: 1.1rem;
  margin-right: 0.3rem;
}

.card a:hover {
  color: var(--primary-color);
}

.card:hover {
  box-shadow: inset 0 0px 300px 3px rgba(0, 0, 0, 0.8);
}

.card:hover .project-info {
  opacity: 1;
}

/* Project Images */

/* project 1 */
#second-card:nth-child(1) {
 background: url(assets/images/text-to-speech.png) center center/cover;
}

/* Project 2 */
#second-card:nth-child(2) {

   background: url(assets/images/cbi-clone-project.png) center center/cover;
}

/* Project 3 */
#second-card:nth-child(3) {
  background: url(assets/images/weather-app-project.png) center center/cover;
}

/* Project 4 */
#second-card:nth-child(4) {
  background: url(assets/images/resume-maker.png) center center/cover;
}

/* Project 5 */
#second-card:nth-child(5) {
  background: url(assets/images/spotify-clone.png) center center/cover;
}

/* Project 6 */
#second-card:nth-child(6) {
  background: url(assets/images/social-handling.png) center center/cover;
}

    </style>
  </head>
  <body>
    <header id="hero">
      <!-- Navbar -->
      <nav class="navbar">
        <div class="container">
           <!-- Logo -->
          <h1 id="logo">
            <a href="#"
              ><img src="assets/images/logo-portfolio.png" alt="Pankaj-protfolio-logo"
            /></a>

          </h1>
          <!-- Navbar links -->
          <ul class="nav-menu">
            <li><a class="nav-link" href="index.php#skills">ABOUT</a></li>
            <li><a class="nav-link" href="index.php#skills">SKILLS</a></li>
            <li><a class="nav-link" href="index.php#projects">PROJECTS</a></li>
            <li><a class="nav-link" href="index.php#educations">EDUCATION</a></li>
            <li><a class="nav-link" href="index.php#contact">CONTACT</a></li>
            <li><a class="nav-link" href="index.php#blogs">BlOGS</a></li>

            </li>

            <!-- Toggle switch -->
            <div class="theme-switch">
              <input type="checkbox" id="switch" />
              <label class="toggle-icons" for="switch">
                <img class="moon" src="assets/moon.svg" />
                <img class="sun" src="assets/sun.svg" />
              </label>
            </div>
            <!-- Hamburger menu -->
          </ul>
          <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
        </div>
      </nav>
  </header>

 <!-- Projects -->
    <section id="projects" class="project-container container">
<br>
<br>
<br>

      <article class="project">
        <!-- Project 1 -->
        <div  class="card" id="second-card">
          <div class="project-info">
            <div class="project-bio">
              <h3>Project </h3>
              <p>JS, API , CSS ,HTML</p>
            </div>

            <div class="project-link">
              <a href="https://github.com/Pankajdas0025/BasicProjects/tree/main/login" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://github.com/Pankajdas0025/BasicProjects/tree/main/login" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div  class="card" id="second-card" >
          <div class="project-info">
            <div class="project-bio">
              <h3>Project Two</h3>
              <p>HTML, CSS, JS</p>
            </div>

            <div class="project-link">
              <a href="https://github.com/Pankajdas0025/CBIClone.git" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://pankajdas0025.github.io/CBIClone/" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>

        <!-- Porject 3 -->
        <div  class="card" id="second-card" >
          <div class="project-info">
            <div class="project-bio">
              <h3>Project Three</h3>
              <p>Google API , HTML  ,CSS ,JS</p>
            </div>

            <div class="project-link">
             <a href="https://github.com/Pankajdas0025/BasicProjects" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://github.com/Pankajdas0025/BasicProjects" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>

        <!-- Project 4 -->
        <div  class="card" id="second-card" >
          <div class="project-info">
            <div class="project-bio">
              <h3>Project Four</h3>
              <p>HTML , CSS, JS</p>
            </div>

            <div class="project-link">
              <a href="https://github.com/Pankajdas0025/RESUME_MAKER.git" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://github.com/Pankajdas0025/RESUME_MAKER.git" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>

        <!-- Project 5 -->
          <div  class="card" id="second-card" >
          <div class="project-info">
            <div class="project-bio">
              <h3>Project Six</h3>
                 <p>HTML,CSS,PHP,MySQL</p>
            </div>

            <div class="project-link">
              <a href="https://pankajdas0025.github.io/" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://pankajdas0025.github.io/" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>


        <!-- Project 6 -->
        <div  class="card" id="second-card" >
          <div class="project-info">
            <div class="project-bio">
              <h3>Project Five</h3>
                 <p>HTML , CSS, JS</p>
            </div>

            <div class="project-link">
              <a href="https://pankajdas0025.github.io/socialhandlig/" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://pankajdas0025.github.io/socialhandlig/" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>
      </article>
    </section>
    <br>
    <?php include "footer.php" ?>
  <script src="js/script.js"></script>
    </body>
    </html>