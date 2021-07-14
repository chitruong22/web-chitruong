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
			<!-- chi tiết sản phẩm -->
			<?php 
	        session_start();
	           $conn = mysqli_connect("localhost","root","","test");

	         ?>
	         <div class="container">
	          <div class="row">
	    <?php 
	    $id=$_GET["id"];
	    $sql="SELECT * FROM song,singer,genre Where song.singer_id=singer.singer_id and song.genre_id=genre.genre_id and song.song_id={$id} ";
	    $rs= mysqli_query($conn,$sql);
	    while ($row=mysqli_fetch_assoc($rs)) {
	     ?>
	        <div class="col-md-6" style=" text-align: left;">
	        <h2 class="song_name">Product Name : <?php echo $row['song_name'] ?></h2>
	        <p style="color: red;padding-left: 20px;"> Price: <?php echo $row['song_price']." $"; ?></p>
	   
	          <form method="POST" action="cart.php" class="quantity">
 		<input type="hidden" name="id" value="<?= $id?>"><br>
 		<button type="submit" style="background-color: blue;"
 		class="button-buy">ADD your cart </button>
 	 </form>
	          <script type="text/javascript">
	            function myAudio(event){
	              if(event.currentTime >60){
	                event.currentTime=0;
	                event.pause();
	                alert ("You need to pay for this song!")
	              }
	            }
	          </script>
	        <br>
	        <br>
	        <div style="border-bottom: 1px solid black"></div>
	        <br>
	        <p>
	          Basic song info:
	        </p>
	        <p><?php echo $row["song_lyric"]; ?></p>
	        <h4>type: <?php echo $row["singer_name"]; ?></h4>
	        <h5>Producer: <?php echo $row["genre_name"]; ?></h5>
	       
	        </div>
	        <div class="col-md-5">
	          <img src="admin/images/<?php echo $row['img']?>" style="width: 600px;height: 500px" >
	        </div>
	        <?php
	         }
	    	?>
	     </div>
	     </div>
	     <script src="css/jquery-3.3.1.min.js"></script>
				<script src="bootstrap/js/bootstrap.min.js"></script>
				</div>
				</div>
				</body>

				</html>