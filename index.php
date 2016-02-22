<?php

      require 'vendor/autoload.php';
  if ($_POST['submit']) {



      $mail = new PHPMailer;

      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
     // $email  = 'io.ammarr@gmail.com';
      $subject = 'Message my website';

      $feedback = false;

      //$mail->SMTPDebug = 1;                                   // Enable verbose debug output

      $mail->isSMTP();                                          // Set mailer to use SMTP
      $mail->Host = 'email-smtp.us-west-2.amazonaws.com'; // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                                   // Enable SMTP authentication
      $mail->Username = 'AKIAJMTHXRDIQOUGU2QA';                 // SMTP username
      $mail->Password = 'AhZKdDEi+kCyaMxtZsB+pRs91mMGTbifRav3vbsXdMzw';                           // SMTP password
      //$mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                        // TCP port to connect to

      $mail->setFrom("io.ammarr@gmail.com", $name);
      $mail->addAddress("io.ammarr@gmail.com", 'Ammar Mira');     // Add a recipient
      //$mail->addAddress('ellen@example.com');               // Name is optional
      $mail->addReplyTo($eamil, $name);
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

      //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      //$mail->isHTML(true);                                  // Set email format to HTML

      $mail->Subject = 'Message my website';
      $mail->Body    = "From: $name\n E-Mail: $email\n Message:\n $message";
      $mail->AltBody = $message;

      if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
          $bootClass = 'alert-danger';
          $feedback = '<p>Something went wrong, go back and try again!</p>';
      } else {
          $feedback = '<p>Your message has been sent!</p>';
          $bootClass = 'alert-success';
      }
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Diego - Responsive One Page Template">
    <link rel="icon" href="assets/images/favicon.png">
    <title>Ammar Mira - Creative front-end developer</title>

    <!-- Stylesheets -->

    <!-- Bootstrap -->
    <link href="assets/stylesheets/css/bootstrap/bootstrap.css" rel="stylesheet">

    <!-- font-awesome.css -->
    <link href="assets/stylesheets/css/fontawesome/font-awesome.css" rel="stylesheet">

    <!-- pe-icon.css -->
    <link href="assets/stylesheets/css/pe-icon/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/stylesheets/css/pe-icon/helper.css" rel="stylesheet">

    <!-- Animate.css -->
    <link href="assets/stylesheets/css/animate.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="assets/stylesheets/css/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/stylesheets/css/owl-carousel/owl.theme.css" rel="stylesheet">

    <!-- Slick -->
    <link href="assets/stylesheets/css/slick/slick.css" rel="stylesheet">
    <link href="assets/stylesheets/css/slick/slick-theme.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="assets/stylesheets/css/style.css" rel="stylesheet">
    <!-- <link href="assets/stylesheets/css/color-scheme.css" rel="stylesheet"> -->

    <!-- Font style live -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>

    <!-- Style Switcher -->
    <link href="assets/stylesheets/css/switcher/switcher.css" rel="stylesheet">
    <link href="assets/stylesheets/css/colors/green.css" id="switch_style" rel="stylesheet"/>

  </head>

  <body data-spy="scroll" data-target=".navbar-collapse" data-offset="80" class="slideshowbody">
    <div class="preloader">
      <div class="image-container">
        <div class="image"><img src="assets/images/preloader.gif" alt=""></div>
      </div>      
    </div>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#education">Experience</a></li>
            <li class="hidden"><a href="#news">Journal</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Banner Section Begin -->
    <section class="banner" id="home" style="background: url(assets/images/h.jpg) center; background-size: cover;">
      <div class="overlay"></div>
      <div class="banner-content">
        <div class="container">
          <div class="col-md-12">

              <?php if ( strlen($feedback)): ?>
                <div class="alert <?php echo $bootClass ?>" role="alert"> <?php echo $feedback?> </div>
              <?php endif ?>

            <div class="subtitle">
              <p>I Am Ammar Mira</p>
            </div>
            <div class="title">
              <h1 id="typed"></h1>
            </div>
             <div class="buttons">
              <a href="#about" class="def-btn">More About Me</a>
            </div>
            <div class="buttons">
              <a href="assets/files/MyResume.pdf" class="def-btn" target="_blank">Download Resume</a>
            </div>           
          </div>
        </div><!-- /.container -->

        <div class="scroll-info">
          <a href="#about">
            <div class="shape">
              <i class="fa fa-angle-down"></i>
            </div>
          </a>
        </div><!--/.scroll-info -->
      </div><!-- /.banner-content -->
    </section><!-- /.banner -->
    <!-- Banner Section End -->

    <!-- About Section Begin -->
    <section class="about" id="about">
      <div class="title section-title text-center">
        <div class="title-icon-container">
          <div class="title-icon"><i class="pe-7s-id pe-2x"></i></div>
        </div>
        <h1>Ammar Mira</h1>
        <h2>Front-End Web Developer</h2>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="center">
              <div class="img-relative photo">
                <img alt="My Photo" src="assets/images/me.jpg">
              </div>
              <div class="img-relative photo">
                <img alt="My Photo" src="assets/images/me2.jpg">
              </div>
              <div class="img-relative photo">
                <img alt="My Photo" src="assets/images/me3.jpg">
              </div>
              <div class="img-relative photo">
                <img alt="My Photo" src="assets/images/me4.jpg">
              </div>
            </div>

            <div class="description">
              <div class="text">
                <p><small><small title="HELLO">MARHABA</small> —</small> I'm Ammar and I'm front-end developer living and working in California, United States. I work with a range of clients to help build front-end prototypes, style guides and websites. I'm a completely self taught developer. When I'm not coding, you'll find me in the gym or you'll find me arguing with my team which restaurant to go. <a href="http://urteam.io/" target="_blank"> MEET MY TEAM</a>
                </p>
              </div>
            </div>

            <div class="more">
              <ul class="scroll-info">
                <li><a href="assets/files/MyResume.pdf"><i class="pe-7s-cloud-download pe-2x pe-va"></i>  Download Resume</a></li> 
                <li><a href="#contact"><i class="pe-7s-phone pe-2x pe-va"></i>Contact Me</a></li>
              </ul>
            </div>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.features -->
    <!-- About section End -->
    
    <!-- Counter Section Begin-->
    <section class="counter" style="background: url(assets/images/desk-bg.jpg) center; background-size: cover; background-attachment: fixed;">
      <div class="overlay"></div>
      <div class="container content">
        <div class="row">
          <div class="col-sm-3">
            <div class="icon"><i class="pe-7s-clock pe-4x"></i></div>
            <h3 class="timer" data-to="1500" data-speed="3000" data-from="0">1500</h3>        
            <h4>Hours Of Work</h4>
          </div>
          <div class="col-sm-3">
            <div class="icon"><i class="pe-7s-coffee pe-4x"></i></div>
            <h3 class="timer" data-to="45" data-speed="3000" data-from="0">45</h3>
            <h4>Cups of Coffee</h4>
          </div>
          <div class="col-sm-3">
            <div class="icon"><i class="pe-7s-rocket pe-4x"></i></div>
            <h3 class="timer" data-to="178" data-speed="3000" data-from="0">178</h3>
            <h4>Project Done</h4>
          </div>
          <div class="col-sm-3">
            <div class="icon"><i class="pe-7s-add-user"></i></div>
            <h3 class="timer" data-to="9" data-speed="3000" data-from="0">9</h3>
            <h4>Clients Worked</h4>
          </div>
        </div>      
      </div>
    </section><!--/.timer -->
    <!-- Counter Section End -->
  
    <!--Portfolio Section Begin -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="title section-title text-center wow animated fadeIn">
          <div class="title-icon-container">
            <div class="title-icon"><i class="pe-7s-rocket pe-2x pe-va"></i></div>
          </div>
          <h1>My Portfolio</h1>
          <h2>Front-End Developer</h2>
        </div>
        <div class="description">
          <p>With HTML5, SVG, CSS and JavaScript as my tools, I build website front-ends focusing on performance, responsiveness and usability.</p>
        </div>
      </div>

      <div class="container">
        <div class="portfoliocontent">

            <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
            <a target="_blank" href="https://github.com/AmmarMira/WeddingPhotography">
              <div class="content">
                <div class="overlay">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Wedding Photography</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">Jan 2016</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="assets/images/WEDDINGPHOTOGRAPHY.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->           

           <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
            <a target="_blank" href="http://folsompizzaandkabob.com/">
              <div class="content">
                <div class="overlay">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Folsom Pizza and Kabob</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">Dec 2015</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="assets/images/FolsomPizzaAndKabob.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->         

          <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
            <a target="_blank" href="http://ammarmira.com/">
              <div class="content">
                <div class="overlay">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Ammar Mira</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">Nov 2015</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="assets/images/work1.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdevelopment">
            <a target="_blank" href="http://urteam.io/">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">UrTeam</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">Oct 2015</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="assets/images/work2.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
            <a target="_blank" href="https://github.com/AmmarMira/issueStand">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">IssueStand</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">May 2015</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="assets/images/work3.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdevelopment">
            <a target="_blank" href="http://codepen.io/ammar_mira/pen/wBejMx">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Questions-and-discussions</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">March 2015</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="assets/images/work4.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
            <a target="_blank" href="http://codepen.io/ammar_mira/pen/jEmEgV">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Mini Profile Overview</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">Dec 2014</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="assets/images/work5.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class=" hidden item col-md-4 col-sm-6 col-xs-12 webdevelopment">
            <a target="_blank" href="portfolio-single.html">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Nice Shirt Design</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">2 Mar 2015</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="assets/images/work6.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->
        </div><!--/.portfoliocontent -->
      </div><!--/.container -->
      
      <div class="container hidden">
        <div class="col-md-12">
          <div class="show-more text-center">
            <a href="portfolio-list.html" class="def-btn">Show More</a>
          </div>
        </div>
      </div>

    </section><!--/.portfolio -->
    <!-- Portfolio Section End -->


    <!-- Testimonial Section Begin-->
    <section class="testimonial text-center" id="testimonial" style="background: url(assets/images/desk-bg.jpg) center; background-size: cover; background-attachment: fixed;">
      <div class="overlay"></div>
      <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
        <div class="container">
          <div class="carousel-inner">
            <div class="item">
              <div class="photo">
                <img src="assets/images/person1.jpg" alt="Testimonial">
              </div>
              <div class="text">
                "Ammar worked for me at Internet Marketing Bar. He was a junior front-end developer who was excellent at taking an image of a design and turning it into CSS and HTML that could be used in our web products. He came in being very new to web development but he already knew a lot and continued to learn very quickly the entire time he worked for me. I recommend Ammar to employers seeking to hire a junior front-end developer. He is a hard worker and works well with a team."
              </div>
              <div class="separator-container">
                <div class="separator"><div class="shape"></div></div>
              </div>
              <div class="name">
                <span class="textbold">Todd Nestor</span>, Web Developer Supervisor at Internet Marketing Bar
              </div>
            </div><!--/.item -->

            <div class="item active">
              <div class="photo">
                <img src="assets/images/person2.jpg" alt="Testimonial">
              </div>
              <div class="text">
                "Ammar worked with us at IMB as a junior front-end developer. He had a phenomenal attitude, solid work ethic, and was a brilliantly quick learner. Whoever's lucky enough to nab him next is in for a treat : )"
              </div>
              <div class="separator-container">
                <div class="separator"><div class="shape"></div></div>
              </div>
              <div class="name">
                <span class="textbold">John Razmus</span>, Chief Technology Officer at Internet Marketing Bar
              </div>
            </div><!--/.item -->

             <div class="item">
              <div class="photo">
                <img src="assets/images/person3.jpg" alt="Testimonial">
              </div>
              <div class="text">
                "[Ammar] is an incredibly knowledgeable and diligent developer. He captured the spirit of our company brilliantly. Anyone would be fortunate to work with him."
              </div>
              <div class="separator-container">
                <div class="separator"><div class="shape"></div></div>
              </div>
              <div class="name">
                <span class="textbold">Husam Alrubaye</span>, UX UI Designer & Front-End Developer at SBM Management Services
              </div>
            </div><!--/.item -->           
          </div><!--/.carousel-inner -->
        </div><!--/.container -->

        <!-- Controls -->
        <a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev" data-wow-delay="1s">
          <div class="control-circle left"><i class="fa fa-angle-left"></i></div>
        </a>
        <a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next" data-wow-delay="1s">
          <div class="control-circle right"><i class="fa fa-angle-right"></i></div>
        </a>
      </div><!--/.testimonial-carousel -->
    </section><!--/.testimonial -->
    <!-- Testimonial Section End-->

    <!-- Why Choose Me Section Begin  -->
    <section class="why-me" id="why-me">
      <div class="container">
        
        <div class="col-md-6 text">
          <div class="title"><h1>Why hire me ?</h1></div>
          <div class="tagline">
            <p>Few Strong points from My Skill Set :</p>
          </div>
          <div class="description">
            <p> -Hands on experience in HTML5 , CSS3 and Bootstrap. <br>
                -create responsive websites from the ground up using CSS media queries. <br>
                -working with developers for resolving front end and CSS issues. <br>
                -Ability of Writing Hand Code. <br>
                -Experience in working with Java script and Jquery.</p>
          </div>
        </div><!--/.text -->

        <div class="col-md-6 skills">
          <div class="title">
            <h3>I am good at</h3>
          </div>
          <div class="skillbars">
            <div class="bar-container">
              <p><i class="icon-pencil pi-icon-left"></i>HTML CSS3</p>
              <div class="meter wow animated fadeInLeft" style="width: 90%"></div>
            </div>
            <div class="bar-container">
              <p><i class="icon-pencil pi-icon-left"></i>Photoshop</p>
              <div class="meter wow animated fadeInLeft" style="width: 40%"></div>
            </div>
            <div class="bar-container">
              <p><i class="icon-pencil pi-icon-left"></i>Ilustrator</p>
              <div class="meter wow animated fadeInLeft" style="width: 37%"></div>
            </div>
            <div class="bar-container">
              <p><i class="icon-pencil pi-icon-left"></i>Java Script</p>
              <div class="meter wow animated fadeInLeft" style="width: 50%"></div>
            </div>
          </div>
        </div><!--/.skills -->
      </div><!--/.container -->
    </section><!--/.why-me -->
    <!-- Why Choose Me Section End  -->

    <!-- Education section Begin  -->
    <section class="education" id="education">
      <div class="title section-title bg-section text-center bottom-shape wow animated fadeIn">
        <div class="title-icon-container">
          <div class="title-icon"><i class="pe-7s-study pe-2x pe-va"></i></div>
        </div>
        <h1>My Education</h1>
        <h2 class="hidden">Lorem ipsum dolor</h2>
      </div>
        
      <div class="container">
        <div class="timeline-container">
          
          <ul class="timeline">
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2014</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-study pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>Web Development</h3>
                <span class="place textbold">Self-Educated</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </li>
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2013</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-study pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>Information Technology</h3>
                <span class="place textbold">Jordan High School</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </li>
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2011</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-study pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>Adobe Photoshop Certificate</h3>
                <span class="place textbold">IRD</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </li>              
          </ul><!--/.timeline -->
        </div><!--/.timeline-container -->
      </div><!--/.container -->
    </section><!--/.education -->
    <!-- Education section End  -->

    <!-- Employment section Begin  -->
    <section class="employment">
      <div class="title section-title bg-section text-center bottom-shape wow animated fadeIn">
        <div class="title-icon-container">
          <div class="title-icon"><i class="pe-7s-portfolio pe-2x pe-va"></i></div>
        </div>
        <h1>My Experience</h1>
        <h2 class="hidden">Lorem ipsum dolor</h2>
      </div>
        
      <div class="container">
        <div class="timeline-container">
          
          <ul class="timeline">
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2016</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-portfolio pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>Front-End Developer</h3>
                <span class="place textbold">HUSAMUI</span>
                <p>-Build websites using HTML5, CSS3 / SCSS, jQuery, Node.js and WordPress. <br>
                  -Turn design pages,logos and websites into code. <br>
                  -debugging front end issues.</p>
              </div>
            </li>
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2015</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-portfolio pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>Jr. Front-End Web Developer</h3>
                <span class="place textbold">Internet Marketing Bar</span>
                <p>Working with my design team to bring designs to convert their designs into fast, responsive and interactive websites and/or applications. Also working with my developers team for resolving front end and CSS issues.</p>
              </div>
            </li>
            <li class="hidden">
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2014</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-portfolio pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>iPhone Technician and Trainer</h3>
                <span class="place textbold">Apple</span>
                <p>-Mange, Qualify and Train all new employees. <br>
                -doing the installation, integration/testing, and troubleshooting of the iPhone. <br>
                -Fix evry damge phone.
              </div>
            </li>
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2012</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-portfolio pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>IT Technician</h3>
                <span class="place textbold">Compu-Hub</span>
               <p>Formatting (DOD) and reimaging the laptops, Check the performs of the computer such as hardware (Network ports, USB ports, etc), Installing hardware and software systems, testing the operating system, Maintaining or repairing the equipment, Troubleshooting a variety of computer issues, Setting up computer security measures and configuring computer networks.</p>
            </li>
          </ul><!--/.timeline -->
        </div><!--/.timeline-container -->
      </div><!--/.container -->
    </section>
    <!-- Education section End  -->

    <!-- Pricing Section Start  -->
    <section class="pricing hidden" id="pricing">
      <div class="container">
        <div class="title section-title text-center wow animated fadeIn">
          <div class="title-icon-container">
            <div class="title-icon"><i class="pe-7s-news-paper pe-2x pe-va"></i></div>
          </div>
          <h1>Pricing Table</h1>
          <h2>My Work Rate</h2>
        </div>

        <div class="description">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="pricing-table wow animated fadeInUp" data-wow-delay="0.2s">
            <div class="header"></div>
            <div class="price">
              <div class="pricetext"><h3>Starter</h3><span class="textbold">$5</span> / hours</div>
            </div>
            <div class="list">
              <ul>
                <li><span class="textbold">Up to</span> 5 Users</li>
                <li><span class="textbold">Max</span> 100 items</li>
                <li><span class="textbold">Unlimited</span> QueriesFull</li>
                <li><span class="textbold">Statistics</span></li>
                <li><span class="textbold">Great</span> Support</li>
              </ul>
              <a href="#" class="def-btn">Get This Plan</a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="pricing-table wow animated fadeInUp" data-wow-delay="0.4s">
            <div class="price">
              <div class="pricetext"><h3>Medium</h3><span class="textbold">$5</span> / hours</div>
            </div>
            <div class="list">
              <ul>
                <li><span class="textbold">Up to</span> 5 Users</li>
                <li><span class="textbold">Max</span> 100 items</li>
                <li><span class="textbold">Unlimited</span> QueriesFull</li>
                <li><span class="textbold">Statistics</span></li>
                <li><span class="textbold">Great</span> Support</li>
              </ul>
              <a href="#" class="def-btn">Get This Plan</a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="pricing-table active wow animated fadeInUp" data-wow-delay="0.6s">
            <div class="price">
              <div class="pricetext"><h3>Business</h3><span class="textbold">$5</span> / hours</div>
            </div>
            <div class="list">
              <ul>
                <li><span class="textbold">Up to</span> 5 Users</li>
                <li><span class="textbold">Max</span> 100 items</li>
                <li><span class="textbold">Unlimited</span> QueriesFull</li>
                <li><span class="textbold">Statistics</span></li>
                <li><span class="textbold">Great</span> Support</li>
                <li><span class="textbold">Agile</span> Work</li>
              </ul>
              <a href="#" class="def-btn">Get This Plan</a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="pricing-table wow animated fadeInUp" data-wow-delay="0.8s">
            <div class="price">
              <div class="pricetext"><h3>Pro</h3><span class="textbold">$5</span> / hours</div>
            </div>
            <div class="list">
              <ul>
                <li><span class="textbold">Up to</span> 5 Users</li>
                <li><span class="textbold">Max</span> 100 items</li>
                <li><span class="textbold">Unlimited</span> QueriesFull</li>
                <li><span class="textbold">Statistics</span></li>
                <li><span class="textbold">Great</span> Support</li>
              </ul>
              <a href="#" class="def-btn">Get This Plan</a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Pricing Section End  -->

    <!-- Twitter-Feed Section Begin  -->
    <section class="twitter-feed" style="background: url(assets/images/banner4.jpg) center; background-size: cover; background-attachment: fixed;">
      <div class="overlay"></div>
      <div class="logo-container"><div class="logo"><i class="fa fa-twitter"></i></div></div>
      <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
        <div class="container">
          <div class="carousel-inner">
            <div class="item active">
              <div class="tweet">
                <p>" Your words mean nothing when your actions are the opposite. "</p>
              </div>
            </div><!--/.item -->
            <div class="item">
              <div class="tweet">
                <p>" Never stop moving towards where you want to be"</p>
              </div>
            </div><!--/.item -->
          </div><!--/.carousel-inner -->
          <div class="time">3 Days Ago From <a href="https://twitter.com/ammar_io">@ammar_io</a></div>
        </div><!--/.container -->
      </div><!--/.twitter-carousel -->
    </section><!--/.twitter-feed -->
    <!-- Twitter-Feed Section End  -->

    <!-- Journal Section Begin  -->
    <section class="journal bg-section hidden" id="news">
      <div class="container">
        <div class="title section-title text-center wow animated fadeIn">
          <div class="title-icon-container">
            <div class="title-icon"><i class="pe-7s-news-paper pe-2x pe-va"></i></div>
          </div>
          <h1>My Journal</h1>
          <h2>Stay up to date</h2>
        </div>

        <div class="description">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
        </div>
        
        <div id="masonry-container">
          <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-pen"></i></div></div>
                <div class="title"><a href="journal-single.html"><h3>Lorem Ipsum dolor sit amet</h3></a></div>
                <div class="info">
                  <i class="pe-7s-user"></i><a href="#">Administrator</a> <i class="pe-7s-photo"></i> <a href="#">Freebies</a> <i class="pe-7s-comment"></i> <a href="#">3 Comments</a>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="post-date">12 August, 2014</div>
              </div>
            </div>
          </article>
          
          <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
              <div class="media">
                <img src="assets/images/news1.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-photo"></i></div></div>
                <div class="title"><a href="journal-single.html"><h3>Lorem Ipsum dolor sit amet</h3></a></div>
                <div class="info">
                  <i class="pe-7s-user"></i><a href="#">Administrator</a> <i class="pe-7s-ticket"></i> <a href="#">Freebies</a> <i class="pe-7s-comment"></i> <a href="#">3 Comments</a>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="post-date">12 Aug</div>
              </div>
            </div>
          </article>

           <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-pen"></i></div></div>
                <div class="title"><a href="journal-single.html"><h3>Lorem Ipsum dolor sit amet</h3></a></div>
                <div class="info">
                  <i class="pe-7s-user"></i><a href="#">Administrator</a> <i class="pe-7s-ticket"></i> <a href="#">Freebies</a> <i class="pe-7s-comment"></i> <a href="#">3 Comments</a>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="post-date">12 Aug</div>
              </div>
            </div>
          </article>

          <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
              <div class="media">
                <img src="assets/images/news2.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-photo"></i></div></div>
                <div class="title"><a href="journal-single.html"><h3>Lorem Ipsum dolor sit amet</h3></a></div>
                <div class="info">
                  <i class="pe-7s-user"></i><a href="#">Administrator</a> <i class="pe-7s-ticket"></i> <a href="#">Freebies</a> <i class="pe-7s-comment"></i> <a href="#">3 Comments</a>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="post-date">12 Aug</div>
              </div>
            </div>
          </article>

          <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-pen"></i></div></div>
                <div class="title"><a href="journal-single.html"><h3>Lorem Ipsum dolor sit amet</h3></a></div>
                <div class="info">
                  <i class="pe-7s-user"></i><a href="#">Administrator</a> <i class="pe-7s-ticket"></i> <a href="#">Freebies</a> <i class="pe-7s-comment"></i> <a href="#">3 Comments</a>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="post-date">12 Aug</div>
              </div>
            </div>
          </article>

          <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
              <div class="media">
                <div class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit  incididunt</div>
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-note"></i></div></div>
                <div class="title"><a href="journal-single.html"><h3>Lorem Ipsum dolor sit amet</h3></a></div>
                <div class="info">
                  <i class="pe-7s-user"></i><a href="#">Administrator</a> <i class="pe-7s-ticket"></i> <a href="#">Freebies</a> <i class="pe-7s-comment"></i> <a href="#">3 Comments</a>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="post-date">12 Aug</div>
              </div>
            </div>
          </article>
          
        </div><!--/#masonry-container -->
      </div><!--/.container -->

      <div class="container">
        <div class="col-md-12">
          <div class="show-more text-center">
            <a href="journal-list.html" class="def-btn">Show More</a>
          </div>
        </div>
      </div>

    </section><!--/.journal -->
    <!-- Journal Section End  -->

    <!-- Clients Section Begin  -->
    <section class="clients">
      <div class="container">
        <div class="title section-title text-center wow animated fadeIn">
          <div class="title-icon-container">
            <div class="title-icon"><i class="pe-7s-rocket pe-2x pe-va"></i></div>
          </div>
          <h1>Some Clients</h1>
          <h2>Who turst me</h2>
        </div>

        <div class="description">
          <p>Some clients I've worked with:</p>
        </div>

        <div id="clients" class="clients-logo owl-theme wow animated fadeIn">
          <div class="item">
            <a target="_blank" href="http://internetmarketingbar.com/"><img src="assets/images/client1.png" alt="clients"></a>
          </div>
          <div class="item">
            <a target="_blank" href="http://husamui.com/"><img src="assets/images/client2.png" alt="clients"></a>
          </div>
          <div class="item">
            <a target="_blank" href="#"><img src="assets/images/client3.png" alt="clients"></a>
          </div>
          <div class="item">
            <a target="_blank" href="http://urteam.io/"><img src="assets/images/client4.png" alt="clients"></a>
          </div>
          <div class="item">
            <a target="_blank" href="http://www.maljweb.com/"><img src="assets/images/client5.png" alt="clients"></a>
          </div>
          <div class="item">
            <a target="_blank" href="http://haidarsalem.com/"><img src="assets/images/client6.png" alt="clients"></a>
          </div>
          <div class="item">
            <a target="_blank" href="http://alyounis.com/"><img src="assets/images/client7.png" alt="clients"></a>
          </div>
          <div class="item hidden">
            <a target="_blank" href="#"><img src="assets/images/client8.png" alt="clients"></a>
          </div>
        </div>
      </div><!--/.container -->
    </section><!--/.clients -->
    <!-- Clients Section End  -->

    <!-- Map Section Begin  -->
    <section class="map">
      <div class="map-title">
        <div class="container">
          <h1><span class="textbold">Visit me</span> for some coffee</h1>
        </div>
      </div>
      <div class="map-canvas" id="map-canvas"></div>
    </section>
    <!-- Map Section End  -->

    <!-- Contact Section Begin  -->
    <section class="contact" id="contact">
      <div class="container"> 
        <div class="title section-title text-center wow animated fadeIn">
          <div class="title-icon-container">
            <div class="title-icon"><i class="pe-7s-phone pe-2x pe-va"></i></div>
          </div>
          <h1>Get in touch</h1>
          <h2>Whith me</h2>
        </div>

        <div class="description">
          <p>
            LET'S MAKE SOMETHING AWESOME TOGETHER.<br/>
          </p>
        </div>    

        <div class="col-md-8 col-md-offset-2">
          <div class="footer-form">
            <form role="form" action="index.php" method="post">
              <div class="col-md-12 input-container wow animated fadeInUp" data-wow-delay="0.2s">
                <input type="text" class="form-control" placeholder="Name" name="name" id="name">
              </div>
              <div class="col-md-12 input-container wow animated fadeInUp" data-wow-delay="0.2s">
                <input type="text" class="form-control" placeholder="Email" name="email" id="email">
              </div>
              <div class="col-md-12 textarea-container wow animated fadeInUp" data-wow-delay="0.2s">
                <textarea class="form-control" placeholder="Your Message Here" name="message" id="message"></textarea>
              </div>
              <div class="col-md-12 button-container wow animated fadeInUp" data-wow-delay="0.2s">
                <input type="submit" name="submit" class="submit-btn def-btn" value="Send Message">
              </div>
            </form>
          </div><!--/.footer-form -->
        </div>
        
      </div>
    </section>
    <!-- Contact Section End  -->

    <!-- Footer Section Begin  -->
    <section class="footer">
      <div class="container">
        <div class="top-text">Follow Me</div>
        <div class="col-md-12 col-sm-12 links">
          <ul>
            <li class="social-icons">
              <a target="_blank" href="https://www.facebook.com/profile.php?id=100000917910124" data-toggle="tooltip" title="Some tooltip text!">
                <div class="circle">
                  <i class="fa fa-facebook"></i>
                </div>
              </a>
              <a target="_blank" href="https://twitter.com/ammar_io">
                <div class="circle">
                  <i class="fa fa-twitter"></i>
                </div>
              </a>
              <a target="_blank" href="https://www.linkedin.com/in/ammarmira">
                <div class="circle">
                  <i class="fa fa-linkedin"></i>
                </div>
              </a>
              <a target="_blank" href="https://instagram.com/_ammarmira_/">
                <div class="circle">
                  <i class="fa fa-instagram"></i>
                </div>
              </a>
              <a target="_blank" href="https://www.youtube.com/channel/UCzsDj-xnb_lftYga7NOo0Jg">
                <div class="circle">
                  <i class="fa fa-youtube"></i>
                </div>
              </a>    
               <a target="_blank" href="http://codepen.io/ammar_mira">
                <div class="circle">
                  <i class="fa fa-codepen"></i>
                </div>
              </a>                                      
            </li>
          </ul>
        </div>

        <div class="col-md-12 col-sm-12 copyright">
          <h6>&copy; Ammar Mira 2015</h6>
        </div>       
      </div><!--/.container -->
    </section>
    <!-- Footer Section End  -->

    <!-- JavaScripts -->
    <script src="assets/javascripts/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="assets/javascripts/bootstrap.min.js"></script>
    <script src="assets/javascripts/typed.min.js"></script>
    <script src="assets/javascripts/jquery.parallax-1.1.3.js"></script>
    <script src="assets/javascripts/owl.carousel.js"></script>
    <script src="assets/javascripts/isotope.pkgd.min.js"></script>
    <script src="assets/javascripts/jquery.countTo.js"></script>
    <script src="assets/javascripts/wow.min.js"></script>
    <script src="assets/javascripts/slick.js"></script>
    <script src="assets/javascripts/jquery.appear.min.js"></script>
    <script src="assets/javascripts/masonry.pkgd.min.js"></script>
    <script src="assets/javascripts/custom-map.js"></script>
    <script src="assets/javascripts/custom.js"></script>

  </body>
</html>
