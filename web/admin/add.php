<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['user_name'])) {
   header('Location: login_admin.php');
}
?>
<html>
<head></head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
    	body{
    margin: 0;
    padding: 0;
    background: url('img/pic1.jpg');
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 420px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}

    </style>
<body>
    <div class="loginbox" style="height: 480px;">
        <h1>add song</h1>
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="song_name" placeholder="enter name">
            <input type="text" name="song_price" placeholder="enter price">
            <input type="text" name="song_lyric" placeholder="Enter lyric">
            <p>uploat file images</p>
            <input type="file" name="img" placeholder="Enter lyric">
             <p>uploat file mp3</p>
            <input type="file" name="mp3" placeholder="Enter lyric">
            <select name="singer_id">
<option value="7">sontung</option>
<option value="5">quân AP</option>
<br><br>
</select>
<select name="genre_id">
<option value="8">jock</option>
<option value="10">rap</option>
<br><br>
</select>
            <input type="submit" name="ADD" value="ADD">
        </form>
    </div>
    <?php
      $conn = mysqli_connect('localhost','root','','test');
      if (isset($_POST['ADD'])) {
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
      if($song_name=="" || $song_lyric=="" || $song_price=="" || $singer_id=="" || $genre_id=="" || $mp3_url=="" || $image_url==""){
             echo "<script>alert('mù ak! điền hết vào  ')</script>";
             echo"<script>window.open('add.php','_self')</script>";
      }else{
        $sql="insert into song values ('','$song_name','$mp3_url','$song_lyric','$genre_id','$singer_id','$image_url','$song_price')";
      $result = mysqli_query($conn,$sql);
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
  </body>
</html>
<!--  -->