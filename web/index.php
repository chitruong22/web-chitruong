			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" type="text/css" href="css/style1.css">
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

			</head>
			<body>
			<!-- menu -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <div class="container">
				  <a class="navbar-brand" href="#">Navbar</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

			      <div class="collapse navbar-collapse" id="navbarSupportedContent">
			          <ul class="navbar-nav mr-auto">
			              <li class="nav-item active">
			                  <a class="nav-link" href="#"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
			              </li>
			              <li class="nav-item">
			                  <a class="nav-link" href="cart.php"> <span class="glyphicon glyphicon-user"></span>your cart
			                  </a>
			              </li>
			              <li class="nav-item">
			                  <a class="nav-link" href="login.php"> <span class="glyphicon glyphicon-user"></span>login</a>
			              </li>
			          </ul>
			          
			          <form class="form-inline my-2 my-lg-0" method="GET" action="search2.php">
			              <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
			          </form>
			      </div>
			  </div>
			</nav>
			<!-- end menu -->
			<!-- slide -->
			<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="https://2.bp.blogspot.com/-RdxdaHN04PY/VuaoRYcibeI/AAAAAAAAC7c/RaNTdEZ66KMmPI7dMn6DMtoq9KDCQ5-rw/s1600/hinh-anh-do-choi-do-dung-mam-non.jpg" style="width: 1280px;height: 720px;" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://gotrangtri.vn/wp-content/uploads/2019/12/do-choi-tre-em-14.jpg" style="width: 1280px;height: 720px; "alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://channel.mediacdn.vn/prupload/156/2018/04/img20180426144802904.jpg" style="width: 1280px;height: 720px;" alt="Third slide">
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
			<!-- end slide -->
			<!-- list product -->
			<div class="container">
				<div class="row mt-5">
					<h2 class="list-product-title">New product</h2>
					<div class="list-product-subtitle">
						<p>List product description</p>
					</div>
					<div class="product-group">
						<div class="row">							
				                    <div class='col-md-3 col-sm-6 col-12'>
								<div class='card card-product mb-3'>
								  <img class='card-img-top' src='https://gotrangtri.vn/wp-content/uploads/2019/12/do-choi-cho-be-trai-1-tuoi-3.jpg' style='width: 280px;height: 280px' alt='Card image cap'>
								  <div class='card-body'>
								    <h5 class='card-title'>Product1</h5>
								    <h5 class='card-title' style='color:red'>20$</h5>
								    <p class='card-text'>								    	
								    	</p>

								  </div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- end list product -->

			<!-- Load jquery trước khi load bootstrap js -->
			<script src="css/jquery-3.3.1.min.js"></script>
			<script src="bootstrap/js/bootstrap.min.js"></script>
			</div>
			</div>
			</body>

			</html>
