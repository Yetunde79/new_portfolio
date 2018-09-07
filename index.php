<!-- <?php

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'From: yetunde@yetundesolaadebayo.com';
		$to = 'ysolaadebayo@gmail.com'; 
		$subject = $_POST['subject'];
		
		 $body = "From: $name\n E-Mail: $email\n Message:\n $message";

          if ($_POST["submit"]) {
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
      
?> -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="resources/img/color_mark.png" />
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
                                    <a href="resume.pdf" target="_blank">Resume</a>
                                </li>

                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>

                        </nav>
                    </section>

                    <a href="index.php">
                        <img id="full_logo" src="resources/img/logo.png" alt="logo">
                    </a>
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
                        <li>Proffesional Communication</li>
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

                        <form>
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
                                <textarea class="form-control" name="message" placeholder="Type your message here"></textarea>
                            </div>

                            <div class="text-center">
                                <input type="submit" class="btn btn-light submit" name="submit" value="Submit">
                            </div>

                        </form>
                    </section>
                </section>
            </section>

            <footer>
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
                        <a href="https://codepen.io/yetty79/">Codepen</a>
                    </li>

                    <li>
                        <a href="index.php">
                            <img src="resources/img/y.png" alt="logo">
                        </a>
                    </li>

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

                </ul>
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