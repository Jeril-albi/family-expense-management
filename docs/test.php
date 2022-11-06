<?php

@include 'config1.php';

session_start();

if(isset($_POST['submit'])){

   
   $email = $_POST['email'];
   $pass = $_POST['password'];
  
   $select = " SELECT * FROM test WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);
   if($email=='admin@gmail.com'&& $pass=='admin@123'){

    echo"admin";

      }

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'user'){

        echo"user";

      }
      if($row['user_type'] == 'head')
      {
   
       echo"head";
   
     }
   }

   

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email"  placeholder="enter your email">
      <input type="text" name="password" placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
   </form>

</div>

</body>
</html>