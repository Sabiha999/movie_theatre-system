
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MovieNite</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>



</head>

<body>


<section id="top">
<div class="container">
 <div class="row top_1">
  <div class="col-md-3">
   <div class="top_1l pt-1">
    <h3 class="mb-0"><a class="text-white" href="index.php"><i class="fa fa-video-camera col_red me-1"></i> MovieNite</a></h3>
   </div>
  </div>
  <div class="col-md-5">
   <div class="top_1m">
 
   </div>
  </div>
  <div class="col-md-4">
   <div class="top_1r text-end">
     <ul class="social-network social-circle mb-0">
			<li><a href="https://www.instagram.com/accounts/login/?hl=en" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://www.facebook.com/login/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://x.com/i/flow/login" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://www.youtube.com/" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
		</ul>
   </div>
  </div>
 </div>
</div>
</section>

<section id="header">
<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="index.php"><i class="fa fa-video-camera col_red me-1"></i> MovieNite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="blog.php">Blog</a></li>
            <li><a class="dropdown-item border-0" href="blog_detail.php">Blog Detail</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="team.php">Team</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        
		<li class="nav-item">
          <a class="nav-link" href="booking.php">Book Tickets</a>
        </li>
      </ul>
    </div>
    <div class="header-container">
          <p>Hello, <?php echo htmlspecialchars($_SESSION['username_or_email']); ?> | 
                Date: <?php echo date('Y-m-d'); ?> |
                Time: <?php echo date('H:i:s'); ?>
            </p>
            <a href="./includes/logout.php" class="btn btn-danger ">Logout</a>
        </div>
  </div>
</nav>
</section>


</body>

</html>