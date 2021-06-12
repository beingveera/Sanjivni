<?php

include 'connection.php';

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['mobile'];
    $address=$_POST['address'];

    $insert="insert into joining(Name, Email, Mobile, Address) values('$name','$email','$number','$address')";
    $res=mysqli_query($con,$insert);
}
?>

<?php

include 'connection.php';

if (isset($_POST['send'])) {
    $mail=$_POST['gmail'];
    
    $insert="insert into mail(Email) values('$mail')";
    $res=mysqli_query($con,$insert);
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SanjiVani - Home</title>
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
                                    <a href="tel:+91 9829237552"><i class="fa fa-phone-alt"></i>+91 9829237552</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:sharma.lokesh222001@gmail.com"><i class="fa fa-envelope"></i>sharma.lokesh222001@gmail.com</a>
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
                                        <a href="home.php" class="nav-item nav-link active">Home</a>
                                        <a href="about.php" class="nav-item nav-link">About</a>
                                        <a href="precautions.php" class="nav-item nav-link">Precautions</a>
                                        <a href="medicin.php" class="nav-item nav-link">Request</a>
                                        <a href="donate.php" class="nav-item nav-link">Donate</a>
                                        <a href="covid.php" class="nav-item nav-link">Covid Tracker</a>
                                        <a href="login.php" class="btn">Login</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hero row align-items-center">
                        <div class="col-md-7">
                            <h2>Best & Trusted</h2>
                            <h2><span>Medicin Supplies </span> Service</h2>
                            <p>Approch for helps the poor and needy families</p>
                            <a class="btn" href="about.html">Explore Now</a>
                        </div>
                        <div class="col-md-5">
                            <div class="form">
                                <h3>Join Us</h3>
                                <form action="" method="POST">
                                    <input class="form-control" type="text" placeholder="Your Name" name='name' required="true">
                                    <input class="form-control" type="email" placeholder="Email" name="email" required="true">
                                    <input class="form-control" type="phone" placeholder="Mobile Number" name="mobile" required="true">
                                    <textarea class="form-control" placeholder="Address" name='address' required="true"></textarea>
                                    <button class="btn btn-block" name="submit">Join Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
            
            
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="about-text">
                                <h2>What is Corona Virus ?</h2>
                                <p>
                                    A coronavirus is a kind of common virus that causes an infection in your nose, sinuses, or upper throat. In early 2020, after a December 2019 outbreak in China, the World Health Organization identified SARS-CoV-2 as a new type of coronavirus. The outbreak quickly spread around the world.

                                </p>
                                <p>
                                    The virus can lead to pneumonia, respiratory failure, heart problems, liver problems, septic shock, and death. Many COVID-19 complications may be caused by a condition known as cytokine release syndrome or a cytokine storm. This is when an infection triggers your immune system to flood your bloodstream with inflammatory proteins called cytokines. They can kill tissue and damage your organs.
                                </p>
                                <a class="btn" href="https://www.who.int/health-topics/coronavirus#tab=tab_1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

             <!-- Feature Start -->
            <div class="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-header left">
                                <h2>Covid precaution</h2>
                                <p>Protect your self from corona using precautions.</p>
                            </div>
                            <p>
                                <ul>To prevent the spread of COVID-19:
                                <li>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</li>
                                <li>Maintain a safe distance from anyone who is coughing or sneezing.</li>
                                <li>Wear a mask when physical distancing is not possible.</li>
                                <li>Don’t touch your eyes, nose or mouth.</li>
                                <li>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
                                <li>Stay home if you feel unwell.</li>
                                <li>If you have a fever, cough and difficulty breathing, seek medical attention.</li>
                            </ul>
                            </p>
                            <a class="btn" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">Read More</a>
                        </div>
                        <div class="col-md-7">
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="img/feature-1.jpg" alt="Feature">
                                </div>
                                <div class="col-7">
                                    <h3>Wash Your Hands</h3>
                                    <p>
                                       Wash your hands often with soap and water for at least 20 seconds, especially after being in a public place, or after blowing your nose, coughing or sneezing.
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="img/feature-2.jpg" alt="Feature">
                                </div>
                                <div class="col-7">
                                    <h3>Wearing Mask Properly</h3>
                                    <p>
                                      Wear your mask over your nose and mouth and secure it under your chin.Fit the mask snugly against the sides of your face.
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="img/feature-3.jpg" alt="Feature">
                                </div>
                                <div class="col-7">
                                    <h3>Got Vaccinated</h3>
                                    <p>
                                        Vaccination is the administration of a vaccine to help the immune system develop protection from a disease.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>Covid Relef Medicin</h2>
                        <p>In the Situation of Home Quarantine You can prefer these medicin</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin.jpg" alt="Service">
                                <h3>Doxycycline 100 mg</h3>
                                <p>
                                   Doxy-100 tablet is used to treat bacterial infections of the eyes, skin, respiratory tract...
                                </p>
                                <a class="btn" href="https://pharmeasy.in/online-medicine-order/doxy-100mg-strip-of-8-tablets-222647">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin1.jpg" alt="Service">
                                <h3>Ivermectin 12 mg</h3>
                                <p>
                                    Ivermectol Tablet is an anti-worm medicine. It is used for the treatment of worm infection...
                                </p>
                                <a class="btn" href="https://pharmeasy.in/online-medicine-order/ivermectol-12mg-strip-of-2-tablets-51395">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin2.jpg" alt="Service">
                                <h3>Paracetamol 500 mg</h3>
                                <p>
                                   Calpol Tablet is a pain-relieving medicine. It contains paracetamol as an active ingredient...
                                </p>
                                <a class="btn" href="https://pharmeasy.in/online-medicine-order/calpol-500mg-strip-of-15-tablets-38810">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin4.jpg" alt="Service">
                                <h3>Vitamin C/ Celin 500</h3>
                                <p>
                                    New Celin 500 tablet contains vitamin C as its main component. It is an excellent antioxidant...
                                </p>
                                <a class="btn" href="https://pharmeasy.in/online-medicine-order/new-celin-500mg-tablet-25-s-222821">Read More</a>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin5.jpg" alt="Service">
                                <h3>Zinc Tab 50 mg / Zinconia</h3>
                                <p>
                                   Zinconia Tablet helps to boost your immunity and is also used to treat zinc deficiency...
                                </p>
                                <a class="btn" href="https://pharmeasy.in/online-medicine-order/zinconia-50mg-tablet-30146">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin6.jpg" alt="Service">
                                <h3>Vitamin D 2500 IU Tablet</h3>
                                <p>
                                   vitamin D daily to reduce the risk for COVID-19. While these doses of vitamin D are likely safe...
                                </p>
                                <a class="btn" href="https://www.webmd.com/vitamins/ai/ingredientmono-929/vitamin-d">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin8.jpg" alt="Service">
                                <h3>Montelucast &amp; Levocetrizine</h3>
                                <p>
                                   Levocetirizine &amp; Montelukast, which relieves sneezing and runny nose...
                                </p>
                                <a class="btn" href="https://pharmeasy.in/molecules/montelukast-levocetirizine-7891">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin9.jpg" alt="Service">
                                <h3>Pantoprazole 40 mg Tablet</h3>
                                <p>
                                   Pan 40 tablet is used to treat stomach, gastroesophageal disease and acidity...
                                </p>
                                <a class="btn" href="https://pharmeasy.in/online-medicine-order/pan-40mg-15-s-tab-2857">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin10.jpg" alt="Service">
                                <h3>Metronidazole / Metrogly 400 mg</h3>
                                <p>
                                   Metrogyl 400 tablet is an anti-infective medicine. It is used in treating infections...
                                </p>
                                <a class="btn" href="https://pharmeasy.in/online-medicine-order/metrogyl-400mg-strip-of-15-tablets-15185">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin11.jpg" alt="Service">
                                <h3>N-Acetyl-Cysteine 600 mg</h3>
                                <p>
                                  N-acetyl cysteine treats acetaminophen poisoning by binding the poisonous forms...
                                </p>
                                <a class="btn" href="https://www.webmd.com/vitamins/ai/ingredientmono-1018/n-acetyl-cysteine-nac">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin12.jpg" alt="Service">
                                <h3>Hydroxychloroquine</h3>
                                <p>
                                    Hydroxychloroquine (HCQ) was first developed in India for the treatment of malaria...
                                </p>
                                <a class="btn" href="">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/medicin13.jpg" alt="Service">
                                <h3>Azithromycin</h3>
                                <p>
                                     Azithromycin is an antibiotic used to treat bacterial infections such as bronchitis and pneumonia...
                                </p>
                                <a class="btn" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
            
            
           
            
            
            <!-- Why SanjiVani Start -->
            <div class="faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-header left">
                                <h2>Why SanjiVani </h2>
                                <p>Why peoples will donate medicine for this ?</p>
                            </div>
                            <img src="img/faqs.png" alt="Image">
                        </div>
                        <div class="col-md-7">

                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <span>1</span> How you can donate medicine ?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                           You just have to fill which is provided in the top of the home page, fill according your 
                                           capicity and submit the form. Then one of our SanjiVanir will come at your filling address and pick the parsel.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            <span>2</span> How you can apply for medicine request ?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            You just have to click the medicin request button which is provided in top of the website then you are targeted to a request form then fill the form and fill the form according your need.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            <span>3</span> Why you donate medcine to SanjiVani ?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                          SanjiVani is a non profitable platform, where the donater is directly connected to the reciver. From it you can helps the needey persons.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>4</span> there is any chanses to medicins are expired ?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Our SanjiVanir are personly check the medicin and all about the medicin then they will parsel for recevier. if we got any isuue or risk then we reject that medicins.
                                        </div>
                                    </div>
                                </div>
                                 <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                            <span>5</span> How you can join the SanjiVani ?
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            If you want to join SanjiVani then , you can directly join us with some formal information to get a SanjiVanir id. there is no fee for this for join.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Why SanjiVani End -->
            
            
            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Geetanjali Institute of Technical Studies,Udaipur</p>
                                <p><i class="fa fa-phone-alt"></i>+91 9829237552</p>
                                <p><i class="fa fa-envelope"></i>SanjiVani.offical@gmail.com</p>
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
                                <h2>SanjiVani</h2>
                                <a href="about.php">About Us</a>
                                <a href="medicin.php">Medcine</a>
                                <a href="precautions.php">Precautions</a>
                                <a href="covid.php">Corona Update</a>
                                <a href="contact.php">Contact Us</a>
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
                                   For any offical update join us , Stay Home Stay Safe.!!!
                                </p>
                                <form action="" method="POST">
                                <input class="form-control" placeholder="Email here" name='gmail'>
                                <button class="btn" name='send'>Submit</button>
                                </form>
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
                            <p>&copy; <a href="https://htmlcodex.com">Team SanjiVani</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">Team SanjiVani</a></p>
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
