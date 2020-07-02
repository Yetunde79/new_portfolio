
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
    <title>Home</title>
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

                    <a href="index.php"><img id="full_logo" src="resources/img/yetunde.png" alt="logo"></a>

                </header>

 

                <section id="center">

                    <h1>Hello!</h1>
                    <h3>My name is Yetunde and I am a web developer with a BSc. in Computer Science. I love helping companies big or small, and I look forward to contributing to your company.</h3>
                   

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
                <div id="recent" class="font">   
                        <h2 id="portfolio">
                            <u>Recent Works</u>
                        </h2>
                   

                    <section id="project">

                    <figure class="wp-caption">
                            <a href="https://secure-sands-34232.herokuapp.com/" target="_blank">
                                <img src="resources/img/rsz_devnet.jpg" alt="dev net" class="proj_img">
                                <figcaption class="wp-caption-text">This is a website/social network where developer can connect. It was built with React.js, Redux, Node.js, MongoDB Bootstrap and CSS</figcaption>
                            </a>
                        </figure>

                        <figure class="wp-caption">
                            <a href="https://reactclientpanel-6ed7c.firebaseapp.com/" target="_blank">
                                <img src="resources/img/clientpanel.jpg" alt="client panel." class="proj_img">
                                <figcaption class="wp-caption-text">This is a website you can use to manage the balance your clients owe. It was built with React.js, Redux and firebase.</figcaption>
                            </a>
                        </figure>

                        <figure class="wp-caption">
                            <a href="https://code-blog.herokuapp.com/" target="_blank">
                                <img src="resources/img/yettifood.jpg" alt="blog" class="proj_img">
                                <figcaption class="wp-caption-text">This food blog was created with Node.js, Express.js, ejs, MongoDB/Mongoose and passport.js
                                    so I can login to create posts. It was also deployed on Heroku</figcaption>
                            </a>
                        </figure>

                        <figure class="wp-caption">
                            <a href="https://condescending-williams-848ae0.netlify.com/" target="_blank">
                                <img src="resources/img/shoot.JPG" alt="shoot" class="proj_img">
                                <figcaption class="wp-caption-text">Made with the team at Shoot Technologies. It was created with HTML, CSS and JavaScript.</figcaption>
                            </a>
                        </figure>

                        <figure class="wp-caption">
                            <a href="https://still-depths-33786.herokuapp.com/" target="_blank">
                                <img src="resources/img/movie.jpg" alt="movie_app" class="proj_img">
                                <figcaption class="wp-caption-text">A movie search app created with NodeJS, ExpressJS, CSS and the OMDb API. You can find the
                                    year released and summary of the movie.</figcaption>
                            </a>
                        </figure>

                        <!-- // <figure class="wp-caption">
                        //     <a href="https://yetunderogers.com/project/twitter_api/" target="_blank">
                        //         <img src="resources/img/twitter.jpg" alt="twitter_client" class="proj_img">
                        //         <figcaption class="wp-caption-text">A twitter client that retrieves the most popular tweets from any username. It was created with Twitter API, HTML, CSS and PHP.</figcaption>
                        //     </a>
                        // </figure> -->

                        <figure class="wp-caption">
                            <a href="https://yetunderogers.com/project/weatherchecker/" target="_blank">
                                <img src="resources/img/weather.jpg" alt="weather" class="proj_img">
                                <figcaption class="wp-caption-text">A website that finds the weather in any city. It was created with OpenWeatherMap API, HTML, CSS and PHP</figcaption>
                            </a>
                        </figure>

                    </section>
                        <a id="more" target="_blank" href="https://github.com/Yetunde79?tab=repositories">More Projects</a>
                </div>

                <section class="skills">
                    <h2>
                        <u> Skills</u>
                    </h2>
                    <ul>
                        <li>Professional Communication</li>
                        <li>Teamwork</li>
                        <li>Adaptability</li>
                        <li>Problem-Solving</li>
                        <li>Inquisitive</li>
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
                            <div class="lang" id="react">React.js</div>
                        </div>
                        <div class="purple">
                            <div class="lang" id="node">Node.js</div>
                        </div>
                        <div class="purple">
                            <div class="lang" id="php">PHP</div>
                        </div>
                        <div class="purple">
                            <div class="lang" id="wordpress">WordPress</div>
                        </div>
                        <div class="purple">
                            <div class="lang" id="mongodb">MongoDB</div>
                        </div>
                    </section>

                <section class="contact_pad">
                    <section class="contact container-fluid">
                        
                        <!-- Begin Mailchimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                            We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <div id="mc_embed_signup">
                        <form action="https://yetundesolaadebayo.us19.list-manage.com/subscribe/post?u=cf698184b53cba6efbf63334e&amp;id=aa580fd03f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                            <h2>Subscribe to my mailing list to get updates on my podcast and tech journey</h2>
                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                        <div class="mc-field-group">
                            <label for="mce-NAME">Name </label>
                            <input type="text" value="" name="NAME" class="" id="mce-NAME">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                        </label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cf698184b53cba6efbf63334e_aa580fd03f" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                        </form>
                        </div>

                        <!--End mc_embed_signup-->

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