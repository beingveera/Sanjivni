<?php

include 'connection.php';

if (isset($_POST['apply'])) {
    $name=$_POST['name'];
    $number=$_POST['mobile'];
    $person=$_POST['person'];
    $address=$_POST['address'];

    $insert="insert into request(Name, Mobile, Person, Address) values('$name','$number','$person','$address')";
    $res=mysqli_query($con,$insert);
}

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SanjiVani - Request</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Cleaning Company Website Template" name="keywords">
        <meta content="Cleaning Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        
        <div class="wrapper">
            <!-- Header Start -->
            <div class="header home">
                <div class="container-fluid">
                    <div class="header-top row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand">
                                <a href="index.html">
                                    SanjiVani
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="topbar">
                                <div class="topbar-col">
                                    <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+91 9829237552</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>sharma.lokesh222001@gmail.com.com</a>
                                </div>
                                <div class="topbar-col">
                                    <div class="topbar-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <a href="#" class="navbar-brand">MENU</a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                       <a href="home.php" class="nav-item nav-link">Home</a>
                                        <a href="about.php" class="nav-item nav-link">About</a>
                                        <a href="precautions.php" class="nav-item nav-link">Precautions</a>
                                        <a href="medicin.php" class="nav-item nav-link active">Medicin</a>
                                        <a href="covid.php" class="nav-item nav-link">Covid Tracker</a>
                                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                                        <a href="medicin.php" class="btn">Medicin Request</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hero row align-items-center">
                        <div class="col-md-3">
                           
                        </div>
                        <div class="col-md-7">
                            <div class="form">
                                <h3>Request for Medicin</h3>
                                <form action="" method="POST">
                                    <input class="form-control" type="text" placeholder="Your Name" name="name">
                                    <input class="form-control" type="text" placeholder="Mobile Number" name="mobile">
                                    <div class="control-group">
                                        <select class="custom-select" name="person">
                                            <option selected>Quantity of Medicin</option>
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Person</option>
                                            <option value="3">3 Person</option>
                                            <option value="4">4 Person</option>
                                            <option value="5">5 Person</option>
                                            <option value="More then 5 Person">More then 5 Person</option>
                                           
                                        </select>
                                    </div>
                                    <textarea class="form-control" placeholder="Address" name="address"></textarea>
                                    <button class="btn btn-block" name="apply">Send Request</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Header End -->


                        <!-- Story Start -->
            <div class="story">
                <div class="container">
                    <div class="section-header">
                        <h2>SanjiVni Approch </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="story-container">
                                <div class="story-end">
                                    <p>SanjiVni</p>
                                </div>
                                <div class="story-continue">

                                    <div class="row story-right">
                                        <div class="col-md-6">
                                            <p class="story-date">
                                                Donater
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="story-box">
                                                <div class="story-text">
                                                    <h3>When Any Person Donate Medicin</h3>
                                                    <p>
                                                      When any want to donate medicin , on our platform when the person will fill the from for donating the medicin.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row story-left">
                                        <div class="col-md-6 d-md-none d-block">
            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="story-box">
                                                <div class="story-text">
                                                    <h3>When we get user request</h3>
                                                    <p>
                                                        When we get user request for the medicin donate , then we send the request to our worker which is nearest to your address.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-md-block d-none">
                                            <p class="story-date">
                                                Get Request
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                        </div>
                                    </div>

                                    <div class="row story-right">
                                        <div class="col-md-6">
                                            <p class="story-date">
                                                Worker
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="story-box">
                                                <div class="story-text">
                                                    <h3>Worker will contect to you</h3>
                                                    <p>
                                                        Then our worker will contact to you and reached to your home and then check the medicin and collect the medicin from your home.Packed the medicin and proceed for the needy person. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row story-left">
                                        <div class="col-md-6 d-md-none d-block">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="story-box">
                                                <div class="story-text">
                                                    <h3>When we get medicin request</h3>
                                                    <p>
                                                        when we get any medicin request from needy person and then we check it we can fullfill the reqest of the person or not . if we can  
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-md-block d-none">
                                            <p class="story-date">
                                                Medicin Request
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-12">

                                        </div>
                                    </div>

                                    <div class="row story-right">
                                        <div class="col-md-6">
                                            <p class="story-date">
                                                Provide Medicin
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="story-box">
                                                <div class="story-text">
                                                    <h3>Worker will provide medicin </h3>
                                                    <p>
                                                        then our worker which is nearest from your home will contact to you and provide the medicin to you.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row story-left">
                                        <div class="col-md-6 d-md-none d-block">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="story-box">
                                                <div class="story-text">
                                                    <h3>When the needy person get medicin</h3>
                                                    <p>
                                                      When the needy person get medicin from the donater , then the donater and reciver both will get notification from the SanjiVni Services.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-md-block d-none">
                                            <p class="story-date">
                                               Get Notification
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="story-start">
                                    <p>Complete</p>
                                </div>
                                <div class="story-launch">
                                    <div class="story-box">
                                        <div class="story-text">
                                            <h3>Helping more &amp; more People</h3>
                                            <p>
                                               If you are having extra or unuseable medicin , so please donate this medicin for the needy person. If you are able to helps so please help them.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Story End -->





            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Link</h2>
                                <a href="">About Us</a>
                                <a href="">Our Story</a>
                                <a href="">Our Services</a>
                                <a href="">Our Projects</a>
                                <a href="">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Link</h2>
                                <a href="">Our Clients</a>
                                <a href="">Clients Review</a>
                                <a href="">Ongoing Project</a>
                                <a href="">Customer Support</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-form">
                                <h2>Stay Updated</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                                <input class="form-control" placeholder="Email here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help & FQAs</a>
                        <a href="">Contact us</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="https://htmlcodex.com">HTML Codex</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
