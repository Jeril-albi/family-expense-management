
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("login.jpeg");
  height: 100vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: relative;
  right: 0;
  top: 13rem;
  margin: 0 auto;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<?php
   require 'connection.php';
   require 'datas.php';

   $con_file = new Connection();
   $datas = new Datas();
   $con = $con_file->connect();

   if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == 'admin' && $password == 'admin@123'){
      $datas->usertype = 'admin';
      header("location: admin_dashboard.php");
    }

    $member_qry = "select user_type from member where email='".$email."'and password='".$password."'";
    $head_qry = "select user_type from family where email='".$email."'and password='".$password."'";

    $mem_result = mysqli_query($con,$member_qry);
    $head_result = mysqli_query($con,$head_qry);

    if(mysqli_num_rows($mem_result)>0){
      $res = mysqli_fetch_assoc($mem_result);
      if($res['user_type'] == 'member' ){
        $datas->usertype = "Family Member";
        $datas->name = $res['name'];
        $datas->familyName = $res['fam_name'];
        header("location: user_dashboard.php");
      }
    }

    if(mysqli_num_rows($head_result)>0){
      $res = mysqli_fetch_assoc($head_result);
      if($res['user_type'] == 'head' ){
        $datas->usertype = "Family Head";
        $datas->name = $res['name'];
        $datas->familyName = $res['fam_name'];
        header("location: head_dashboard.php");
      }
    }

   }
?>
</head>
<body>

<div class="bg-img">
  <form method="POST" class="container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="login" class="btn">Login</button>
  </form>
</div>

</body>
</html>
