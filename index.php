<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Resume</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="css/font-awesome/css/all.min.css?ver=1.2.1" rel="stylesheet">
    <link href="css/mdb.min.css?ver=1.2.1" rel="stylesheet">
    <link href="css/aos.css?ver=1.2.1" rel="stylesheet">
    <link href="css/main.css?ver=1.2.1" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body class="bg-light" id="top">
    <header class="d-print-none">
      <div class="container text-center text-lg-left">
        <div class="pt-4 clearfix">
          <h1 class="site-title mb-0">Khuram Sakha</h1>
          <div class="site-nav"> 
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="#about" title="About"><span class="menu-title">About</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#skills" title="Skills"><span class="menu-title">Skills</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#experience" title="Experience"><span class="menu-title">Experience</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#contact" title="Contact"><span class="menu-title">Contact</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <div class="container">
      <hr>
          <?php 
              $Msg = "";
              if(isset($_GET['error']))
              {
                  $Msg = " Please Fill in the Blanks ";
                  echo '<div class="alert alert-danger">'.$Msg.'</div>';
              }

              if(isset($_GET['success']))
              {
                  $Msg = " Your Message Has Been Sent ";
                  echo '<div class="alert alert-success">'.$Msg.'</div>';
              }
          
          ?>
<div class="resume-container">
  <div class="shadow-1-strong bg-white my-5" id="intro">
    <div class="bg-info text-white">
      <div class="cover bg-image"><img src="images/header-background.jpg"/>
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);backdrop-filter: blur(2px);">
          <div class="text-center p-5">
            <div class="avatar p-1"><img class="img-thumbnail shadow-2-strong" src="images/avatar.png" width="160" height="160"/></div>
            <div class="header-bio mt-3">
              <div data-aos="zoom-in" data-aos-delay="0">
                <h2 class="h1">Khuram Sakha</h2>
                <p>Junior Software Developer</p>
              </div>
              <div class="header-social mb-3 d-print-none" data-aos="zoom-in" data-aos-delay="200">
                <nav role="navigation">
                  <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="d-print-none"><a class="btn btn-outline-light btn-lg shadow-sm mt-1 me-3" href="material-resume.pdf" data-aos="fade-right" data-aos-delay="700">Download CV</a><a class="btn btn-info btn-lg shadow-sm mt-1" href="#contact" data-aos="fade-left" data-aos-delay="700">Hire Me</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="about">
    <div class="about-section">
      <div class="row">
        <div class="col-md-6">
          <h2 class="h2 fw-light mb-4">About Me</h2>
          <p>An intelligent, well presented and adaptable individual. Possessing a comprehensive skill set underpinned by work experience in environments demanding self-motivation and a focused approach.
            Known for my excellent reputation in problem solving and communication skills.</p>
          <p>Also known for great leadership ability, able to work as a committed team player as well the ability to take initiative and work alone when the situation requires. Able to work under pressure providing an excellent customer service among clientele.</p>
        </div>
        <div class="col-md-5 offset-lg-1">
          <div class="row mt-2">
            <h2 class="h2 fw-light mb-4">Bio</h2>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="far fa-calendar-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Age</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">26</div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Email</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">khuram1995@live.com</div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fa fa-phone pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Phone</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">07931 778339</div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-map-marker-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Address</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">212 Kingscauseway,Lancashire, England, BB9 0HE</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="skills">
    <div class="skills-section">
      <h2 class="h2 fw-light mb-4">Professional Skills</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3"><span class="fw-bolder">HTML</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Master</div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">CSS</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">Expert</div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">JavaScript</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Advance</div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">Python</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Advance</div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3"><span class="fw-bolder">Linux</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Master</div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">MS Office</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Expert</div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">Qlik</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">Expert</div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">MySql</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Beginner</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="experience">
    <div class="work-experience-section">
      <h2 class="h2 fw-light mb-4">Work Experience</h2>
      <div class="timeline">
        <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="0">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">Junior Software Developer <span class="text-muted h6">at Supreme Finance </span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">12/2021 – Current</div>
            <li>Writing and repairing computer codes.</li>
            <li>Performing trials, testing and quality checks to ensure strong functionality.</li>
            <li>Leading software developments projects.</li>
            <li>Designing and updating software databases.</li>
            <li>Meeting with the development team to discuss client requirements.</li>
            <li>Maintaining, supporting services and improving the performance of existing software.</li>
          </div>
        </div>
        <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="200">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">Assistant Technical Officer<span class="text-muted h6"> at Royal Manchester Children’s Hospital</span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">03/2019 – November 23rd 2021</div>
            <li>Prepared and assembled parental nutrition and cytotoxic drugs.</li>
            <li>Helped senior members.</li>
            <li>Carried out administrative duties.</li>
            <li>Worked as part of a team to deliver medication to patient’s wards.</li>
            <li>Daily stock control/quality control, maintenance and placing orders where necessary.</li>
            <li>Given the responsibility to train and guide new members of staff.</li>
            <li>Communicated with customers – from nurses, doctors and procurement to senior management.</li>
            <li>Medicines Management. </li>
            <li>Drawing any problems identified or queries rose to the attention of pharmacists or pharmacy technicians.</li>
          </div>
        </div>
        <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="400">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">Junior Devops Engineer <span class="text-muted h6">at Adrac</span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">05/2017 - 03/2019</div>
            <li>Built web-based tools, micro services and tools.</li>
            <li>Understood how IT operations are managed.</li>
            <li>Understood how various systems work.</li>
            <li>Kept up-to-date with knowledge of the industry.</li>
            <li>Used various tools to orchestrate solutions.</li>
            <li>Wrote scripts and automation using Python/Java.</li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="contact">
    <div class="contant-section">
      <h2 class="h2 fw-light text mb-4">Contact</h2>
      <div class="row mb-4">
        <div class="col-md-5" data-aos="fade-left" data-aos-delay="200">
          <div class="mt-1">
            <div class="h6"><i class="fas fa-phone pe-2 text-muted" style="width:24px;opacity:0.85;"></i>07931 778339</div>
            <div class="h6"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i> khuram1995@live.com</div>
          </div>
          <div class="mt-5 d-print-none">
            <form action="process.php" method="post">
              <div class="form-outline mb-4">
                <input type="text" id="name" name="name" class="form-control" required/>
                <label class="form-label" for="name">Name</label>
              </div>
              <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control" required/>
                <label class="form-label" for="email">Email address</label>
              </div>
              <div class="form-outline mb-4">
                <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
                <label class="form-label" for="message">Message</label>
              </div>
              <button class="btn btn-info btn-block mb-4" name="btn-send" type="submit">Send</button>
            </form>
          </div>
        </div>
        <div class="col-md-7 d-print-none" data-aos="zoom-in" data-aos-delay="100"><iframe src="https://maps.google.com/maps?q=212%20Kingscauseway,%20%20%20%20%20%20%20Lancashire,%20England,%20BB9%200HE&t=&z=13&ie=UTF8&iwloc=&output=embed" width="500" height="400" style="border:0;width:100%;" allowfullscreen="" loading="lazy"></iframe></div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
      <div class="container">
        <div class="my-3">
          <div class="h4">Khuram Sakha</div>
          <div class="footer-nav">
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="text-small">
          <div class="mb-1">&copy; Material Resume. All rights reserved.</div>
          <div>Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
        </div>
      </div>
    </footer>
    <script src="scripts/mdb.min.js?ver=1.2.1"></script>
    <script src="scripts/aos.js?ver=1.2.1"></script>
    <script src="scripts/main.js?ver=1.2.1"></script>
  </body>
</html>