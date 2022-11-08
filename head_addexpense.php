<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/expense.css">
    <link rel="stylesheet" href=" ./styles/user/userinsert_form.css">
    <title>Family Head</title>
    <?php
//db connection
require 'connection.php';
$con_file = new Connection();
$con = $con_file->connect();


//data insert

if(isset($_POST['head_submit']))
{
$usr=$_POST['uname'];  
$dat=$_POST['mnth'];
$ety=$_POST['exptype'];
$exp=$_POST['amount'];
$sql="INSERT INTO expense VALUES ('$usr','$ety','$exp','$dat','dad,'anfield')";
 if (mysqli_query($con, $sql)) {
    echo "New record has been added successfully !";
 } else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
 }
 mysqli_close($con);
}
?>
</head>
<body>
    <div class="side-menu">
    <div class="logo-box" style="background-image: url('logo.png');"></div>
        <div class="name-box">
            <span class="user_type">Family Head</span>
            <span class="user_name">Name</span>
            <span class="family_name">Family Name</span>
        </div>
        <a href="head_dashboard.php"><div class="side-options"><i class="fa fa-home"></i> Dashboard</div></a>
        <a href="head_expense.php"><div class="side-options"><i class="fa fa-dollar"></i> Expenses</div></a>
        <a href="head_add_member.php"><div class="side-options"><i class="fa fa-file-text"></i> Add Member</div></a>
        <a href="head_members.php"><div class="side-options "><i class="fa fa-user"></i> Members</div></a>
        <a href="login.php"><div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div></a>
        <a href="head_addexpense.php"><div class="side-btn"> <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Expense</div></a>  
       <div class="side-btn" style="background-color: rgb(6, 43, 122);;"> <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Report</div>
    </div>
    <div class="main-section">
        <div class="main-wrapper">
        <br><br><br>
<div class="container">

<header>
        <h1 id='title' >Add Expenses</h1>
       
    </header>

 <!--this is user expense insertion form-->
    
    <form id='insertform'  method="POST">
    <div class='form-input'>
            <label id='name-label'>Username</label>
            <input type='text' id='name' placeholder='jhon' class='form-input-size' required name="uname" />
        </div>
        <div class='form-input'>
            <label id='name-label'>month</label>
            <input type='text' id='name' placeholder='May' class='form-input-size' required name="mnth" />
        </div>
        <div class='form-input'>
            <label id='email-label'>Expense type</label>
            <input type='text' id='email' placeholder='Travel' class='form-input-size' required name="exptype"/>
        </div>
        <div class='form-input'>
            <label id='number-label'>Expense amount
                
            </label>
            <input type='text' id='number' placeholder='442'class='form-input-size' name="amount"/>
        </div>

        <div class='form-input'>
            
            <button type='submit' id='submit' name="head_submit">Add</button>
            
        </div>
    </form>
</div>
</div>
</div>
       
</body>
</html>