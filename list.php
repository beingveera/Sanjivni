<?php
//error_reporting(0);
include('connection.php');

$query="select * from input";;
$data = mysqli_query($con,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
?>

<?php
include('connection.php');

$query="select * from output";
$main = mysqli_query($con,$query);
$final=mysqli_num_rows($main);
$output=mysqli_fetch_assoc($main);
?>

<!DOCTYPE html>
<html>
<head>
		<title>Sanjuvani-List</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Cleaning Company Website Template" name="keywords">
        <meta content="Cleaning Company Website Template" name="description">

	    <!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


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
                                       <a href="home.php" class="nav-item nav-link active">Home</a>
                                        <a href="about.php" class="nav-item nav-link">About</a>
                                        <a href="precautions.php" class="nav-item nav-link">Precautions</a>
                                        <a href="medicin.php" class="nav-item nav-link">Request</a>
                                        <a href="donate.php" class="nav-item nav-link">Donate</a>
                                        <a href="covid.php" class="nav-item nav-link">Covid Tracker</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container" style="align-items: center;justify-content: center;padding-right: 40px;padding-left: 40px;color:red;">


            <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#medicinerequest" role="button" aria-expanded="false" aria-controls="medicinerequest">
    MediCine Request
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#medicinedonate" aria-expanded="false" aria-controls="medicinedonate">
    Medicine Donate
  </button>
</p>
<div class="collapse" id="medicinerequest">
  <div class="card card-body">
  	<h3 style="color:black;text-align:center;text-shadow: 1px 2px 3px ">MediCine Request List</h3>
   	<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" style="color:#00539C;">Name</th>
			      <th scope="col" style="color:#00539C;">Mobile No.</th>
			      <th scope="col" style="color:#00539C;">Person</th>
			      <th scope="col"  style="color:#00539C;">Date</th>
			      <th scope="col" style="color:#00539C;">Medicine</th>
			      <th scope="col" style="color:#00539C;">Address</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php

			  	while ($final=mysqli_fetch_assoc($main)) {
			  		echo "
			  		 <tr>
			      <th scope='row' style='color:#00539C;'>".$final['Name']."</th>
			      <th scope='row' style='color:#00539C;'>".$final['Mobile']."</th>
			      <th scope='row' style='color:#00539C;'>".$final['Person']."</th>
			      <th scope='row' style='color:#00539C;'>".$final['Date']."</th>
			      <th scope='row' style='color:#00539C;'>".$final['CheckBox']."</th>
			      <th scope='row' style='color:#00539C;'>".$final['Address']."</th>
			    </tr>
			    ";
			  	}


			  	?>
	    
			  </tbody>
			</table>
  </div>
</div>

<div class="collapse" id="medicinedonate">
  <div class="card card-body">
  	<h3 style="color:black;text-align:center;text-shadow: 1px 2px 3px ">MediCine Donate List</h3>
   	<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" style="color:#00539C;">Name</th>
			      <th scope="col" style="color:#00539C;">Mobile No.</th>
			      <th scope="col" style="color:#00539C;">Person</th>
			      <th scope="col"  style="color:#00539C;">Date</th>
			      <th scope="col" style="color:#00539C;">Medicine</th>
			      <th scope="col" style="color:#00539C;">Address</th>
			    </tr>
			  </thead>
			  <tbody>

			  	<?php

			  	while ($result=mysqli_fetch_assoc($data)) {
			  		echo "
			  		 <tr>
			      <th scope='row' style='color:#00539C;'>".$result['Name']."</th>
			      <th scope='row' style='color:#00539C;'>".$result['Mobile']."</th>
			      <th scope='row' style='color:#00539C;'>  ".$result['Person']."</th>
			      <th scope='row' style='color:#00539C;'>".$result['Date']."</th>
			      <th scope='row' style='color:#00539C;'>".$result['CheckBox']."</th>
			      <th scope='row' style='color:#00539C;'>".$result['Address']."</th>
			    </tr>
			    ";
			  	}


			  	?>
			  </tbody>
			</table>
  </div>
</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>