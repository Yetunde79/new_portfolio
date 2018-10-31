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
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="resources/stylesheets/header_footer.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="resources/stylesheets/contactme.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>

<body>

    <div class="contact_body">
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
                </header>

                <section class="contact_form ">
                    <div class="contact_text">
                        <h4 class="purple">I am always looking for new and exciting opportunities to work with companies and individuals on
                            projects big or small</h4>
                        <sm>Fill the form and I'll get back to you as soon as possible</sm>
                    </div>

                    <section class="contact">
                        <h2 id="contact_heading">
                            <u>Contact Me</u>
                        </h2>

                        <form method="POST" action="contact.php">
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
                                <textarea rows="5" class="form-control" name="message" placeholder="Type your message here"></textarea>
                            </div>

                            <div class="text-center">
                                <input type="submit" class="btn btn-light submit" name="submit" value="Submit">
                            </div>

                        </form>
                    </section>
                </section>
            </div>
        </main>

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