<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Toortaay Preparatory</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('template/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('template/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('template/css/style.css')}}" rel="stylesheet">


</head>

<body>

<!--==========================
Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>

        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#hero">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Academics</a></li>
                <li><a href="#team">Teachers</a></li>
                @if (Route::has('login'))
                      <li><a href="{{ route('login') }}">Login</a></li>
                @endif
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Hero Section
============================-->
<section id="hero">
    <div class="hero-container">
        <h1>Toortaay Preparatory School</h1>
        <h2>Na Tulenge Mbele</h2>
        <p>We are team of highly inspired pupils and available teachers</p>
        <a href="#about" class="btn-get-started">Take a Tour</a>
    </div>
</section><!-- #hero -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">
            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <h2 class="title">About Us</h2>
                    <p>Toortaay is situated in Bugaa location of Mt Elgon constituency.It was started in 2010 as a private institution.
                    It was officially registered in 2017.</p>


                    <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon"><i class="fa fa-bar-chart"></i></div>
                        <h4 class="title"><a href="">Academics</a></h4>
                        <p class="description">Our first goal is to ensure our pupils come out of Toortaay with fully baked educational skills</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-photo"></i></div>
                        <h4 class="title"><a href="">Tours</a></h4>
                        <p class="description">Our pupils are entitled to visit tourist and academic destinations from time to time to spur creativity and gain a bigger outlook</p>
                    </div>

                    <div class="icon-box wow fadeInUp">
                        <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                        <h4 class="title"><a href="">Exchange Programs</a></h4>
                        <p class="description">The Toortaay fraternity loves to welcome and visit other institutions to allow for exchange of ideas and knowledge
                        not just between teachers but also between our pupils</p>
                    </div>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
            </div>

        </div>
    </section><!-- #about -->



    <!--==========================
     Academics Section
    ============================-->
    <section id="services">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">Academics</h3>
                <p class="section-description">Academics,community building and all about the salad in between them.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
                        <h4 class="title"><a href="">IT</a></h4>
                        <p class="description">We endeavour to nurture the next technological brains through early introduction to the demands of ICT</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
                        <h4 class="title"><a href="">Academics</a></h4>
                        <p class="description">Our first goal is to ensure our pupils come out of Toortaay with fully baked educational skills</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
                        <h4 class="title"><a href="">Insta-Results</a></h4>
                        <p class="description">Parents are subscribed to pupil's performance through SMS,receiving CAT,exam marks and essential news or updates</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-photo"></i></a></div>
                        <h4 class="title"><a href="">Tours</a></h4>
                        <p class="description">Our pupils are entitled to visit tourist and academic destinations from time to time to help them have a bigger insight and outlook</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-road"></i></a></div>
                        <h4 class="title"><a href="">Community</a></h4>
                        <p class="description">Aspirations to spur infrastructural and intellectual growth in Bugaa area and the larger Mt Elgon region through education</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-shopping-bag"></i></a></div>
                        <h4 class="title"><a href="">Exchange Programs</a></h4>
                        <p class="description">The Toortaay fraternity loves to welcome and visit other institutions to allow for exchange of ideas and knowledge</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #services -->



    <!--==========================
      Teachers Section
    ============================-->
    <section id="team">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Teachers</h3>
                <p class="section-description">The teachers keeping the steam on</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/team-1.jpg" alt=""></div>
                        <h4>Carol Chesang</h4>
                        <span>Headteacher</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="/img/team-2.jpg" alt=""></div>
                        <h4>Sellah Cherogony</h4>
                        <span>Deputy Headteacher</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/team-3.jpg" alt=""></div>
                        <h4>Anthony Kirui</h4>
                        <span>Senior Teacher</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/team-4.jpg" alt=""></div>
                        <h4>Roph Anice Chebet</h4>
                        <span>Accounts Clerk</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Contact</h3>
                <p class="section-description">Please reach out to us for questions,comments,suggestions,compliments or ideas</p>
            </div>
        </div>

        <div id="google-map" data-latitude="0.854823" data-longitude="34.706859"/></div>

        <div class="container wow fadeInUp">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-4">

                    <div class="info">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>25-50208<br>Kapsokwony, Mt Elgon</p>
                        </div>

                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>info@example.com</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+254717648006</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-5 col-md-8">
                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Toortaay Preparatory School</strong>. All Rights Reserved
        </div>

    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{ asset('template/lib/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('template/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{ asset('template/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('template/lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('template/lib/wow/wow.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

<script src="{{ asset('template/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('template/lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('template/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{ asset('template/lib/superfish/superfish.min.js')}}"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('template/js/main.js')}}"></script>

</body>
</html>
