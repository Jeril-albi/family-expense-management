<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/add_member.css">
    <link rel="stylesheet" href="./styles/admin/add_families.css">
    <title>Family Head</title>
    <?php
    require 'connection.php';
    $con_file = new Connection();
    $con = $con_file->connect();

    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $fam_name = $_POST['fam_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $add_fam_qry = "insert into family values('".$name."','".$fam_name."','".$email."','".$password."','user')";
        if (mysqli_query($con, $add_fam_qry)) {
            echo "New record has been added successfully !";
         } else {
            echo "Error: " . $add_fam_qry . ":-" . mysqli_error($con);
         }
         mysqli_close($con);
    }
    ?>
</head>
<body>
    <div class="side-menu">
    <div class="logo-box" style="background-image: url('logo.png');"></div>
        <div class="name-box">
            <span class="user_type">ADMIN</span>
        </div>
        <a href="admin_dashboard.php"><div class="side-options"><i class="fa fa-home"></i> Dashboard</div></a>
        <a href="admin_add_family.php"><div class="side-options active"><i class="fa fa-file-text"></i> Add Family</div></a>
        <a href="admin_familys.php"><div class="side-options "><i class="fa fa-user"></i> Families</div></a>
        <a href="login.php"><div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div></a>
        <div class="side-btn" style="background-color: rgb(6, 43, 122);;"> <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Report</div>
    </div>
    <div class="main-section">
        <div class="main-wrapper">
            <form method="post">
            <div class="form">
        <h1>Add Family</h1>
        <div class="content">
        <input type="text" name="fam_name" placeholder="FAMILY NAME">
    </div>
    <div class="content">
    <input type="text" name="name" placeholder="NAME">
</div>
<div class="content">
<input type="text" name="email" placeholder="Email">
</div>
<div class="content">
<input type="password" name="password" placeholder="PASSWORD">
</div>
<input type="submit" name="add"  class="btn" value="ADD">
</div>
            </form>
        
        </div>
    </div>
</body>
</html>