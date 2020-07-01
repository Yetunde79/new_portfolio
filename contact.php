<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    if(filter_has_var(INPUT_POST, 'submit')){

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        $from = 'ysolaadebayo@gmail.com';
        $recipient = 'yetundearogers@gmail.com';
        

        $usernameSmtp = $_ENV['USER_SMTP'];

        $passwordSmtp = $_ENV['PASSWORD_SMTP'];

        $host = $_ENV['HOST'];

        $port = $_ENV['PORT'];

        $body = '<h2>Contact Request from personal website</h2>
        <h4>Name</h4><p>'.$name.'</p>
        <h4>Email</h4><p>'.$email.'</p>
        <h4>Message</h4><p>'.$message.'</p>
        ';

        $mail = new PHPMailer(true);

        try {
            // Specify the SMTP settings.
            $mail->isSMTP();
            $mail->setFrom($from, $name);
            $mail->Username   = $usernameSmtp;
            $mail->Password   = $passwordSmtp;
            $mail->Host       = $host;
            $mail->Port       = $port;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = 'tls';

            $mail->addAddress($recipient);

            // Specify the content of the message.
            $mail->isHTML(true);
            $mail->Subject    = $subject;
            $mail->Body       = $body;
            $mail->Send();
            
        // echo "Email sent!" , PHP_EOL;
            $msg = 'Your email has been sent';
            $msgClass = 'alert-success';
        } catch (phpmailerException $e) {
            //echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
            $msg = 'An error occurred.';
            $msgClass = 'alert-danger';
        } catch (Exception $e) {
            //echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.h
            $msg = 'Your email was not sent';
            $msgClass = 'alert-danger';
        }
    }
?>


<!DOCTYPE html>
<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121421317-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-121421317-1');
    </script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="resources/img/y.png" />
    <meta name="keywords" content="HTML, CSS, HTML, PHP, JavaScript, Portfolio, Web developer, Resume, Job, Freelancer, Houston, Small business, Houston Freelance Web developer, Yetunde Sola-Adebayo">
    <meta property="og:title" content="Yetunde Adebayo-Rogers">
    <meta name="author" content="Yetunde Adebayo-Rogers">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Web Developer seeking job opportunities">
    <meta property="og:description" content="Web Developer">
    <link rel="canonical" href="https://yetunderogers.com/">
    <meta property="og:url" content="https://yetunderogers.com/">
    <meta property="og:site_name" content="Yetunde Adebayo-Rogers">
    <meta property="og:image" content="https://yetunderogers.com/resources/img/me.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="@yetunde_sola">
    <meta name="twitter:title" content="Yetunde Adebayo-Rogers">
    <meta name="twitter:description" content="I am a self-taught web developer that has a degree in Computer Science. I am a fast learner, I am passionate about my work and this allows be to be efficient.">
    <meta name="twitter:image" content="https://yetunderogers.com/resources/img/me.jpg">
    <meta name="twitter:image:alt" content="Yetunde Adebayo-Rogers">

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
                        <i class="fa fa-bars fa-2x" id="sidebarCollapse"></i>

                        <nav id="sidebar">
                            <ul class="list-unstyled components">

                                <li class="active">
                                    <a href="index.php">Home</a>
                                </li>

                                <li>
                                    <a href="about.php">About</a>
                                </li>

                                <li>
                                    <a href="/blog">Blog</a>
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

                    <section class="contact purplebg">
                        <h2 id="contact_heading">
                            <u>Contact Me</u>
                        </h2>
                        <?php if($msg != ''): ?>
                            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                        <?php endif; ?>

                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
                    <a href="https://medium.com/@yetundeade" target="_blank">Medium</a>
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
                    <a href="https://www.yetunderogers.com/blog/">BLOG</a>
                </li>
                <li>
                    <a href="contact.php">CONTACT</a>
                </li>

                <li>
                    <a href="resume.pdf" target="_blank">RESUME</a>
                </li>
                

            </ul>
        </div>
        <p class="name"> &copy; Yetunde Adebayo-Rogers</p>
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