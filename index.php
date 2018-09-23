<?php

if(isset($_POST['name']))
{
    $name = $_POST['name'];
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
}

if(isset($_POST['message'])){
    $message = $_POST['message'];
}

if(isset($_POST['subject'])){
    $subject = $_POST['subject'];
}



          if (isset($_POST["submit"])) {

            $from = 'From: yetunde@yetundesolaadebayo.com';
            $to = 'ysolaadebayo@gmail.com'; 
    
             $body = "From: $name\n E-Mail: $email\n Message:\n $message";

             if (!$_POST["email"]) {
            
              echo "<script>alert('The email field is required');</script>";
            
			}
            
            if (!$_POST["name"]) {
              echo "<script>alert('The name field is required');</script>";
			}
        
        if (!$_POST["message"]) {
            
            echo "The content field is required.";
            
        }
        else{
			if (mail ($to, $subject, $body, $from)) { 
				 echo "<script>alert('Email sent successfully');</script>";
			} else { 
				echo "<script>alert('The email could not be sent');</script>";
			}
		}
	}
      
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="resources/img/y.png" />

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121421317-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-121421317-1');
    </script>
  
  <!-- Hotjar Tracking Code for https://yetundesolaadebayo.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:945072,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="HTML, CSS, HTML, PHP, JavaScript, Portfolio, Web developer, Resume, Job, Freelancer, Freelance Web developer, Yetunde Sola-Adebayo">
	<meta property="og:title" content="Yetunde Sola-Adebayo">
    <meta name="author" content="Yetunde Sola-Adebayo">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Web Developer seeking job opportunities">
    <meta property="og:description" content="Web Developer">
    <link rel="canonical" href="https://yetundesolaadebayo.com/">
    <meta property="og:url" content="https://yetundesolaadebayo.com/">
    <meta property="og:site_name" content="Yetunde Sola-Adebayo">
	<meta property="og:image" content="https://yetundesolaadebayo.com/resources/img/me.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="@yetunde_sola">
    <meta name="twitter:title" content="Yetunde Sola-Adebayo">
    <meta name="twitter:description" content="I am a self-taught web developer that has a degree in Computer Science. I am a fast learner, I learnt 3 languages in 3 months. I am passionate about my work and this allows be to be efficient.">
	<meta name="twitter:image" content="https://yetundesolaadebayo.com/resources/img/me.jpg">
    <meta name="twitter:image:alt" content="Yetunde Sola-Adebayo">
    
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="resources/stylesheets/header_footer.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="resources/stylesheets/index.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="resources/stylesheets/contactme.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <!-- <script src="main.js"></script> -->
</head>

<body>

    <div id="body_container">
        <main class="summary">

            <div class="container-fluid">

                <header>
                    <section id="navbar">
                        <i class="fa fa-bars" id="sidebarCollapse"></i>

                        <nav id="sidebar">
                            <ul class="list-unstyled components">

                                <li class="active">
                                    <a href="index.php">Home</a>
                                </li>

                                <li>
                                    <a href="projects.html">Projects</a>
                                </li>

                                <li>
                                    <a href="about.html">About</a>
                                </li>

                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>

                                <li id="resume">
                                    <a href="resume.pdf" target="_blank">Resume</a>
                                </li>

                            </ul>

                        </nav>
                    </section>

                        <img id="full_logo" src="resources/img/logo.png" alt="logo">

                </header>


                <section id="center">

                    <h1>Hello!</h1>
                    <h3>My name is Yetunde and I am currently a freelance web developer living in Houston, TX. I recently completed
                        a degree in Computer Science from the University of Houston and I am looking to take the next step
                        in my career</h3>
                    <h3>I have experience in both front-end and back-end</h3>

                    <div>
                        <a href="projects.html">
                            <button class="btn btn-secondary btn-lg btn-space">
                                Portfolio
                            </button>
                        </a>

                        <a href="contact.php">
                            <button class="btn btn-light btn-lg mobile_btn">
                                Get in touch
                            </button>
                        </a>
                    </div>

                </section>
            </div>
        </main>

        <section class="content">
            <section class="font">
                <div id="recent">
                    <a href="projects.html">
                        <h2>
                            <u>Recent Work</u>
                        </h2>
                    </a>

                    <section class="work">
                        <a href="https://www.shootbeta.com/">
                            <img src="resources/img/shoot.JPG" alt="shoot">
                        </a>
                        <p>Built the company website by transforming the design into code using front-end technology such as
                            HTML, CSS, JavaScript.</p>
                    </section>
                </div>

                <section class="skills">
                    <h2>
                        <u>Skills</u>
                    </h2>
                    <ul>
                        <li>Project Management</li>
                        <li>Professional Communication</li>
                        <li>Self-Starter</li>
                    </ul>

                    <section class="skill_grid">
                        <div class="purple">
                            <div class="lang">HTML</div>
                        </div>
                        <div class="purple">
                            <div class="lang">CSS</div>
                        </div>
                        <div class="purple">
                            <div class="lang">Bootstrap</div>
                        </div>
                        <div class="purple">
                            <div class="lang">JavaScript</div>
                        </div>
                        <div class="purple">
                            <div class="lang">Node.js</div>
                        </div>
                        <div class="purple">
                            <div class="lang">PHP</div>
                        </div>
                    </section>
                </section>

                <section class="contact_pad">
                    <section class="contact container-fluid">
                        <h2 id="contact_heading">
                            <u>Contact Me</u>
                        </h2>

                        <form method="POST" action="index.php">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea rows="10" class="form-control" name="message" placeholder="Type your message here"></textarea>
                            </div>

                            <div class="text-center">
                                <input type="submit" class="btn btn-light submit" name="submit" value="Submit">
                            </div>

                        </form>
                    </section>
                </section>
            </section>

    <footer>
        <a href="index.php" class="logo">
            <img src="resources/img/y.png" alt="logo">
        </a>

        <div class="list">
            <ul>
                <li>
                    <a href="https://github.com/Yetunde79">Github</a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/yetundeadebayo/">LinkedIn</a>
                </li>
                <li>
                    <a href="https://twitter.com/yetunde_sola?lang=en">Twitter</a>
                </li>
                <li>
                    <a href="https://medium.com/@ysolaadebayo">Medium</a>
                </li>
                <li>
                    <a href="https://codepen.io/yetty79/">Codepen</a>
                </li>

            </ul>

            <ul>
                <li>
                    <a href="index.php">HOME</a>
                </li>
                <li>
                    <a href="projects.html">PROJECTS</a>
                </li>
                <li>
                    <a href="about.html">ABOUT</a>
                </li>
                <li>
                    <a href="contact.php">CONTACT</a>
                </li>

                <li id="resume">
                    <a href="resume.pdf" target="_blank">RESUME</a>
                </li>

            </ul>
        </div>
        <p class="name"> &copy; Yetunde Sola-Adebayo</p>
    </footer>

        </section>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="resources/scripts/toggle.js"></script>

</body>

</html>