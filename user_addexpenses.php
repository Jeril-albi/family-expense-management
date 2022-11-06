<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/expense.css">
    <link rel="stylesheet" href=" ./styles/user/userinsert_form.css">
    <title>Family Head</title>
</head>
<body>
    <div class="side-menu">
        <div class="logo-box"></div>
        <div class="name-box">
            <span class="user_type">Family Head</span>
            <span class="user_name">Name</span>
            <span class="family_name">Family Name</span>
        </div>
        <a href="user_dashboard.php"><div class="side-options"><i class="fa fa-home"></i> Dashboard</div></a>
        <a href="user_expenses.php"><div class="side-options active"><i class="fa fa-dollar"></i> Expenses</div></a>
        <a href="user_members.php"><div class="side-options "><i class="fa fa-user"></i> Members</div></a>
        <div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div>
        <div class="side-btn"> <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Expense</div>
    </div>
    <div class="main-section">
        <div class="main-wrapper">
        <br><br><br>
<div class="container">

<header>
        <h1 id='title'>Add Expenses</h1>
       
    </header>

<!--this is user expense insertion form-->
    
    <form id='insertform' action="user_addexpenses" method="POST">
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
            <input type='text' id='number' placeholder='$442'class='form-input-size' name="amount"/>
        </div>

        <div class='form-input'>
            
            <button type='submit' id='submit' name="submit">Add</button>
            
        </div>
    </form>
</div>
</div>
</div>
    
<?php
//db connection
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="projectphp";
$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if(!$conn){
   die('Could not Connect MySql Server:' .mysql_error());
 }

//data insert

if(isset($_POST['submit']))
{
$usr=$_POST['uname'];  
$dat=$_POST['mnth'];
$ety=$_POST['exptype'];
$exp=$_POST['amount'];
$sql="INSERT INTO member(memId,mont,exptype,amout)
VALUES ('$usr','$dat','$ety','$exp')";
 if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
 } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
 }
 mysqli_close($conn);
}
?>
       
</body>
</html>