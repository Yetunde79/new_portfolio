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
    <link rel="stylesheet" type="text/css" media="screen" href="resources/stylesheets/aboutme.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>

<body>

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

            <section class="about">
                <img src="resources/img/me.jpg" />
                <div>
                    <p>My name is Yetunde Sola-Adebayo and I am a UH alumna with a BSc. in Computer Science. I am passionate
                        web development because I enjoy transforming code into art and making the web more interactive and
                        exciting.
                    </p>
                    <p>When I am not developing or learning new skills, I enjoy cooking and reading.</p>
                    <p>If you were curious I built this website using HTML, CSS, JavaScript and Bootstrap</p>

                    <a href="/contact.php">
                        <button class="btn btn-outline-info">
                            Contact Me
                        </button>
                    </a>

                    <p>I am currently looking for employment or freelance work. Take a look at my resume
                        and feel free to contact me, I would love to hear from you.
                    </p>

                    <a target="_blank" href="/resume.pdf">
                        <button class="btn btn-outline-info">
                            Resume
                        </button>
                    </a>
                </div>
            </section>
        </div>
    </main>

    <footer class="bg">
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
                    <a href="https://twitter.com/yettythedev?lang=en" target="_blank">Twitter</a>
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