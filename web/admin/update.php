<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['user_name'])) {
   header('Location: login_admin.php');
}
?>
<?php
$conn = mysqli_connect('localhost','root','','test');
$id = $_GET['id'];
$sql = mysqli_query( $conn , "SELECT * FROM song,singer,genre Where song.singer_id=singer.singer_id and song.genre_id=genre.genre_id and song.song_id={$id} " );
$row =  mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
<head>
<style> 
	.a{
		 width: 100%;
  height: 50px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
	}
.container {
    width: 30%;
    margin: auto;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
    input[type=text] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
 
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
 
input[type=submit]:hover {
    background-color: #45a049;
}
</style>
</head>

<body>
	<div class="container">
	<form class="form" method="post" enctype="multipart/form-data">
	  <label>Enter the product name </label>
		<input type="text" name="song_name" value="<?= $row['song_name'] ?>"/>
		<label>Enter the product price</label>
		<input type="text" name="song_price" value="<?= $row['song_price'] ?>">
		<textarea name="content"><?= $row['singer_name']?></textarea>
        <select name="singer_id">
        <option value="<?= $row['singer_id']?>"><?= $row['singer_name']?></option>	
        <option value="7">sontung</option>
        <option value="5">quân AP</option>
        <br><br>
        </select>
		<br>
		<textarea name="content"><?= $row['genre_name']?></textarea>
        <select name="genre_id">
        <option value="<?= $row['genre_id']?>"><?= $row['genre_name']?></option>	
        <option value="8">jock</option>
        <option value="10">rap</option>
        <br><br>
        </select>
		<br>
		<label>Enter product description</label>
		<span> <input type="text" class="a" name="song_lyric" value="<?= $row['song_lyric'] ?>"/></span>
		<img style="width: 150px;height: 150px; " class="anhsp" src="images/<?= $row['img']?>" /> 
		<input type="file" name="img" ><br>
	    <label>Choose the image for product</label><br>

		<audio controls controlsList="nodownload" style="width: 250px" style="">
	          <source src="audio/<?php echo $row['song_mp3'] ?>" type="audio/mpeg">
	          </audio>
	    <input type="file" name="mp3" style="margin: 5px;"><br>
		<input type="submit" name="update" value="update ">
	</form>
<?php
      $conn = mysqli_connect('localhost','root','','test');
      if (isset($_POST['update'])) {
      	$id = $_GET['id'];
        $path = "images/"; 
         $tmp_name = $_FILES['img']['tmp_name'];
         $name = $_FILES['img']['name'];
         move_uploaded_file($tmp_name, $path . $name);
         $image_url =$name;
         $path1 = "audio/";
         $tmp_name1 = $_FILES['mp3']['tmp_name'];
         $name1 = $_FILES['mp3']['name'];
         move_uploaded_file($tmp_name1, $path1 . $name1);
         $mp3_url = $name1;
      $song_name = $_POST['song_name'];
      $song_lyric=$_POST['song_lyric'];
      $song_price = $_POST['song_price'];
      $singer_id = $_POST['singer_id'];
      $genre_id = $_POST['genre_id'];
      if( $mp3_url=="" && $image_url==""){
            $sql1=" UPDATE song
SET song_name='$song_name', song_lyric='$song_lyric',genre_id='$genre_id',singer_id='$singer_id',song_price='$song_price'
WHERE song_id='$id'";

      $result = mysqli_query($conn,$sql1);
      if ($result) {
        echo "<script>alert('successfully!')</script>";
        echo"<script>window.open('index_admin.php','_self')</script>";
                   }
      else{
        echo"<script>alert('Error')</script>";
          } 
      }
      if($image_url==""){
            $sql1=" UPDATE song
SET song_name='$song_name',song_mp3='$mp3_url' , song_lyric='$song_lyric',genre_id='$genre_id',singer_id='$singer_id',song_price='$song_price'
WHERE song_id='$id'";

      $result = mysqli_query($conn,$sql1);
      if ($result) {
        echo "<script>alert('successfully!')</script>";
        echo"<script>window.open('index_admin.php','_self')</script>";
                   }
      else{
        echo"<script>alert('Error')</script>";
          } 
      }
      if( $mp3_url==""){
            $sql1=" UPDATE song
SET song_name='$song_name', song_lyric='$song_lyric',genre_id='$genre_id',singer_id='$singer_id',song_price='$song_price',img='$image_url'
WHERE song_id='$id'";

      $result = mysqli_query($conn,$sql1);

      if ($result) {
        echo "<script>alert('successfully!')</script>";
        echo"<script>window.open('index_admin.php','_self')</script>";
                   }
      else{
        echo"<script>alert('Error')</script>";
          } 
      }
      if(!empty($mp3_url)&&!empty($image_url)){
      	$sql1=" UPDATE song
SET song_name='$song_name',song_mp3='$mp3_url' , song_lyric='$song_lyric',genre_id='$genre_id',singer_id='$singer_id',song_price='$song_price',img='$image_url'
WHERE song_id='$id'";

      $result = mysqli_query($conn,$sql1);

      if ($result) {
        echo "<script>alert('successfully!')</script>";
        echo"<script>window.open('index_admin.php','_self')</script>";
                   }
      else{
        echo"<script>alert('Error')</script>";
          } 

      }
    }
    ?>

</div>
</body>
</html>