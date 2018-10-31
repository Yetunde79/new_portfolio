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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121421317-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-121421317-1');
    </script>

    <!-- Hotjar Tracking Code for https://yetundesolaadebayo.com/ -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 945072, hjsv: 6 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>


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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark remove">
	<a class="navbar-brand" href="index.php"> <img class="logo" src="resources/img/logo.png" height="40"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbar1">
    <ul class="navbar-nav ml-auto"> 
        <li class="nav-item active">
        <a class="nav-link" href="http://bootstrap-ecommerce.com">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
        <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
        <li class="nav-item"><a class="nav-link" href="#"> Contact </a></li>
        <li class="nav-item"><a class="nav-link" href="#"> Resume </a></li>
    </ul>
  </div>
</nav>

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
                                    <a href="about.php">About</a>
                                </li>

                                <li>
                                <a href="services.php">Services</a>
                            </li>

                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>

                                <li>
                                    <a href="resume.pdf" target="_blank">Resume</a>
                                </li>

                            </ul>

                        </nav>
                    </section>

                    <a href="index.php"><img id="full_logo" src="resources/img/logo.png" alt="logo"></a>

                </header>

 

                <section id="center">

                    <h1>Hello!</h1>
                    <h3>My name is Yetunde and I am currently a freelance JavaScript and PHP(WordPress) developer with a BSc. in Computer Science. I love helping businesses big or small, and I look forward to helping your business.</h3>
                    <h3>I am a versatile web developer, I have experience working on both the front-end and back-end of a website.</h3>

                    <div>
                    
                            <button class="btn btn-secondary btn-lg btn-space" id="portfolio_btn">
                                Portfolio
                            </button>
                      

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
                        <h2 id="portfolio">
                            <u>Recent Works</u>
                        </h2>
                    </a>

                    <section id="project">
                        <figure class="wp-caption">
                            <a href="https://yetunde79.github.io/react_contact_manager/#/" target="_blank">
                                <img src="resources/img/contact.jpg" alt="contact_manager" class="proj_img">
                                <figcaption class="wp-caption-text">This is a contact manager website made with React.js and the JSONPlaceholder api. You can add and manage contacts with
                                    this website</figcaption>
                            </a>
                        </figure>

                        <figure class="wp-caption">
                            <a href="https://www.yettifood.com/" target="_blank">
                                <img src="resources/img/yettifood.jpg" alt="blog" class="proj_img">
                                <figcaption class="wp-caption-text">This food blog was created with Node.js, Express.js, ejs, MongoDB/Mongoose and passport.js
                                    so I can login to create posts.</figcaption>
                            </a>
                        </figure>

                        <figure class="wp-caption">
                            <a href="https://condescending-williams-848ae0.netlify.com/" target="_blank">
                                <img src="resources/img/shoot.jpg" alt="shoot" class="proj_img">
                                <figcaption class="wp-caption-text">Made with the team at Shoot Technologies. It was created with HTML, CSS and JavaScript.</figcaption>
                            </a>
                        </figure>

                        <figure class="wp-caption">
                            <a href="https://yetundesolaadebayo.com/project/movieapp" target="_blank">
                                <img src="resources/img/movie.jpg" alt="movie_app" class="proj_img">
                                <figcaption class="wp-caption-text">A movie search app created with NodeJS, ExpressJS, CSS and the OMDb API. You can find the
                                    year released and summary of the movie.</figcaption>
                            </a>
                        </figure>

                        <!-- // <figure class="wp-caption">
                        //     <a href="https://yetundesolaadebayo.com/project/twitter_api/" target="_blank">
                        //         <img src="resources/img/twitter.jpg" alt="twitter_client" class="proj_img">
                        //         <figcaption class="wp-caption-text">A twitter client that retrieves the most popular tweets from any username. It was created with Twitter API, HTML, CSS and PHP.</figcaption>
                        //     </a>
                        // </figure> -->

                        <figure class="wp-caption">
                            <a href="https://yetundesolaadebayo.com/project/weatherchecker/" target="_blank">
                                <img src="resources/img/weather.jpg" alt="weather" class="proj_img">
                                <figcaption class="wp-caption-text">A website that finds the weather in any city. It was created with OpenWeatherMap API, HTML, CSS and PHP</figcaption>
                            </a>
                        </figure>

                    </section>

                </div>

                <section class="skills">
                    <h2>
                        <u> Skills</u>
                    </h2>
                    <ul>
                        <li>Project Management</li>
                        <li>Professional Communication</li>
                        <li>Self-Starter</li>
                    </ul>

                    <section class="skill_grid">
                        <div class="purple">
                            <div class="lang" id="html">HTML</div>
                        </div>
                        <div class="purple">
                            <div class="lang" id="css">CSS</div>
                        </div>
                        <div class="purple">
                            <div class="lang" id="bootstrap">Bootstrap</div>
                        </div>
                        <div class="purple">
                            <div class="lang" id="javascript">JavaScript</div>
                        </div>
                        <div class="purple">
                            <div class="lang" id="node">Node.js</div>
                        </div>
                        <div class="purple">
                            <div class="lang" id="php">PHP</div>
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

            <!--newsletter-->

            <footer>
                <a href="index.php" class="logo">
                    <img src="resources/img/y.png" alt="logo">
                </a>

                <div class="list">
                    <ul>
                        <li>
                            <a href="https://github.com/Yetunde79" target="_blank">Github</a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/yetundeadebayo/" target="_blank">LinkedIn</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/yetunde_sola?lang=en" target="_blank">Twitter</a>
                        </li>
                        <li>
                            <a href="https://medium.com/@ysolaadebayo" target="_blank">Medium</a>
                        </li>
                        <li>
                            <a href="privacy.php" class="privacy" target="_blank">Privacy Policy</a>
                        </li>

                    </ul>

                    <ul>
                        <li>
                            <a href="index.php">HOME</a>
                        </li>
                        <li>
                            <a href="about.php">ABOUT</a>
                        </li>
                        <li>
                            <a href="contact.php">CONTACT</a>
                        </li>
                        <li>
                            <a href="services.php">SERVICES</a>
                        </li>

                        <li>
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
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js"></script>    
        <script src="resources/scripts/toggle.js"></script>
        <script src="resources/scripts/scroll.js"></script>

</body>

</html>