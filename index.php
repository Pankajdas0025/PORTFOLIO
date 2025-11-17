<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include database and PHPMailer files
require 'components/db.php'; // Make sure $pdo is defined in this file
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Input validation function
function validate_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = validate_input($_POST['name'] ?? '');
    $email = validate_input($_POST['email'] ?? '');
    $subject = validate_input($_POST['subject'] ?? '');
    $userMessage = validate_input($_POST['message'] ?? '');

    $errors = [];

    if (!preg_match("/^[a-zA-Z\s]{2,}$/", $name)) {
        $errors[] = "Invalid name.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email.";
    }
    if (empty($subject) || strlen($subject) < 3) {
        $errors[] = "Subject too short.";
    }
    if (strlen($userMessage) < 10) {
        $errors[] = "Message too short.";
    }

    if (!empty($errors)) {
        echo "<script>alert('" . implode("\\n", $errors) . "');</script>";
        exit;
    }

    // Insert into database
    try {
        $stmt = $pdo->prepare("INSERT INTO portfolio_data (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $subject, $userMessage]);
    } catch (PDOException $e) {
        echo "<script>alert('Database error: {$e->getMessage()}');</script>";
        exit;
    }

    // Send email
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'pd5569121@gmail.com';
        $mail->Password = 'carp uidg qexa uvyr qrde'; // Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('pd5569121@gmail.com', 'Portfolio Contact Form');
        $mail->addAddress('pd5569121@gmail.com');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "New Portfolio Contact Form Submission: $subject";
        $mail->Body = "<body style='margin: 0; padding:5px; background-color: #f4f4f4; font-family: Arial, sans-serif; line-height: 1.2; color: #333;'>
    <div style='max-width: 1000px; margin: auto; padding:10px; border-radius:0; box-shadow: 0 2px 10px rgba(0,0,0,0.1);'>
        <img src='images/preview-banner.png' height='auto' width='100%' style='margin-top: 25px; font-size:2rem;'>
        <div style='color: #ffffff; padding:10px; background: linear-gradient(to right, #6366f1,#f43f5e); text-align: center;'><h2>Hello 👋 $name</h2>
                       <p><strong>Name:</strong> $name</p>
                       <p><strong>Email:</strong> $email</p>
                       <p><strong>Message:</strong><br>$userMessage</p>
        </div>
        <div style='background-color: #ecf0f1; padding: 15px; border-radius: 5px; margin-top: 20px;'>
            I truly appreciate your interest. I'll review your message and respond at the earliest possible convenience.
            <p>If your inquiry is time-sensitive, you may also contact me directly <br><a href='tel:+91915572****'>+91 91557266**</a></p>
            <p>In the meantime, you're welcome to explore more of my work:</p>
            <a href='https://www.linkedin.com/in/pankaj-das-134603297/' title='Linkedin account'>Linkedin</a>
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


        $mail->send();
        echo "<script>alert('✅ Message sent successfully!');</script>";
    } catch (Exception $e) {
        echo "<script>alert('❌ Email error: {$mail->ErrorInfo}');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<!-- Basic SEO Meta Tags -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Pankaj Kumar Das — Full-Stack Web Developer & Web Solutions Expert</title>
<meta name="description" content="Discover the portfolio of Pankaj Kumar Das, a skilled Full-Stack Web Developer specializing in HTML, CSS, JavaScript, PHP, and web solutions. Explore projects, services, and get in touch for affordable web development in Kishanganj." />
<meta name="author" content="Pankaj Kumar Das" />
<meta name="keywords" content="Pankaj Kumar Das, full stack web developer, web developer portfolio, HTML CSS JavaScript PHP, web development services Kishanganj, affordable website solutions, CampusXchange Services, professional web solutions" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
  <meta property="og:image" content="https://pankajportfolio.free.nf/images/Me.jpeg" />
  <meta property="og:image:alt" content="Portfolio of Pankaj Kumar Das — Web Developer" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="PANKAJ KUMAR DAS — Full-Stack Web Developer" />
  <meta name="twitter:description" content="Explore the portfolio of Pankaj Kumar Das: Full-stack web developer skilled in HTML, CSS, JS, and PHP." />
  <meta name="twitter:image" content="https://pankajportfolio.free.nf/images/Me.jpeg" />

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
      "name": "campusXchange"
    }
  }
  </script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- Aos Animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" type="text/css">
  <!-- Favicon  --------------------------------------------------------------------------->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
</head>
<body>
  <div class="wrap">
  <header>
      <div class="brand">
        <div class="logo"> </div>
        <div>
          <h1>PORTFOLIO</h1>

        </div>
      </div>
      <nav id="nav">
        <a href="#home" class="nav-link active">Home</a>
        <a href="#about" class="nav-link">About</a>
        <a href="#education" class="nav-link">Education</a>
        <a href="#skills" class="nav-link">Skills</a>
        <a href="#projects" class="nav-link">Projects</a>
        <a href="#certs" class="nav-link">Certifications</a>
        <a href="#contact" class="nav-link">Contact</a>
      </nav>
      <button class="hamburger" id="hamburger" aria-label="Toggle Menu">
  <i class="fa-solid fa-bars"></i>
</button>

    </header>
    <!-- HERO -->
    <main id="home" class="hero">
      <div class="card intro fade-up" data-aos="fade" >
        <h2>Hi, I'm <span style="color:var(--primary);font-weight:800">Pankaj Kumar Das</span></h2>
        <p>I'm a full-stack developer who loves turning ideas into smooth, functional, and visually appealing web experiences. I specialize in both front-end and back-end development, creating responsive interfaces with HTML, CSS, and JavaScript, and building reliable, efficient systems using PHP and MySQL. I enjoy the balance between creativity and logic that web development offers—designing something users can see and interact with while making sure everything behind the scenes runs perfectly.

I'm passionate about writing clean, maintainable code and constantly learning new technologies to stay ahead in a fast-moving industry. My goal is always to create web solutions that are not only technically solid but also meaningful and user-friendly.

Alongside development, I have a strong understanding of SEO and how it ties into building successful websites. From optimizing site structure and performance to crafting search-friendly content, I make sure my projects are easy to find and deliver real value.

Whether I'm improving an existing product or building something from scratch, I aim to create websites that feel seamless, perform efficiently, and connect with users in the best way possible.</p>
         <div class="cta" data-aos="fade-up">
          <a class="btn" href="#projects"><i class="fa-solid fa-eye"></i> View Work</a>
         <a class="btn secondary" href="images/Full-Stack CV Resume.pdf" download>
  <i class="fa-solid fa-download"></i> Resume
</a>

        </div>

        <div style="margin-top:18px;display:flex;gap:10px;flex-wrap:wrap">
          <div class="tag">HTML</div>
          <div class="tag">CSS</div>
          <div class="tag">JavaScript</div>
          <div class="tag">PHP</div>
          <div class="tag">MySQL</div>
        </div>
      </div>

      <aside class="profile card" data-aos="fade-up">
        <div class="avatar"> <img src="images/Me.jpeg"> </div>
        <div class="meta">
          <strong>PANKAJ KUMAR DAS</strong>
          <small>Full-stack developer</small>
        </div>
        <div class="flex muted" style="font-size:0.9rem">
          <div><i class="fa-solid fa-location-dot"></i> India</div>
          <div><i class="fa-solid fa-briefcase"></i> Fresher</div>
           <div><i class='fas fa-lightbulb'></i>  Founder at <a href="https://campusxchange.wuaze.com/" style="font-weight:bolder; color: white;" title="Explore CampusXchange Services">CampusXchange</a></div>
        </div>
        <div style="width:100%;display:flex;gap:8px;justify-content:space-between">
          <a href="#contact" class="btn" style="flex:1;justify-content:center"><i class="fa-solid fa-envelope"></i> Contact</a>
          <a class="btn secondary" style="flex:1;justify-content:center;" href="#projects"><i class="fa-solid fa-code"></i> Projects</a>
        </div>
      </aside>
    </main>

    <!-- ABOUT -->
    <section id="about">
      <div class="section-head"><h3>About</h3><small class="muted">— who I am & what I do</small></div>
      <div class="about grid">
        <div class="card fade-up">
          <p>I build modern, responsive websites and web apps using standard technologies (HTML, CSS, JavaScript) and back-end stacks like PHP and MySQL. I care about performance, accessibility, and clean code. Outside of coding, I mentor students, write short technical guides, and design learning resources.</p>

          <ul style="margin-top:12px;list-style:disc;padding-left:18px;color:var(--muted)">
            <li>Designing responsive and accessible user interfaces</li>
            <li>Building REST APIs and server-side logic</li>
            <li>Optimizing performance & SEO for better conversions</li>
          </ul>
        </div>

        <div class="facts">
          <div class="fact">
            <div>
              <strong>Location</strong>
              <div class="muted">Kishanganj(Bihar), India</div>
            </div>
            <i class="fa-solid fa-location-dot"></i>
          </div>

          <div class="fact">
            <div>
              <strong>Available for</strong>
              <div class="muted">Freelance | Onsite JOB</div>
            </div>
            <i class="fa-solid fa-briefcase"></i>
          </div>

          <div class="fact">
            <div>
              <strong>Contact</strong>
              <div class="muted" style="font-size: 12px;">pankajkumardas8678@gmail.com</div>
            </div>
            <i class="fa-solid fa-envelope"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- EDUCATION -->
    <section id="education" data-aos="fade-up">
      <div class="section-head"><h3>Education</h3><small class="muted">— academic timeline</small></div>
      <div class="timeline card fade-up">
        <div class="item">
          <div class="year">2023-2026</div>
          <div>
            <strong> Bachelor of Computer Application</strong>
            <div>Teerthanker Mahaveer University — Graduated with honours. Focused on algorithms, DBMS and web technologies.</div>
          </div>
        </div>

        <div class="item">
          <div class="year">2021-2023</div>
          <div>
            <strong>Senior Secondary</strong>
            <div>Bahadurganj College   — Science stream (PCM)</div>
          </div>
        </div>
      </div>
    </section>

    <!-- SKILLS -->
    <section id="skills">
      <div class="section-head"><h3>Skills</h3><small class="muted">— technical proficiency</small></div>
      <div class="skills">
        <div class="skill card fade-up">
          <strong>Front-end</strong>
          <div class="muted">•HTML  •CSS  •JavaScript  •Bootstrap •JQuery</div>
          <div class="bar"><i data-percent="92"></i></div>
        </div>

        <div class="skill card fade-up">
          <strong>Back-end</strong>
          <div class="muted">•PHP  •Laravel  •MySQL</div>
          <div class="bar"><i data-percent="80"></i></div>
        </div>

        <div class="skill card fade-up">
          <strong>Tools & DevOps</strong>
          <div class="muted">Git • GitHub •Vscode •Docker (basic)</div>
          <div class="bar"><i data-percent="70"></i></div>
        </div>

        <div class="skill card fade-up">
          <strong>Others</strong>
          <div class="muted">SEO • Generative AI • DSA • Web Hosting</div>
          <div class="bar"><i data-percent="68"></i></div>
        </div>
      </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects">
      <div class="section-head"><h3>Projects</h3><small class="muted"> — selected work</small></div>

      <div style="margin-bottom:10px;display:flex;gap:8px;flex-wrap:wrap" >
        <button class="tag" data-filter="all">All</button>
        <button class="tag" data-filter="web">Websites</button>
        <button class="tag" data-filter="app">Web Apps</button>
        <button class="tag" data-filter="tool">Tools</button>
      </div>

      <div class="projects-grid">

        <!-- Project 1 -->
        <article class="project-card" data-aos="fade-up" data-aos-delay="200"  data-type="web" data-title="CampusXchange" data-desc="A study resource sharing platform for students. Features notes, blogs and project marketplace." data-tech="HTML, CSS, PHP, MySQL">
          <img src="images/campusxchange-paltform.png" loading="lazy" alt="CampusXchange  web services and Mentorship Program ">
          <div>
            <strong>CampusXchange</strong>
            <div class="muted">Web development & Tech Service</div>
            <div class="tags"><span class="tag">HTML,CSS,JS</span><span class="tag">PHP</span><span class="tag">MySQL</span><br><br><span class="tag"><a href="https://campusxchange.wuaze.com/">View<i class="fa-solid fa-eye"></i></a></span> <span class="tag"><a href="https://github.com/Pankajdas0025">Code</a></span></div>
          </div>
        </article>

        <!-- Project 2 -->
        <article class="project-card" data-aos="fade-up" data-aos-delay="400"  data-type="app" data-title="TaskFlow" data-desc="A progressive task manager with offline support and local sync." data-tech="JavaScript, Service Workers, IndexedDB">
          <img src="images/blogscript-web-application.png" loading="lazy" alt="TaskFlow screenshot">
          <div>
            <strong>BlogScript</strong>
            <div class="muted">CRUD based blog application</div>
            <div class="tags"><span class="tag">HTML,CSS,JS</span><span class="tag">PHP</span><span class="tag">MySQL</span><br><br><span class="tag"><a href="https://blogscriptapp.free.nf/">View<i class="fa-solid fa-eye"></i></a></span> <span class="tag"><a href="https://github.com/Pankajdas0025">Code<i class="fa-solid fa-code"></i></a></span></div>
          </div>
        </article>

        <!-- Project 3 -->
        <article class="project-card" data-aos="fade-up" data-aos-delay="600"  data-type="tool" data-title="SeoBuddy" data-desc="A lightweight SEO reporting tool for small sites." data-tech="Node.js, Puppeteer">
          <img src="images/resumemaker.png" loading="lazy" alt="SeoBuddy screenshot">
          <div>
            <strong>Resume Maker</strong>
            <div class="muted">Make ATS based resume</div>
            <div class="tags"><span class="tag">HTML,CSS,JS</span><span class="tag">PHP</span><span class="tag">MySQL</span><br><br><span class="tag"><a href="https://github.com/Pankajdas0025/RESUME_MAKER.git">View</a></span> <span class="tag"><a href="https://github.com/Pankajdas0025/RESUME_MAKER.git">Code<i class="fa-solid fa-code"></i></a></span></div>
          </div>
        </article>

        <!-- Project 4 (repeat with different content) -->

         <article class="project-card" data-aos="fade-up" data-aos-delay="1000" data-type="app" data-title="MentorConnect" data-desc="A platform connecting mentors and learners with booking and sessions." data-tech="PHP, Stripe, MySQL">
          <img src="images/weather-application.png" loading="lazy" alt="MentorConnect screenshot">
          <div>
            <strong>Weather App</strong>
            <div class="muted">API based weather application</div>
            <div class="tags"><span class="tag">JS</span><span class="tag">API</span><span class="tag">PHP</span><br><br><span class="tag"><a href="https://github.com/Pankajdas0025/BasicProjects.git">View</a></span> <span class="tag"><a href="https://github.com/Pankajdas0025/BasicProjects.git">Code<i class="fa-solid fa-code"></i></a></span></div>
          </div>
        </article>

        <!-- Project 5 -->

          <article class="project-card" data-aos="fade-up" data-aos-delay="800"  data-type="web" data-title="Portfolio Revamp" data-desc="Personal portfolio template with animations and CMS-ready sections." data-tech="HTML, CSS, JS">
          <img src="images/xyz-coaching-website.png" loading="lazy" alt="Portfolio screenshot">
          <div>
            <strong>xyz coaching website</strong>
            <div class="muted">Educational platform</div>
            <div class="tags"><span class="tag">Design</span><span class="tag">JQuery</span><span class="tag">PHP</span><br><br><span class="tag"><a href="https://your-coaching-website.netlify.app/">View</a></span> <span class="tag"><a href="https://github.com/Pankajdas0025/">Code<i class="fa-solid fa-code"></i></a></span></div>
          </div>
        </article>
        <!-- Project 6 -->
         <article class="project-card" data-aos="fade-up" data-aos-delay="1200" data-type="tool" data-title="SpeedChecker" data-desc="A tiny web speed checker you can run locally for quick audits." data-tech="HTML, JS">
          <img src="images/key-code-generator.png" loading="lazy" alt="SpeedChecker screenshot">
          <div>
            <strong>Key code Tracker</strong>
            <div class="muted">Keybord key value </div>
            <div class="tags"><span class="tag">HTML, CSS</span><span class="tag">JS</span><br><br><span class="tag"><a href="https://github.com/Pankajdas0025/BasicProjects.git">View<i class="fa-solid fa-eye"></i></a></span> <span class="tag"><a href="https://github.com/Pankajdas0025/BasicProjects.git">Code<i class="fa-solid fa-code"></i></a></span></div>
          </div>
        </article>

      </div>
    </section>

    <!-- CERTIFICATIONS -->
    <section id="certs">
      <div class="section-head"><h3>Certifications</h3><small class="muted">— credentials & courses</small></div>
      <div class="certs">
        <div class="cert">

          <div>
            <strong>Web development Course</strong>
            <div class="muted">Issued by STP Computer Education — 2024</div>
          </div>
        </div>

        <div class="cert">
          <div>
            <strong>Generative AI</strong>
            <div class="muted">Issued by PHP Microsoft & LinkedIn — 2024</div>
          </div>
        </div>

        <div class="cert">
          <div>
            <strong>PHP & MySQL Internship</strong>
            <div class="muted">Issued by Apex Planet Pvt Ltd. — 2025</div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact">
      <div class="section-head"><h3>Contact</h3><small class="muted">— let's build something together</small></div>

      <div class="contact-grid" data-aos="fade-up">
        <div class="card">
  <form id="contactForm"  method="POST" action="">
  <input type="text" id="name" name="name" placeholder="Your name*" required />
  <input type="email" id="email" name="email" placeholder="Email address*" required />
  <input type="text" id="subject" name="subject" placeholder="Subject" />
  <textarea id="message" name="message" rows="6" placeholder="Write your message..." required></textarea>
  <button class="submit" type="submit">Send message</button>
  <div id="formerror" style="font-size:0.95rem; color:red; font-weight:600;"></div>
</form>

        </div>
        <aside class="card">
          <h4>Get in touch</h4>
          <p class="muted" style="font-size: 12px;">Prefer email? Send a mail to <strong>pankajkumardas8678@gmail.com</strong> or connect on LinkedIn / GitHub.</p>
          <div style="margin-top:12px;display:flex;gap:8px">
            <a class="btn" href="https://www.linkedin.com/in/pankaj-kumar-das-134603297"><i class="fa-brands fa-linkedin"></i></a>
            <a class="btn" href="https://github.com/Pankajdas0025"><i class="fa-brands fa-github"></i></a>
            <a class="btn" href="https://www.instagram.com/pankajdas_0025/"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </aside>
      </div>
    </section>

     <a id="whatsapp" href="https://wa.me/919155726625" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
    <img src="images/whatsapp-logo.png" alt="WhatsApp" style="width:28px;height:28px">
  </a>
  <button id="topBtn" aria-label="Scroll to top" title="Back to top"> <img src="images/Scrolltotop.png" alt="top" style="width:28px;height:28px"></button>

    <?php include "components/footer.php"; ?>
<script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
AOS.init({
  duration: 1000,
  once: true,
  offset: 120,
  easing: 'ease-in-out'
});
</script>



    </div>
</body>
</html>
