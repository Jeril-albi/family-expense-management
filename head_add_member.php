<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/add_member.css">
    <link rel="stylesheet" href="./styles/head/add_members_new.css">
    <title>Family Head</title>
    <?php
    require 'connection.php';
    $con_file = new Connection();
    $con = $con_file->connect();

    if(isset($_POST['add_mem'])){
      $name = $_POST['name'];
      $email = $_POST['name'];
      $password = $_POST['password'];
      $mem_add_qry = "insert into member values('".$name."','Dad','Anfield','".$email."','".$password."')";
      if (mysqli_query($con, $mem_add_qry)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $mem_add_qry . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
    }

    ?>
</head>
<body>
    <div class="side-menu">
        <div class="logo-box"></div>
        <div class="name-box">
            <span class="user_type">Family Head</span>
            <span class="user_name">Name</span>
            <span class="family_name">Family Name</span>
        </div>
        <a href="head_dashboard.php"><div class="side-options"><i class="fa fa-home"></i> Dashboard</div></a>
        <a href="head_expense.php"><div class="side-options"><i class="fa fa-dollar"></i> Expenses</div></a>
        <a href="head_add_member.php"><div class="side-options active"><i class="fa fa-file-text"></i> Add Member</div></a>
        <a href="head_members.php"><div class="side-options "><i class="fa fa-user"></i> Members</div></a>
        <div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div>
        <div class="side-btn"> <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Expense</div>
        <div class="side-btn" style="background-color: rgb(6, 43, 122);;"> <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Report</div>
    </div>
    <div class="main-section">
        <div class="add_user_main-wrapper">
        <div class="container">
    <span class="title">Add Members</span>
    <div class="content">
      <form method="POST">
        <div class="user-details">
          <div class="input-box">
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="add_mem" value="ADD">
        </div>
      </form>
    </div>
  </div>
        </div>
    </div>
</body>
</html>