<?php
session_start();
?>
<html>
<head>
  <title>Trang đăng nhập</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
  //Gọi file connection.php ở bài trước
  $conn = mysqli_connect("localhost","root","","test");
  // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
  if (isset($_POST["login"])) {
    // lấy thông tin người dùng
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $user_name = strip_tags($user_name);
    $user_name = addslashes($user_name);
    $password = strip_tags($password);
    $password = addslashes($password);
    if ($user_name == "" || $password =="") {
      echo "user_name hoặc password bạn không được để trống!";
    }else{
      $sql = "select * from user where user_name = '$user_name' and password = '$password' ";
      $query = mysqli_query($conn,$sql);
      $num_rows = mysqli_num_rows($query);
      if ($num_rows==0) {
        echo "tên đăng nhập hoặc mật khẩu không đúng !";
      }else{
        //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
        $_SESSION['user_name'] = $user_name;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
      }
    }
  }
?>
  <div class="loginbox">
    <img src="admin/images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post" action="login.php">
            <p>Username</p>
            <input type="text" name="user_name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <span> Don't have account? <a href="register.php">Register Here</a><br />
        </form>
        
    </div>
</body>
</html>