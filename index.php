<?php include 'menu.php'; ?>
 		<!-- ========== Carosoul Start ==========-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

		<!--======== Catagories Start ========-->
<a id="nature">
<section class="my-5">
	<div class="container-fluid">
	<div class="py-5">
		<h2 class="text-center">Nature</h2>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/nature1.jpg" class="img-fluid pb-3">
		</div>

		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/nature2.jpg" class="img-fluid pb-3">
		</div>

		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/nature3.jpg" class="img-fluid pb-3">
		</div>
	</div>
	</div>
</section></a>

<a id="architecture">
<section class="my-5">
	<div class="container-fluid">
	<div class="py-5">
		<h2 class="text-center">Architechture</h2>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/nature3.jpg" class="img-fluid pb-3">
		</div>

		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/nature2.jpg" class="img-fluid pb-3">
		</div>

		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/nature1.jpg" class="img-fluid pb-3">
		</div>
	</div>
	</div>
</section></a>

<a id="travel">
<section class="my-5">
	<div class="container-fluid">
	<div class="py-5">
		<h2 class="text-center">Travel</h2>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/nature1.jpg" class="img-fluid pb-3">
		</div>

		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/nature2.jpg" class="img-fluid pb-3">
		</div>

		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/nature3.jpg" class="img-fluid pb-3">
		</div>
	</div>
	</div>
</section></a>

			<!--=========== Contact Us ===========-->
<a id="contact">
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact Us</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userdata.php" method="post">
			<div class="form-group">
					<label>Name:</label>
					<input type="text" name="name" class="form-control">	
			</div>
			<div class="form-group">
					<label>Email:</label>
					<input type="email" name="email" class="form-control">	
			</div>
			<div class="form-group">
					<label>Number:</label>
					<input type="text" name="number" class="form-control">	
			</div>
			<input type="submit" class="btn btn-success" name="submit">	
		</form>		
	</div>
</section></a>
			<!--=========== About Us ===========-->
<a id="about">
<section class="my-5 bg-dark about">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
		<h3 class="text-center px-5">Sojibuzzaman</h3>
		<p class="text-center px-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	</div>
</section>
</a>

<footer class="bg-dark py-2">
	<p class="text-white text-center">copyright@2022</p>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>