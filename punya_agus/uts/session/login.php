<?php
session_start();

$user ="admin";
$pass = "123456";

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php
    if (($user == $username) && ($pass == $password)) {
      echo "<title>Login Success</title>";
    }
    else {
      echo "<title>Login Not Success</title>";
    }
  ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
  <?php
  if ( ($user == $username) && ($pass == $password) ) {
    $_SESSION["username"] = $username;
    $_SESSION["login"] = 1;
    
    echo"<br><a href='../index.php'>Ke Halaman Index</a>";
    echo"<br><a href='./halaman2.php'>Ke halaman 2</a>";
    ?>
      <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>zidanr180@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="bi bi-clock"></i><?php
                            date_default_timezone_set('Asia/Jakarta');
                            $current_time = date('H:i:s');
                            echo 'Surabaya: ' . $current_time;
                            ?>
                            </p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h2 class="m-0 "><span class="">Gudang</span> Buku</h2>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">About Us</a>
                        <a href="sejarah.php" class="nav-item nav-link active">Our Collection</a>
                        <a href="kejadian.html" class="nav-item nav-link">Contact Me</a>
                        <a href="chart.php" class="nav-item nav-link">Login</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Peta</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="guide.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <?php  
  } else {
    // die("you cannot acces this one");
    ?> 
      <div class="d-flex" style="min-height: 100vh">
        <div class="d-flex mx-auto my-auto p-3 border border-danger border-3 rounded-3 flex-column">
          <h3><b>Username or Password is not correct</b></h3>
          <p>Make sure your input is correct!</p>
          <div class="d-flex flex-row justify-content-around">
            <a href="../" class="px-3 py-2 bg-primary mx-auto rounded-3 text-white text-decoration-none d-flex flex-row">
              <!-- SVG icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill me-1" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
              </svg>
              <span class="align-self-center ms-1 fw-semibold">Back to Home</span>
            </a>
            <a href="./form.php" class="px-3 py-2 bg-warning mx-auto rounded-3 text-white text-decoration-none d-flex flex-row">
              <!-- SVG icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
              </svg>
              <span class="align-self-center ms-1 fw-semibold">Try Login again</span>
            </a>
          </div>
        </div>
      </div>
    <?php
  }

  ?>
  <!-- <script>
  // calling redirect pages
  let getUrl = window.origin;

  function pageRedirect() { 
    window.location.replace(getUrl+'/k5_psi/uts/session/halaman2.php');
  } setTimeout('pageRedirect()', 2000);
  </script> -->

</body>
</html>