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
    /* Full screen loader background */
    #loading-screen {
      position: fixed;
      width: 100%;
      height: 100%;
      background: #ffffff;
      top: 0;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.5s ease, visibility 0.5s ease;
    }

    /* Hide smoothly */
    #loading-screen.hidden {
      opacity: 0;
      visibility: hidden;
    }

    /* Loader Animation */
    .loader {
      width: 60px;
      height: 60px;
      border: 6px solid #e0e0e0;
      border-top: 6px solid #f43f5e;
      border-bottom: 6px solid #6366f1;
      border-radius: 10%;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
  </head>
  <body>
  <!-- Splash Screen Loader -->
  <div id="loading-screen">
  <div class="loader"></div>
  </div>
     <div class="bg-buttons">
    <!-- Randomly placed buttons -->
    <script>
      for (let i = 0; i < 40; i++) {
        const btn = document.createElement("button");
        btn.style.top = Math.random() * 100 + "vh";
        btn.style.left = Math.random() * 100 + "vw";
        document.querySelector(".bg-buttons").appendChild(btn);
      }
    </script>
  </div>
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
            <li><a class="nav-link" href="#">ABOUT</a></li>
            <li><a class="nav-link" href="#skills">SKILLS</a></li>
            <li><a class="nav-link" href="#projects">PROJECTS</a></li>
            <li><a class="nav-link" href="#educations">EDUCATION</a></li>
            <li><a class="nav-link" href="#contact">CONTACT</a></li>
            <li><a class="nav-link" href="#">BlOGS</a></li>

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

      <section class="header-container">
        <img
          class="profile-image"
          src="assets/images/profile-img.jpeg"
          alt=""
        />
        <br>
        <h1>Hello 👋, I'm Pankaj Kumar Das</h1>
        <br>
         <a style="color: white;"
                class="nav-link btn btn-primary"
                href="assets/pankajResume.pdf"
                >RESUME <i class="fas fa-book"></i
              ></a>

        <div class="content-text">
          <!-- <h2>Building digital</h2>
          <h2>products, brands, and experience.</h2> -->

          <p>
            A Full-stack Developer With a focus on creating responsive front-end interfaces and efficient back-end systems. Proficient in HTML, CSS, JavaScript, PHP, and MySQL, I combine strong fundamentals with a constant drive to learn and improve. I thrive on building scalable, user-centric web solutions.
          </p>

        </div>

        <a href="https://github.com/Pankajdas0025" class="btn btn-secondary">Connect With Me</a>
      </section>
    <!-- skills -->
     <section class="skills container" id="skills">
      <div class="content-text">
        <h2>Skills</h2>
        <p>Here are a few technologies I've been working with recently:</p>
      </div>

      <div class="skills-container">
        <p>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" />
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/C-00599C?style=for-the-badge&logo=c&logoColor=white" />
  <img src="https://img.shields.io/badge/C++-00599C?style=for-the-badge&logo=c%2B%2B&logoColor=white" />
  <img src="https://img.shields.io/badge/XML-FF6600?style=for-the-badge&logo=xml&logoColor=white" />
        </p>

        </div>
        </section>

    <!-- Projects -->
    <section id="projects" class="project-container container">
      <div class="content-text">
        <h2>Projects</h2>
        <p>Check out some of my personal and paid projects</p>
      </div>

      <article class="project">
        <!-- Project 1 -->
        <div  class="card">
          <div class="project-info">
            <div class="project-bio">
              <h3>Project one </h3>
              <p>HTML , CSS , JavaScript , Bootstrap</p>
            </div>

            <div class="project-link">
              <a href="https://github.com/Pankajdas0025/Tmu-Notes.git" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://pankajdas0025.github.io/Tmu-Notes/" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div  class="card">
          <div class="project-info">
            <div class="project-bio">
              <h3>Project Two</h3>
              <p>JavaScript, PHP, MySQL, JQuery</p>
            </div>

            <div class="project-link">
              <a href="https://github.com/Pankajdas0025/" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://testcampusxchange.page.gd/" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>

        <!-- Porject 3 -->
        <div  class="card">
          <div class="project-info">
            <div class="project-bio">
              <h3>Project Three</h3>
              <p>HTML, CSS, JavaScript</p>
            </div>

            <div class="project-link">
              <a href="https://github.com/Pankajdas0025/Paramount-Coaching-Centre.git" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://pankajdas0025.github.io/Paramount-Coaching-Centre/index.html" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>

        <!-- Project 4 -->
        <div  class="card">
          <div class="project-info">
            <div class="project-bio">
              <h3>Project Four</h3>
              <p>HTML, CSS, JS, </p>
            </div>

            <div class="project-link">
              <a href="https://github.com/Pankajdas0025/TECH_BUGS-HACKATHON-2025-.git" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://pankajdas0025.github.io/TECH_BUGS-HACKATHON-2025-/" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>

        <!-- Project 5 -->
        <div  class="card">
          <div class="project-info">
            <div class="project-bio">
              <h3>Project Five</h3>
              <p>JS, CSS, HTML </p>
            </div>

            <div class="project-link">
              <a href="https://github.com/Pankajdas0025/Pankajdas0025.git" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://github.com/Pankajdas0025/Pankajdas0025.git" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>

        <!-- Project 6 -->
        <div  class="card">
          <div class="project-info">
            <div class="project-bio">
              <h3>Project Six</h3>
              <p>React, Redux, SASS</p>
            </div>

            <div class="project-link">
              <a href="https://github.com/Pankajdas0025/ApexPlanet_INTERNSHIP/tree/main/BlogScript" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://blogscriptapp.free.nf/" target="_blank"><i class="fas fa-globe"></i></a>
            </div>
          </div>
        </div>
      </article>

      <a href="projects.php" class="btn btn-secondary">See More <i class="fas fa-arrow-right"></i
      ></a>
    </section>

<!--educations-->
<section class="education container" id="educations">

  <div class="content-text">
    <h2>Education</h2>
    <p>Here is my educational background</p>
  </div>
  <div class="education-container">
    <div class="education-box">
      <h3>Computer Science & Engineering</h3>
      <h4>2023 - Present</h4>
      <h5>Teerthanker Mahaveer University</h5>
      <p>Currently pursuing my Bachelor's degree in Computer application at college of computing science & information technology, TMU . Expected to graduate in 2026.</p>
    </div>
    <div class="education-box">
      <h3>Higher Secondary Education</h3>
      <h4>2021 - 2023</h4>
      <h5>Bihar board Higher Secondary Education</h5>
      <p>Completed my Higher Secondary education from Bihar board Higher Secondary Education in 2023, with a focus on Science stream.</p>
    </div>
    <div class="education-box">
      <h3>Secondary Education</h3>
      <h4>2019- 2021</h4>
      <h5>Bihar Board of Secondary Education</h5>
      <p>Completed my Secondary education from Bihar Board of Secondary Education in 2021, laying the foundation for my academic journey.</p>
    </div>
  </div>
</section>
<!-- contact -->

<section class="contact container" id="contact">
  <div class="content-text">
    <h2>Contact</h2>
    <p>Feel free to reach out to me for any inquiries or collaborations.</p>
  </div>

  <div class="contact-container">
  <div class="contact-box">
  <form id="clientForm" method="POST">
  <span id="Error"></span>
  <input type="text" placeholder="Enter your Name" id="client_name" name="client_name" onchange=" Check_Name()" required><br>
  <input type="tel" placeholder="Enter your Mobile Number" id="client_mobile" name="client_mobile" maxlength="10" onchange=" Check_Mob()" required><br>
  <input type="email" placeholder="Enter your Email" id="client_email" name="client_email" onchange="Check_Email()"  required ><br>
  <input type="text" placeholder="type some message.." id="client_sms" name="client_sms"  required>
  <input type="submit"  value="SUBMIT" id="client_form_sbtn">
  </form>
    </div>
    </div>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Clean and validate input
$to = htmlspecialchars(trim($_POST['client_email']));
$name = htmlspecialchars(trim($_POST['client_name']));
$sms  = htmlspecialchars(trim($_POST['client_sms']));


    $errors = [];

    // Validation rules
    if (empty($name) || strlen($name) < 4) {
        $errors[] = "Name must be at least 2 characters.";
    }

    if (empty($to) || !filter_var($to, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email address is required.";
    }

    if (empty($sms) || strlen($sms) < 5) {
        $errors[] = "Message should be at least 5 characters.";
    }

    if (!empty($errors)) {
        // Display all errors
        echo "<script>document.getElementById('Error').innerHTML = '⚠️ " . implode(" ", $errors) . "';

        </script>";
        exit();
    }

    $subject = 'Thank you for getting in touch through my portfolio!';

    // Email HTML template
    $message = "<body style='margin: 0; padding:5px; background-color: #f4f4f4; font-family: Arial, sans-serif; line-height: 1.2; color: #333;'>
    <div style='max-width: 1000px; margin: auto; padding:10px; border-radius:0; box-shadow: 0 2px 10px rgba(0,0,0,0.1);'>

    <img src='https://pankajdas0025.github.io/PORTFOLIO/Images/preview-banner.png' height='auto' width='100%' style='margin-top: 25px; border-radius: 15px 15px 0px 0px; font-size:2rem;'>

        <div style='color: #ffffff; padding:10px; background: linear-gradient(to right, #6366f1,#f43f5e); text-align: center;'><h2>Hello 👋 $name</h2>
            <p style='font-size: 1rem;'>Your Message For Me</p>
            <p style='color: #e3e3e6; padding: 15px;'>$sms</p>
        </div>
        <div style='background-color: #ecf0f1; padding: 15px; border-radius: 5px; margin-top: 20px;'>
            I truly appreciate your interest. I'll review your message and respond at the earliest possible convenience.
            <p>If your inquiry is time-sensitive, you may also contact me directly <br><a href='tel:+91915572662'>+91 9155726625</a></p>
            <p>In the meantime, you're welcome to explore more of my work:</p>

            <a href='https://www.linkedin.com/in/pankaj-kumar-das-134603297' title='Linkedin account'> Linkedin </a>
            <a href='https://github.com/Pankajdas0025' title='Github account'>Github</a>
        </div>
        <div style='margin-top: 30px; font-size: 0.9em; color: #555; border-top: 1px solid #ddd; padding: 20px;'>
            <h2>Looking forward to connecting with you.</h2>
            <p>Pankaj Kumar Das</p>
            <p>Full Stack Web Developer</p>
            <p><a href='https://www.bing.com/maps?q=kishanganj&FORM=HDRSC6&cp=26.082286%7E87.938469&lvl=11.4'>🏠 Kishanganj, Bihar (855115)</a></p>
            <a href='mailto:pd5569121@gmail.com'>📧 pd5569121@gmail.com</a>
        </div>
    </div>
    </body>";

    // Send email using PHPMailer
$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8'; //
$mail->Encoding = 'base64'; //for emoji such as "👋"

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'pd5569121@gmail.com';
        $mail->Password   = 'carp uidg qexa uvyr'; // App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('pd5569121@gmail.com', 'Pankaj Kumar Das');
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->send();
echo "<script>
    document.getElementById('Error').innerHTML = '✅ Form submitted successfully!';

    setTimeout(function() {
        window.location.href='index.php#contact';
    }, 2000); // Redirect after 2 seconds in form page

setTimeout(function() {
   document.getElementById('Error').innerHTML = '';
    window.location.href='index.php';
}, 4000); // Refresh the page after 1 second

</script>";
exit();

    } catch (Exception $e) {
        echo "<script>document.getElementById('Error').innerHTML = '⚠️ Email could not be sent. Please try again later.';

        </script>";
    }
}
?>


  </section>

<?php include "footer.php" ?>

<script>




    // Keep loader for 3 seconds, then hide
    window.addEventListener("load", function() {
      setTimeout(function() {
        document.getElementById("loading-screen").classList.add("hidden");
      },2000); // 3000ms = 3 seconds
    });

// contact from validation....................................................


    const Errorsms = document.getElementById('Error');
    const nameInput = document.getElementById('client_name');
    const emailInput = document.getElementById('client_email');
    const mobInput = document.getElementById('client_mobile');
    const smsInput = document.getElementById('client_sms');


    function Check_Name() {
      const name = nameInput.value.trim();
      if (!/^[a-zA-Z\s]{4,}$/.test(name)) {
        Errorsms.innerHTML = "Please enter a valid name (letters only, min 4 characters).";
        nameInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          nameInput.value = "";
          nameInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }

    function Check_Email() {
      const email = emailInput.value.trim();
      if (!/^\S+@\S+\.\S+$/.test(email)) {
        Errorsms.innerHTML = "Please enter a valid email address.";
        emailInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          emailInput.value = "";
          emailInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }

    function Check_Mob() {
      const mobile = mobInput.value.trim();
      if (!/^\d{10}$/.test(mobile)) {
        Errorsms.innerHTML = "Mobile number must be exactly 10 digits.";
        mobInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          mobInput.value = "";
          mobInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }
</script>
    <script src="js/script.js"></script>
  </body>
</html>
