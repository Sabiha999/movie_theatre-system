<?php 
session_start();
if (!isset($_SESSION['username_or_email'])) {
    header("Location: display.php");
    exit;
}
include ('includes/header.php');
include ('admin/config.php');
?>
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



<section id="center" class="center_home">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/crousel.1img.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
       <h1 class="font_60"> Deadpool 3: Wolverine's Return</h1>
	   <h6 class="mt-3">
	    <span class="col_red me-3">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
		 4.5 (Imdb)      Year : 2024
		 <a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block" href="#">Action</a>
	   </h6>
	   <p class="mt-3">Ryan Reynolds returns as Deadpool, joined by Hugh Jackman reprising his role as Wolverine in a highly anticipated crossover film.</p>
	   <p class="mb-2"><span class="col_red me-1 fw-bold">Starring:</span> Ryan Reynolds, Hugh Jackman, Morena Baccarin</p>
	   <p class="mb-2"><span class="col_red me-1 fw-bold">Genres:</span>Action, Comedy, Superhero</p>
	   <p><span class="col_red me-1 fw-bold">Runtime:</span> 2h 0min</p>	
	   <h6 class="mt-4"><a class="button" href="#"><i class="fa fa-play-circle align-middle me-1"></i> Watch Trailer</a></h6>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/crousel2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
       <h1 class="font_60">Sonic the Hedgehog 3</h1>
	   <h6 class="mt-3">
	    <span class="col_red me-3">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
		 4.5 (Imdb)      Year : 2024
		 <a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block" href="#">Action</a>
	   </h6>
	   <p class="mt-3">The third installment in the Sonic the Hedgehog film series, continuing the adventures of Sonic as he faces new challenges and villains</p>
	   <p class="mb-2"><span class="col_red me-1 fw-bold">Starring:</span>Ben Schwartz (voice of Sonic), Idris Elba (voice of Knuckles), Colleen O'Shaughnessey (voice of Tails).</p>
	   <p class="mb-2"><span class="col_red me-1 fw-bold">Genres:</span> Action, Adventure, Comedy, Family</p>
	   <p><span class="col_red me-1 fw-bold">Runtime:</span> 1h 40m</p>	
	   <h6 class="mt-4"><a class="button" href="#"><i class="fa fa-play-circle align-middle me-1"></i> Watch Trailer</a></h6>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/crousel3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
       <h1 class="font_60"> The Marvels</h1>
	   <h6 class="mt-3">
	    <span class="col_red me-3">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
		 4.5 (Imdb)      Year : 2024
		 <a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block" href="#">Action</a>
	   </h6>
	   <p class="mt-3">A sequel to Captain Marvel, bringing together Carol Danvers, Kamala Khan, and Monica Rambeau as they team up to face a new cosmic threat.</p>
	   <p class="mb-2"><span class="col_red me-1 fw-bold">Starring:</span> Brie Larson (Carol Danvers/Captain Marvel), Iman Vellani (Kamala Khan/Ms. Marvel)</p>
	   <p class="mb-2"><span class="col_red me-1 fw-bold">Genres:</span> Action, Adventure, Superhero, Sci-Fi</p>
	   <p><span class="col_red me-1 fw-bold">Runtime:</span> 1h 45m</p>	
	   <h6 class="mt-4 mb-0"><a class="button" href="#"><i class="fa fa-play-circle align-middle me-1"></i> Watch Trailer</a></h6>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<section id="trend" class="pt-4 pb-5">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Latest <span class="col_red">Movies</span></h4>
   </div>
  </div>
  <div class="col-md-6 col-6">
  <div class="trend_1r text-end">
          <h6 class="mb-0"><a id="viewAllBtn" class="button" href="#"> View All</a></h6>
        </div>
  </div>
 </div>
 <div class="row trend_2 mt-4">
 <div id="carouselSection">

   <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="trend_2i row">
	    <div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/GpWbHx_3TaA?si=MdqV9OS685Uzhh4_"><img src="img/johnwickorg (1).jpg" class="w-100" alt="img25"></a>
		</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">John Wick</a></h5>
			<p class="mb-2">It is about a former hitman seeking vengeance in a gritty...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">28k Views</p>
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
	<a href="https://www.youtube.com/embed/lV1OOlGwExM?si=oEIQAerXUQrZ118j"><img src="img/godzillaorg (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Godzilla (2024)</a></h5>
			<p class="mb-2">It is about a massive monster wreaking havoc and battling...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">188k Views</p>
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/WDkg3h8PCVU?si=WBbfSGfudphjoN-z"><img src="img/aquaman (1).jpg" class="w-100" alt="img25"></a>
		</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Aqua Man</a></h5>
			<p class="mb-2">It is about a reluctant hero embracing his underwater...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">15k Views</p>
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/XJMuhwVlca4?si=TIi5TgyluowivGaN"><img src="img/furiosa (1).jpg" class="w-100" alt="img25"></a>
</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Furiosa</a></h5>
			<p class="mb-2">It follows the fierce warrior Furiosa as she embarks...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">50k Views</p>
		  </div>  
		</div>
	  </div>
    </div>
    <div class="carousel-item">
      <div class="trend_2i row">
	    <div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/mfmrPu43DF8?si=Dj7A6Mgl0Yre_Gcp"><img src="img/the_hunger (2).jpg" class="w-100" alt="img25"></a>
		</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">The Hunger Games</a></h5>
			<p class="mb-2">It is a dystopian story about a girl forced to fight...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">18k Views</p>
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/XrXjpgneIJE?si=7wX9HJkOrHd_0pyu"><img src="img/the_exorcist (1).jpg" class="w-100" alt="img25"></a>
		</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Sijjin</a></h5>
			<p class="mb-2">It is a Turkish thriller about a police officer investigating...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">60k Views</p>
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/JXOzMFmg_2w?si=QGZ1gsegjEJkNeZz"><img src="img/avatar2022 (1).jpg" class="w-100" alt="img25"></a>
		</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Avengers</a></h5>
			<p class="mb-2">It is about a team of superheroes uniting to save...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">75k Views</p>
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/HyNJ3UrGk_I?si=AA2eanad41y7yDx-"><img src="img/equalizer (2).jpg" class="w-100" alt="img25"></a>
		</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">The Equalizer</a></h5>
			<p class="mb-2">It follows a former black-ops operative using ...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">100k Views</p>
		  </div>  
		</div>
	  </div>
    </div>
  </div>
   </div>
 </div>
 <div id="gridSection" style="display: none;">
  <div class="row">
    <div class="col-md-3 col-6">
      <div class="trend_2im clearfix position-relative">
        <div class="trend_2im1 clearfix">
          <div class="grid">
		  <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/GpWbHx_3TaA?si=MdqV9OS685Uzhh4_"><img src="img/johnwickorg (1).jpg" class="w-100" alt="img25"></a>
		</figure>
          </div>
        </div>
        <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
          <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
        </div>
      </div>
      <div class="trend_2ilast bg_grey p-3 clearfix">
        <h5><a class="col_red" href="#">John Wick</a></h5>
        <p class="mb-2">It is about a former hitman seeking vengeance in a gritty...</p>
        <span class="col_red">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p class="mb-0">28k Views</p>
      </div>
    </div>
          <div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/nAYKaslCXPc?si=nPMnFhX96h-3Wbhl"><img src="img/godzilla2 (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Godzilla (2024)</a></h5>
			<p class="mb-2">It is about a massive monster wreaking havoc and battling...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">188k Views</p>
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/WDkg3h8PCVU?si=WBbfSGfudphjoN-z"><img src="img/aquaman (1).jpg" class="w-100" alt="img25"></a>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Aqua Man</a></h5>
			<p class="mb-2">It is about a reluctant hero embracing his underwater...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">15k Views</p>
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/XJMuhwVlca4?si=TIi5TgyluowivGaN"><img src="img/furiosa (1).jpg" class="w-100" alt="img25"></a>
		</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Furiosa</a></h5>
			<p class="mb-2">It follows the fierce warrior Furiosa as she embarks...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">50k Views</p>
		  </div>  
		</div>
	
    <div class="carousel-item">
      <div class="trend_2i row">
	    <div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/mfmrPu43DF8?si=Dj7A6Mgl0Yre_Gcp"><img src="img/the_hunger (2).jpg" class="w-100" alt="img25"></a>
		</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">The Hunger Games</a></h5>
			<p class="mb-2">It is a dystopian story about a girl forced to fight...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">18k Views</p>
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/XrXjpgneIJE?si=7wX9HJkOrHd_0pyu"><img src="img/the_exorcist (1).jpg" class="w-100" alt="img25"></a>
		</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Sijjin</a></h5>
			<p class="mb-2">It is a Turkish thriller about a police officer investigating...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">60k Views</p>
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/JXOzMFmg_2w?si=QGZ1gsegjEJkNeZz"><img src="img/avatar2022 (1).jpg" class="w-100" alt="img25"></a>
		</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Avengers</a></h5>
			<p class="mb-2">It is about a team of superheroes uniting to save...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">75k Views</p>
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
		  <a href="https://www.youtube.com/embed/HyNJ3UrGk_I?si=AA2eanad41y7yDx-"><img src="img/equalizer (2).jpg" class="w-100" alt="img25"></a>
		</figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">The Equalizer</a></h5>
			<p class="mb-2">It follows a former black-ops operative using ...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">100k Views</p>
		  </div>
		  </div>  
		</div>
        </div>
      </div>
    </div>

  
</section>


<section id="popular" class="pt-4 pb-5 bg_grey">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Trending <span class="col_red">Events</span></h4>
   </div>
  </div>
 </div>
 <div class="row popular_1 mt-4">
   <ul class="nav nav-tabs  border-0 mb-0">
    <li class="nav-item">
        <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
            <span class="d-md-block">JUST ARRIVED</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
            <span class="d-md-block">POPULAR EVENTS</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">TV SHOWS</span>
        </a>
    </li>
	<li class="nav-item">
        <a href="#settings_o" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">FREE MOVIES</span>
        </a>
    </li>
	
</ul>
 </div>
 <div class="popular_2 row mt-4">
   <div class="tab-content">
    <div class="tab-pane active" id="home">
	  <div class="popular_2i row">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/73_1biulkYk?si=BL1jH-KeOG6KUGLU"><img src="img/wolverine2 (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Deadpool: Wolverine</a></h5>
		   <h6>Action, Drama, Superhero</h6>
		   <h6> Imdb 8.2  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2024 <span class="ms-2">Runtime: 1h 49m</span></h6>
		   <p> A gruff antihero with healing powers and adamantium claws embarks on a journey for redemption and vengeance while battling both internal and external foes.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/_OKAwz2MsJs?si=Dy3A7ekl5f_TQLHC"><img src="img/joker (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Joker</a></h5>
		   <h6>Drama, Crime, Thriller</h6>
		   <h6> Imdb 8.3  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2024 <span class="ms-2">Runtime: 2h 29m</span></h6>
		   <p> A troubled comedian descends into madness and becomes the iconic villain, Joker, in a dark exploration of societal neglect and personal chaos.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
	  <div class="popular_2i row mt-4">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/nAYKaslCXPc?si=nPMnFhX96h-3Wbhl"><img src="img/godzilla2 (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Godzilla: Minus One</a></h5>
		   <h6>Action, Sci-Fi, Monster</h6>
		   <h6> Imdb 8.4  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 59m</span></h6>
		   <p>Godzilla resurfaces to wreak havoc in a post-war setting, confronting new threats and challenging humanity's resolve.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/6ZfuNTqbHE8?si=FopKgHfrotse51sa"><img src="img/marvels2 (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Avengers: The Kang Dynasty</a></h5>
		   <h6>Action, Adventure, Sci-Fi</h6>
		   <h6> Imdb 8.6  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 48m</span></h6>
		   <p>The Avengers unite to battle Kang the Conqueror, a powerful time-traveling adversary threatening the fabric of reality.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
    </div>
    <div class="tab-pane" id="profile">
       <div class="popular_2i row">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/OAZWXUkrjPc?si=TtCFlxwfSREwo3Xj" ><img src="img/nepolean (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Napoleon</a></h5>
		   <h6>Biography, Drama, Historical</h6>
		   <h6> Imdb 8.2  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 49m</span></h6>
		   <p>A sweeping historical epic exploring the life and military genius of Napoleon Bonaparte, focusing on his rise to power and complex prsonal life..</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/otNh9bTjXWg?si=epzl4CQmoGykn7YF" ><img src="img/wonka (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Wonka</a></h5>
		   <h6>Adventure, Family, Fantasy</h6>
		   <h6> Imdb 8.3  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 2h 29m</span></h6>
		   <p> A whimsical prequel exploring the early adventures of Willy Wonka before he became the iconic chocolatier known for his magical factory.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
	  <div class="popular_2i row mt-4">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/FV3bqvOHRQo?si=4NiXlTI8c0nGT-sa" ><img src="img/aquaman2 (1).jpg" class="w-100" alt="img25"></a>
		  </figure>

	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Aquaman and the Lost Kingdom</a></h5>
		   <h6> Action, Adventure, Fantasy</h6>
		   <h6> Imdb 8.4  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 59m</span></h6>
		   <p>Aquaman must unite with old allies to protect Atlantis and the world from a new threat emerging from ancient depths.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/LtUWlp7tO3s?si=VdSn3OyL1RVI9gi4" ><img src="img/equalizertrend (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">The Equalizer 4</a></h5>
		   <h6>Action, Crime, Thriller</h6>
		   <h6> Imdb 8.6  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 48m</span></h6>
		   <p>Robert McCall returns for more justice-driven action, using his skills to confront a new wave of dangerous adversaries.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
    </div>
    <div class="tab-pane" id="settings">
       <div class="popular_2i row">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/OzYxJV_rmE8?si=JfOk0iIDCqvyrM1p" ><img src="img/succession (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Succession</a></h5>
		   <h6>Drama, Thriller</h6>
		   <h6> Imdb 8.2  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 49m</span></h6>
		   <p>A high-stakes drama about a powerful media family's ruthless power struggle as they vie for control of the family's global empire.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/gBmkI4jlaIo?si=3wnBI2r5OS_nGJCJ" ><img src="img/the_bear (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">The Bear</a></h5>
		   <h6>Drama, Comedy</h6>
		   <h6> Imdb 8.3  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 2h 29m</span></h6>
		   <p>A young chef returns to run his family's struggling restaurant, navigating the intense pressures of the culinary world while dealing with personal and professional challenges.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
	  <div class="popular_2i row mt-4">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/b9EkMc79ZSU?si=xT1AfxGbYzKaEn5d" ><img src="img/stranger_things (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Stranger Things</a></h5>
		   <h6>Sci-Fi, Horror, Drama</h6>
		   <h6> Imdb 8.4  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 59m</span></h6>
		   <p>A group of kids in a small town uncover a series of supernatural mysteries involving secret government experiments and a parallel dimension..</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/uLtkt8BonwM?si=G2HhlX7eYZd2VTAV"><img src="img/the_last_of_us (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">The Last of Us</a></h5>
		   <h6>Drama, Action, Horror</h6>
		   <h6> Imdb 8.6  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 48m</span></h6>
		   <p>In a post-apocalyptic world ravaged by a fungal infection, a grizzled survivor and a young girl navigate dangerous landscapes in a quest for hope and a cure.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
    </div>
	
	<div class="tab-pane" id="settings_o">
	    <div class="popular_2i row">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/3u7EIiohs6U?si=6gWjQ2nzwo4MjBfJ"><img src="img/tad lesso (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Ted Lasso</a></h5>
		   <h6>Comedy, Drama, Sports</h6>
		   <h6> Imdb 8.2  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 49m</span></h6>
		   <p>An American football coach is hired to manage a struggling English soccer team, using his unflagging optimism and unconventional methods to inspire and unite his players.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/gpv7ayf_tyE?si=X73bF9yUzvCqFp2A"><img src="img/bridgerton (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Bridgerton</a></h5>
		   <h6>Drama, Romance, Period</h6>
		   <h6> Imdb 8.3  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 2h 29m</span></h6>
		   <p>Set in Regency-era London, this drama follows the wealthy Bridgerton family as they navigate high society's scandalous intrigues, romantic entanglements, and societal expectations.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
	  <div class="popular_2i row mt-4">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/mnd7sFt5c3A?si=08mY9Yahj2BFUtxJ"><img src="img/squid game (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Stranger Things</a></h5>
		   <h6>Sci-Fi, Horror, Drama</h6>
		   <h6> Imdb 8.4  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 59m</span></h6>
		   <p>A group of kids in the 1980s uncover a series of supernatural events and government conspiracies in their small town after the mysterious disappearance of a friend.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
			  <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/aOC8E8z_ifw?si=ShS8llxqU-aAuMOz"><img src="img/mandalorian (1).jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">The Mandalorian</a></h5>
		   <h6>Action, Adventure, Sci-Fi</h6>
		   <h6> Imdb 8.6  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 48m</span></h6>
		   <p>A lone bounty hunter in the outer reaches of the galaxy takes on dangerous missions while protecting a mysterious child with powerful abilities.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
    </div>
	
</div>
 </div>
</div>
</section>

<section id="choice" class="pt-4 pb-5">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Director's  <span class="col_red">Choice</span></h4>
   </div>
  </div>
  <div class="col-md-6 col-6">
   <div class="trend_1r text-end">
     <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
   </div>
  </div>
 </div>
 <div class="row trend_2 mt-4">
   <div id="carouselExampleCaptions3" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="trend_2i row">
	    <div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/Pj0wz7zu3Ms?si=qyZB0bxeStxjRW8k"><img src="img/red_notice.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">The Red Notice</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">28k Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/BU2eYAO31Cc?si=IkaUXgWX68KeZcZk" ><img src="img/possession.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">The Exorcist</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">17k Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/8ugaeA-nMTc?si=w_j0DwqOaxu5wlAm"><img src="img/avg engame.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Iron Man</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">49k Views</p>
		   </div>
		  </div>
		    
		</div>
		
	  </div>
    </div>
    <div class="carousel-item">
      <div class="trend_2i row">
	    
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/TDPsg54Q2B4?si=OgnsO4AWgTnvIsNk" ><img src="img/doomstays.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Doomstay</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">90k Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
			 <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/zgNOS5ofQhw?si=hRbN5p7XBVHVZuoo"><img src="img/the killer.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">The Killer</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">61k Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
			 <figure class="effect-jazz mb-0">
			<a href="https://www.youtube.com/embed/HyNJ3UrGk_I?si=1kFS3o5a0i1X9B8B" ><img src="img/the color purple.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">The Equalizer</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">55k Views</p>
		   </div>
		  </div>

		    
		</div>
	  </div>
    </div>
    
  </div>

</div>
 </div>
</div>
</section>

<section id="play">
<div class="play_m clearfix">
 <div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Top   <span class="col_red">10 Playlist</span></h4>
   </div>
  </div>
 </div>
 <div class="play1 row mt-4 bg_grey pt-3 pb-3">
  <div class="col-md-9">
   <div class="play1l">
     <div class="grid clearfix">
	            <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/god father.jpg" class="w-100" height="450" alt="abc"></a>
				  </figure>
			  </div>
   </div>
  </div>
  <div class="col-md-3 ps-0">
   <div class="play1r">
     <div class="play1ri">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/dune.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
	 <div class="play1ri mt-3">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/avager 3.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
	 <div class="play1ri mt-3">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/wind.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
	 <div class="play1ri mt-3">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/the color purple.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
	 <div class="play1ri mt-3">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/the hunger game.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
	 <div class="play1ri mt-3">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/red_notice.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
   </div>
  </div>
 </div>
 <div class="play2 row mt-4">
  <div class="col-md-4 p-0">
   <div class="play2l">
     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="https://www.youtube.com/embed/kwaSP0573AI?si=fu6rqsa6h-0EVEYT"><img src="img/sijjin (2).jpg" height="515" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
   </div>
  </div>
  <div class="col-md-8 p-0">
   <div class="play2r  bg_grey p-4">
	   <h5><span class="col_red">BEST MOVIE OF THE MONTH :</span> SIJJIN <span class="col_red">BLACKLIGHT</span><br>
A WORLD OF BLACK MAGIC</h5>
      <h5 class="mt-3">Thriller</h5>
	  <hr class="line">
	  <p class="mt-3">A gripping Turkish thriller about a police officer investigating a series of chilling and mysterious crimes that lead to dark, unsettling truths.</p>
	  <div class="play2ri row mt-4">
	   <div class="col-md-6">
	    <div class="play2ril">
		 <h6 class="fw-normal">
Running Time: <span class="pull-right">1 hr 30 min</span></h6>
         <hr class="hr_1">
		  <h6 class="fw-normal">
Genre: <span class="pull-right">Thriller</span></h6>
         <hr class="hr_1">
		 <h6 class="fw-normal">
Director: <span class="pull-right">Alper Çağlar</span></h6>
         <hr class="hr_1">
		  <h6 class="fw-normal">
Star: <span class="pull-right"> Erdal Beşikçioğlu</span></h6>
         <hr class="hr_1">
		 <h6 class="fw-normal">
Release Year: <span class="pull-right">2023</span></h6>
         <hr class="hr_1 mb-0">
		</div>
	   </div>
	
	  </div>
   </div>
  </div>
 </div>
</div>
</div>
</section>

<?php
include('includes/streamingservices.php');
include('footer.php');
?>

<script>
window.onscroll = function() {myFunction()};

var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;

function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}

</script>

<script>
document.getElementById('viewAllBtn').addEventListener('click', function(event) {
  event.preventDefault(); // Prevent default anchor behavior
  document.getElementById('carouselSection').style.display = 'none';
  document.getElementById('gridSection').style.display = 'block';
});
</script>

</body>

</html>