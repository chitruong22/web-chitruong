<?php 
 session_start();
$conn = mysqli_connect("localhost","root","","test");
?>
<?php
 echo "<script>alert('payment is successful, you can download music ')</script>";
?>

 <div class="container-fluid">
 <div class="row">
  <link rel="stylesheet" type="text/css" href="cart.css">
  <?php 
  if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) :
    ?>
    <div class="products" style="border: 2px solid black">
    <a href="single.php?id=<?php echo $item['song_id']?>" style="text-decoration: none;">
    <div><img src="admin/images/<?php echo $item['img']?>" class="img-cart" style="width: 250px;height: 250px;"></div>
    <h2><?php echo $item['song_name'] ?></h2>
        <audio controls >
          <source src="admin/audio/<?php echo $item['song_mp3'] ?>" type="audio/mpeg">
          </audio>
         </a>
         <br>
         </div>
           <?php
  endforeach;
  }
     ?>
  </div> 