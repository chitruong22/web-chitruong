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
							<?php
							         $conn = mysqli_connect("localhost","root","","test");
							    
							          $get_pro = "select * from song LIMIT 0,8";
							          $run_pro = mysqli_query($conn, $get_pro);
					                 while($row_pro = mysqli_fetch_array($run_pro)){
					                $Song_id = $row_pro['song_id'];
							          $Song_name = $row_pro['song_name'];
							         $Song_image = $row_pro['img'];
							           $Song_price = $row_pro['song_price'];
							            $Song_mp3 = $row_pro['song_mp3'];
				                     echo "<div class='col-md-3 col-sm-6 col-12'>
								<div class='card card-product mb-3'>
								  <img class='card-img-top' src='admin/images/$Song_image' style='width: 280px;height: 280px' alt='Card image cap'>
								  <div class='card-body'>
								    <h5 class='card-title'>$Song_name</h5>
								    <h5 class='card-title' style='color:red'>$Song_price$</h5>
								    <p class='card-text'>
								    	
								    	</p>
								    <a class='btn btn-primary' href='single.php?id=$Song_id'> details</a>
								  </div>
								</div>
							</div>
				                               ";
				            }?>
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