<?php
require('../vendor/autoload.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Start Bootstrap Theme</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Young Life</span> Young Professional
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#ticket">Tickets</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#games">Games</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#prizes">Prizes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#map">Location</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 style="inline" class="brand-heading"><img src="img/prizes/YoungLife-Primary.png" alt=""> Casino Night</h1>
                        <p class="intro-text next-head">A fundraiser for Young Life.<br>By YLYP.</p>
                        <a href="#map" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Map Section -->
    <!-- <div id="map"></div> -->
    <section id="map" class="container content-section text-center">
        <div class="row">
            <!-- Title -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>The Important Info</h3>
                </div>
            </div>
            <!-- /.row -->

            <!-- buttons-->
            <section>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="#location" class="page-scroll btn btn-default btn-lg"><i class="fa fa-map-marker"></i> <span class="network-name">Location</span></a>
                    </li>
                    <li>
                        <a href="#location" class="page-scroll btn btn-default btn-lg"><i class="fa fa-pied-piper-alt"></i> <span class="network-name">Dress Code</span></a>
                    </li>
                    <li>
                        <a href="#location" class="page-scroll btn btn-default btn-lg"><i class="fa fa-calendar"></i> <span class="network-name">Date and Time</span></a>
                    </li>
                </ul>
                </br>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="#games" class="page-scroll btn btn-default btn-lg"><i class="fa fa-life-ring"></i> <span class="network-name">Games</span></a>
                    </li>
                    <li>
                        <a href="#location" class="page-scroll btn btn-default btn-lg"><i class="fa fa-cutlery"></i> <span class="network-name">Refreshments</span></a>
                    </li>
                    <li>
                        <a href="#prizes" class="page-scroll btn btn-default btn-lg"><i class="fa fa-gift"></i> <span class="network-name">Prizes</span></a>
                    </li>
                </ul>
                </br>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="#YLYP" class="page-scroll btn btn-default btn-lg"><i class="fa fa-users"></i> <span class="network-name">YLYP</span></a>
                    </li>
                    <li>
                        <a href="#ticket" class="page-scroll btn btn-default btn-lg"><i class="fa fa-ticket"></i> <span class="network-name">Tickets</span></a>
                    </li>
                </ul>
            </section>
            <!-- /.buttonsSection -->

            <br>

            <!-- Page Features -->
            <div class="row text-center">

                <div class="col-md-3 col-sm-6 hero-feature">
                    <div id = "location" class="thumbnail hero-feature-add">
                        <img src="img/mapSmall2.png" alt="">
                        <div class="caption hero-text">
                            <h3>Location</h3>
                            <p>3512 Pleasant Valley Rd <br> Nashville, TN 37204</p>
                            <p>
                                <a href="https://www.google.com/maps/place/3512+Pleasant+Valley+Rd,+Nashville,+TN+37204/@36.1091679,-86.775353,17z/data=!3m1!4b1!4m2!3m1!1s0x886465b65cebdafd:0x13e4b39cab54a4b3" class="btn btn-default">Link to the Googles</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail hero-feature-add">
                        <img src="img/desscode.png" alt="">
                        <div class="caption hero-text">
                            <h3>Dress Code</h3>
                            <p>Black Tie.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail hero-feature-add">
                        <img src="img/date2.png" alt="">
                        <div class="caption hero-text">
                            <h3>Date & Time</h3>
                            <p>Doors Open at 7:00 PM; Casino runs from 7:30 PM to 10:30 PM; Prize Drawing at 11:15PM with Dance Party following</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail hero-feature-add">
                        <img src="img/nomnom.png" alt="">
                        <div class="caption hero-text">
                            <h3>Refreshments</h3>
                            <p>Beverages and Hors d'oeuvres will be served.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>

    <!-- TranTicket  -->
    <section id="tranTicket" class="content-section text-center tran">
        <div class="tranTicket-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                </div>
            </div>
        </div>
    </section>

    <!-- Get Ticket -->
    <section id="ticket" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Pre-Order Your Ticket on <a href= "https://www.eventbrite.com/e/nashville-young-life-casino-fundraiser-tickets-16243360328">Eventbrite</a></h2>
                <hr>
                <p>Current tickets prices: </p>
                <!--put prizes -->
                <p><strong> General Admission: </strong> $11 <br> <small>{ Access to the event and 10 playing chips }</small> </p>
                <p><strong> Groupie: </strong> $25 <br> <small>{ Access to the event, 25 playing chips, and 1 drink coupon }</small> </p>
                <p><strong> VIP: </strong> $50 <br> <small>{ Access to the event, 60 playing chips, and 1 drink coupon }</small> </p>
                <hr>
                <p>What are you waiting for <a href= "https://www.eventbrite.com/e/nashville-young-life-casino-fundraiser-tickets-16243360328">GO buy your ticket!</a></p>
                <!--make text smaller-->
                <small>if you don't prices will rise at the door!</small>
            </div>
        </div>
    </section>

    <!-- TranGames  -->
    <section id="tranGames" class="content-section text-center tran">
        <div class="tranGames-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                </div>
            </div>
        </div>
    </section>

    <!-- Games Section -->
    <section id="games" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Games!</h2>
                <p>Traditional Casino Games Include:</p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://www.youtube.com/watch?v=-9YGKFdP6sY" class="btn btn-default btn-lg"> <span class="network-name">Black Jack</span></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=cnm_V7A-G6c" class="btn btn-default btn-lg"> <span class="network-name">Texas Hold'Em</span></a>
                    </li>
                    <li>
                        <a href="http://www.wikihow.com/Play-Roulette" class="btn btn-default btn-lg"> <span class="network-name">Roulette</span></a>
                        <!-- or potentially use https://www.youtube.com/watch?v=JR5JNVxZolU -->
                        <!-- or potentially use this video https://www.youtube.com/watch?v=n0_TZMnecbE -->
                    </li>
                </ul>
                </br>
                <p>Non-Traditional Casino Games Include:</p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://xkcd.com/134/" class="btn btn-default btn-lg"> <span class="network-name">Darts</span></a>
                    </li>
                    <li>
                        <a href="https://xkcd.com/668/" class="btn btn-default btn-lg"> <span class="network-name">Spin the Wheel</span></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=alc9IDzwpAI" class="btn btn-default btn-lg"> <span class="network-name">1 minute challenge(s)</span></a>
                    </li>
                </ul>
                </br>
                <p>... And more!</p>

            </div>
        </div>
    </section>

    <!-- TranPrizes  -->
    <section id="tranPrizes" class="content-section text-center tran">
        <div class="tranPrizes-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                </div>
            </div>
        </div>
    </section>

    <!-- Prizes Section -->
    <section id="prizes" class="container content-section text-center">
        <div class="row">
            <!-- Header Sports-->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Prizes
                        <br>
                        <small class="float-left">Sports</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <!-- Projects Sports Row -->
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/signedFootball.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Delanie Walker Signed Football</a>
                    </h3>
                    <p>Want to start and/or add to your exisiting Titan's memoriable/swag? Well you in luck!</p>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/TitansTickets.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Front Row Titans Tickets</a>
                    </h3>
                    <p>We got 2 front row tickets to the Titans Opener game! And they potentially have your name on them!</p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Header Music -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Prizes
                        <br>
                        <small class="float-left">Music</small>
                    </h1>
                </div>
            </div>

            <!-- Projects Music Part 1 Row -->
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/Holcolmb.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Holcomb Swag</a>
                    </h3>
                    <p>We have signed Vinyl Records from the Holcombs. Along with a few other fun items!</p>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/Wertz.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Matt Wertz Swag</a>
                    </h3>
                    <p>Matt Wertz signed CD's and more! </p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Projects Music Part 2 Row -->
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/Rector.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Ben Rector Swag </a>
                    </h3>
                    <p>Ben Rector signed CD's and posters! Along with a Ben Rector t-shirt!</p>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/Concert.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Concert Tickets**</a>
                    </h3>
                    <p>Still trying to secure tickets, so won't say to which concert just yet!</p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Header Cool Items-->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Prizes
                        <br>
                        <small class="float-left">Cool Stuff</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <!-- Projects Cool Items -->
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/GoPro.jpg" alt="">
                    </a>
                    <h3>
                        <a href="https://www.youtube.com/watch?v=UAxqf5ZAssw">GoPro</a>
                    </h3>
                    <p>A very very VERY cool camera.</p>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/Ps3.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">PS3**</a>
                    </h3>
                    <p>This item may change, but it will be something of equal value/nerdy coolness.</p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Header YL Swag -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Prizes
                        <br>
                        <small class="float-left">Young Life Swag</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <!-- Projects YL Swag part2-->
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/GuySwag.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Guy Swag</a>
                    </h3>
                    <p>Shirts, tanks, jackets, hats, ect...</p>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/GirlSwag.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Girl Swag</a>
                    </h3>
                    <p>Shirts, tank-tops, jackets, sweats, ect...</p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Projects YL Swag part1 -->
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/CoolSwag.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Cool Swag</a>
                    </h3>
                    <p>Posters, mugs, cups, you name it we got it.</p>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/SpecialSwag.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Special Swag</a>
                    </h3>
                    <p>To be announced only at the party!</p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Header Male Sale -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Prizes
                        <br>
                        <small>Male Sale</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <!-- Projects Male Sale -->
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/Date.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Double Date - Zettler and Peters</a>
                    </h3>
                    <p>Ever thought to yourself, 'It would be great if two handsome young bachelors picked me and one my closest friends up in a limo, and bought us dinner?' Well that thought may come to fruition!</p>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/Brunch.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Saturday Morning Epic Brunch Time</a>
                    </h3>
                    <p>Ever wonder what the post party looks like at The Crib? Well one Saturday morning you and your closest 5 friends can join us for our tradition of epic brunch time hosted by: Andrew Underhill, Charles Lindquist, and the Spin master Isaiah Spinney. (Brunch will be cleaned up by Gary Mazzone Peters when he wakes up around 2pm)</p>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/Whiskey.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Cigar Smoking and Whiskey Tasting</a>
                    </h3>
                    <p>What's better than free high quality whiskey and cigars? Well learning the ins-and-outs of what your smoking and drinking of course! You and THREE friends spend part of your afternoon smoking and drinking with the past president of Cigar Aficionados, to learn to be more sophisticated drinkers and smokers. </p>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="img/prizes/Laser.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#">Lazer Tag, Sky High, or Bowling with The Crib</a>
                    </h3>
                    <p>The Crib: Charles Lindquist (AKA Chuck), Andrew Underhill (AKA Brohill, AKA Cecil, AKA Andy-Pants), Taylor Coston (AKA Alec Coston), Blake Storts (AKA Bay-La-Kay), and Gary Peters (AKA Garbear, AKA Miami Vice). Will treat you and up to 4 friends in an epic adventure in Nashville!</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>

    <!-- TranMap  -->
    <section id="tranMap" class="content-section text-center tran">
        <div class="tranMap-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About YL Casino Night Fundraiser</h2>
                <p>1) <strong>Faith:</strong> The YLYP group strives provide in-need high school students the ability to go to Young Life summer camp and grow their relationship with Christ. For more information about Young Life, visit <a href="http://www.younglife.org">www.younglife.org</a></p>
                <p>2) <strong>Fellowship:</strong> Bring young professionals throughout Nashville together and grow personal and professional relationships.</p>
                <p>3) <strong>Fun:</strong> Provide a great opportunity to get dressed up and take part in one heck of a night!</p>
                <p>For more information about the night please feel free to explore the rest of the page!</p>
            </div>
        </div>
    </section>

    <!-- TranYLYP  -->
    <section id="tranYLYP" class="content-section text-center tran">
        <div class="tranYLYP-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                </div>
            </div>
        </div>
    </section>

    <!-- Get involved with YLYP -->
    <section id="YLYP" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Getting involved with YLYP</h2>
                    <p>To get more involved with the Young Life Young Professional community, join the Facebook Group and reach out to the communtiy! (Seriously just message whoever is posting the most).</p>
                    <a href="https://www.facebook.com/groups/1512768959005693/" class="btn btn-default btn-lg">Visit YLYP Facebook Page</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; <a href="#">Mazzone 2015</a></p>
            <p>Trademark &copy; <a href="https://www.facebook.com/rachel.downing.5220?ref=br_rs">Rachel Downing 2015</a></p>
            <p>This website is still under construction and is currently just a concept page</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
	-->

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
