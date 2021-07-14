<?php
session_start();
?>
<html>
<head>
  <title>Trang đăng nhập</title>
  <meta charset="utf-8">
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
    $role= $_POST["role"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $user_name = strip_tags($user_name);
    $user_name = addslashes($user_name);
    $password = strip_tags($password);
    $password = addslashes($password);
    $role = strip_tags($role);
    $role = addslashes($role);
    if ($user_name == "" || $password =="" ||$role=="") {
      echo "user_name hoặc password bạn không được để trống!";
    }else{
      $sql = "select * from user where user_name = '$user_name' and password = '$password' and role='$role'";
      $query = mysqli_query($conn,$sql);
      $num_rows = mysqli_num_rows($query);
      if ($num_rows==0) {
        echo "tên đăng nhập hoặc mật khẩu không đúng !";
      }else{
        //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
        $_SESSION['user_name'] = $user_name;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index_admin.php');
      }
    }
  }
?>
  <div class="loginbox">
    <img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post" action="login_admin.php">
            <p>Username</p>
            <input type="text" name="user_name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <p>Password</p>
            <select name="role">
<option value="guest">guest</option>
<option value="admin">admin</option>
<br><br>
            
            <input type="submit" name="login" value="Login">
            <span> Don't have account? <a href="register.php">Register Here</a><br />
        </form>
        
    </div>
</body>
</html>