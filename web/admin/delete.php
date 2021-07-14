<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['user_name'])) {
   header('Location: login_admin.php');
}
?>
<?php
$conn = mysqli_connect("localhost","root","","test");
 $id=$_GET["id"];
  $sql = "DELETE from song WHERE song_id={$id}";
  if(mysqli_query($conn, $sql) ) {
  	echo "<script>alert('successfully!')</script>";
        echo"<script>window.open('index_admin.php','_self')</script>";
  } else {
  	echo "An error occurred:".mysqli_error($conn);
  }
?>