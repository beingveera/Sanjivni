<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sanjivani - Tracker</title>
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
            <div class="header">
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
                                    <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>sharma.lokesh222001@gmail.com</a>
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
                </div>
            </div>
            <!-- Header End -->
      <div class="service">
        <div class="container">
            <span id="country" style="color:white;"></span>
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="height: 200px;">
                            <h5 style="padding: 10px;background: #5bcfff;"><b>Total Cases</b></h5><h2 style="padding: 40px;"><b><span id="cases"></span></b></h2>
                                
                            </div>
                        </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="height: 200px;">
                            <h5 style="padding: 10px;background: #ffd346;"><b>Active Cases</b></h5><h2 style="padding: 40px;"><b><span id="active" style="padding: 20px;"></span></b></h2>
                                
                            </div>
                        </div>

                    

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="height: 200px;">
                            <h5 style="padding: 10px;background: #fc6060;"><b>Critical Cases</b></h5><h2 style="padding: 40px;"><b><span id="critical"></span></b></h2>
                            </div>
                        </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="height: 200px;">
                            <h5 style="padding: 10px;background: #50f6fe;"><b>Total Deaths</b></h5><h2 style="padding: 40px;"><b><span id="death"></span></b></h2>
                        </div>
                        </div>

                    </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="height: 200px;">
                            <h5 style="padding: 10px;background: #5bff42;"><b>Recovered Cases</b></h5><h2 style="padding: 40px;"><b><span id="recovered"></span></b></h2>
                            </div>
                        </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="height: 200px;">
                            <h5 style="padding: 10px;background: #bc50fe;"><b>Total Testes Done</b></h5><h2 style="padding: 40px;"><b><span id="tests"></span></b></h2>
                            </div>
                        </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="height: 200px;">
                            <h5 style="padding: 10px;background: #f58828;"><b>One Case Per Person</b></h5><h2 style="padding: 40px;"><b><span id="one"></span></b></h2>
                            </div>
                        </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="height: 200px;">
                            <h5 style="padding: 10px;background: #fe39f9;"><b>One Death Per Person</b></h5><h2 style="padding: 40px;"><b><span id="per"></span></b></h2>
                            </div>
                        </div>

                    </div>

                    <iframe src="https://ourworldindata.org/grapher/covid-tests-cases-deaths-per-million?yScale=log&time=earliest..latest&country=~IND" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe><br><br>


                   <iframe src="https://ourworldindata.org/explorers/coronavirus-data-explorer?zoomToSelection=true&pickerSort=desc&pickerMetric=population&hideControls=true&Metric=People+vaccinated+%28by+dose%29&Interval=Cumulative&Relative+to+Population=false&Align+outbreaks=false&country=BHR~BRA~CHL~FRA~DEU~HUN~IND~ISR~SRB~TUR~GBR~USA~URY~ESP~ITA~ARE~MEX~RUS" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>

                </div>
            </div>
      </div>
    </div>


<script type="text/javascript">
fetch('https://corona.lmao.ninja/v2/countries/India')
.then((response) => {
  return response.json();
})
.then((data) => {
  console.log(data);
  document.getElementById("country").innerHTML = data.country;
  document.getElementById("active").innerHTML = data.active.toLocaleString();
  document.getElementById("cases").innerHTML = data.cases.toLocaleString();
  document.getElementById("critical").innerHTML = data.critical.toLocaleString();
  document.getElementById("death").innerHTML = data.deaths.toLocaleString();
  document.getElementById("recovered").innerHTML = data.recovered.toLocaleString();
  document.getElementById("tests").innerHTML = data.tests.toLocaleString();
  document.getElementById("one").innerHTML= data.oneCasePerPeople.toLocaleString();
  document.getElementById("per").innerHTML= data.oneDeathPerPeople.toLocaleString();
});

</script>

<script type="text/javascript">
fetch('https://disease.sh/v3/covid-19/vaccine/coverage/countries?lastdays=1')
.then((world) =>{
    return world.json();
})
.then((vaccine) =>{
    console.log(vaccine[86].timeline)
     document.getElementById("vaccination").innerHTML = vaccine[86].timeline;
});
</script>

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


        <style>

            
        </style>
    </body>
</html>
