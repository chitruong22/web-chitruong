<html>
<head></head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
<body>
    <div class="loginbox" style="height: 480px;">
        <h1>Register</h1>
        <form method="post">
            <p>Username</p>
            <input type="text" name="user_name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <p>fullname</p>
            <input type="text" name="fullname" placeholder="Enter Username">
            <input type="submit" name="register" value="Register">
            <span> now you can login  <a href="login.php">Login Here</a><br />
        </form>
        
    </div>
    <?php
  $conn = mysqli_connect('localhost','root','','test');
  if (isset($_POST['register'])) { 
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $fullname=$_POST['fullname'];
    $sql="insert into user values ('','$username','$password','$fullname','')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
      echo "<script>alert('Account has been created successfully!')</script>";
     echo"<script>window.open('login.php','_self')</script>";
    }
    else{
      echo"<script>alert('Error')</script>";
    }  
  }
  ?>
  </body>
</html>