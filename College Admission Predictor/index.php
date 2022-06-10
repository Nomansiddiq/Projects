  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>CLG Admission</title>
  </head>

  <body>
    <!-- Header -->
    <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="#hero">
              <h1><span>C</span>ollege <span>A</span>dmission <span>P</span>redictor</h1>
            </a>
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
            <ul>
              <!-- <li><a href="#hero" data-after="Home">Home</a></li> -->
              <li><a href="#about" data-after="About">About us</a></li>
              <li><a href="#projects" data-after="Projects">Our Vision</a></li>
              <li><a href="#services" data-after="Service">Services</a></li>
              <li><a href="#contact" data-after="Contact">Contact</a></li>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
     
    <!-- End Header -->

    <!-- Hero Section  -->
    <section id="hero">
      <div class="hero container">
        <div class="brand_">
          <h1>Knowledge is <span></span></h1>
          <h1><span></span></h1>
          <h1>Power<span></span></h1>
          <a href="#p" type="button" class="cta">Welcome</a>
        </div>
      </div>
      <div class="center">
        <h2>Login</h2>
        <form action="RecommendedDetail.php" method="post">
          <div class="txt_field">



            <input type="email" name="Email" required>
            <span></span>
            <label>Email</label>
          </div>
          <div class="txt_field">
            <input type="password" name="password" required>
            <span></span>
            <label>Password</label>
          </div>
          <!-- <div class="pass">Forgot Password?</div> -->
          <input type="submit" name="login" value="Login">
          <div class="signup_link">
            Not a member? <a href="registerStudent.php">Signup</a>
          </div>
        </form>
      </div>
    </section>
    <!-- End Hero Section  -->

     <!-- About Section -->
     <section id="about">
      <div class="about container">
        <div class="col-left">
          <div class="about-img">
            <img src="./img/logo.png" alt="img" />
          </div>
        </div>
        <div class="col-right">
          <h1 class="section-title">About <span>US</span></h1>
          <p style="font-size: 15px">The University Prediction System consists of a smart list generator working together with the help of University predictor, to aid students in the admission process. We uses historical Universties cut-off students admission data for predicting the most probable colleges. The system analyzes student academic merits, background, and college/University admission criteria. Based on that, it predicts the likelihood of a university college that a student may enter.<span id="dots">...</span><span id="more">The smart list generator would enable the student to prepare the list of colleges, which could be needed to be filled in during the admission process. The system would also get feedback from the users, which would prove helpful for prediction evaluation and improving the performance factor.</span></p>

          <button class="cta" onclick="myFunction()" id="myBtn">Read more</button>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- Vision Section -->
    <section id="projects">
      <div class="projects container">
        <div class="projects-header">
          <h1 class="section-title">OUR <span>Vision</span></h1>
        </div>
        <div class="all-projects">
          <div class="project-item">
            <div class="project-info">
              <p style="font-size: 17px">
                Our Vision is to help each and every students in achieving their goals
                and help them to get and equal chance to have top quality education in Prestigious
                universities across the Country. Our Mission independent perspective is to helps students get to the nuts and bolts of what's important when making decisions for their future. We accomplish this standard through close collaboration between our staff and with Colleges and Universities.
                Our vision is to help students get access to high-quality education, thus fulfilling their dreams and aspirations of attaining higher education overseas on a budget. We thrive to become a leading provider of education and employment options to seekers in any industry, worldwide.
              </p>
            </div>
            
          </div>
          
        </div>
      </div>
    </section>
    <!-- End Vision Section -->

    <!-- Certificates Section -->
    <section id="services">
      <div class="services container">
        <div class="service-top">
          <h1 class="section-title">
            Univ<span>ersi</span>ties <span>We</span> Reco<span>mm</span>end
          </h1>
          <p style="font-size: 17px">
            We always Recommended the High rated Ranked Universities to the
            students.
          </p>
        </div>
        <div class="service-bottom">
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>FAST NUCES</h2>
            <p style="font-size: 15px">
              Fast is currently placed at 351 (improved 150 positions from last
              year's rankings) in QS University Rankings (ASIA). click here to
              view. If we talk about national rankings, FAST is placed at 2nd
              position in the Computer Science and IT category.
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>NUST</h2>
            <p style="font-size: 15px">
              It also merits mention that NUST currently stands at 358th in the
              World University Rankings, 74th in Asia University Rankings and
              41st in Young University Rankings, besides being number 1 in
              Pakistan in all above-mentioned categories.
            </p>
          </div>

          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>GIKI</h2>
            <p style="font-size: 15px">
              According to the QS World University Rankings 2021, LUMS has
              improved its position and is now ranked among 2951 top
              institutions of the world. Also its continential Ranking is 894
              and COuntry Ranking is 32. And it Got result of Excellence to
              2507.
            </p>
          </div>

          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>LUMS</h2>
            <p style="font-size: 15px">
              According to the QS World University Rankings 2021, LUMS has
              improved its position and is now ranked among 651-700 top
              institutions of the world. For the past seven years, LUMS was
              ranked among 701-750 top institutions, and the University is
              gaining global prominence.
            </p>
          </div>

         
        </div>
      </div>
    </section>
    <!-- End Service Section -->

 
   

    <!-- Contact Section -->
    <section id="contact">
      <div class="contact container">
        <div>
          <h1 class="section-title">Contact <span>info</span></h1>
        </div>
        <div class="contact-items">
          <div class="contact-item">
            <div class="icon">
              <img src="https://img.icons8.com/bubbles/100/000000/phone.png" />
            </div>
            <div class="contact-info">
              <h1>Phone</h1>
              <h2 style="font-size:15px;">+92 91798764</h2>
            </div>
          </div>
          <div class="contact-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/new-post.png"
              />
            </div>
            <div class="contact-info">
              <h1>Email</h1>
              <h2 style="font-size:15px;">Addmission@gmail.com</h2>
            </div>
          </div>
          <div class="contact-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/map-marker.png"
              />
            </div>
            <div class="contact-info">
              <h1>Address</h1>
              <h2 style="font-size:15px;">Lahore, Pakistan</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

    <!-- Footer -->
    <section id="footer">
      <div class="footer container">
        <div class="brand">
          <h1><span>C</span>ollege <span>A</span>dmission <span>P</span>redictor</h1>
        </div>
        <h2>Your Complete University Admission Guide</h2>
        <div class="social-icon">
          <div class="social-item">
            <a href="#" target="_blank"
              ><img
                src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" width="1000"
            /></a>
          </div>
          <div class="social-item">
            <a href="#" target="_blank"
              ><img
                src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"
            /></a>
          </div>
          <div class="social-item">
            <a href="#" target="_blank"
              ><img
                src="https://img.icons8.com/bubbles/100/000000/linkedin.png"
            /></a>
          </div>
          
        </div>
        <p>Copyright © 2022. All rights reserved</p>
      </div>
    </section>
    <!-- End Footer -->
    <script src="./app.js"></script>
  </body>
</html>
