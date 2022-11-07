<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/dashboard.css">
    <title>Family Head</title>
</head>
<body>
    <div class="side-menu">
        <div class="logo-box">
        </div>
        <div class="name-box">
            <span class="user_type">Family Member</span>
            <span class="user_name" name="uname" method="POST" action="user_dashboard.php">
                <form name="uname" method="POST" action="user_dashboard.php">
            Jhon
        </form>
    </span>
            <span class="family_name">Family Name</span>
        </div>
        <a href="user_dashboard.php"><div class="side-options active"><i class="fa fa-home"></i> Dashboard</div></a>
        <a href="user_expenses.php"><div class="side-options"><i class="fa fa-dollar"></i> Expenses</div></a>
        <a href="user_members.php"><div class="side-options "><i class="fa fa-user"></i> Members</div></a>
       <a href="login.php"><div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div></a>
       <a href="user_addexpenses.php"><div class="side-btn"> <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Expense</div></a> 
    </div>
    <div class="main-section">
        <div class="main-wrapper">
            <div class="title-box">
                <div class="title-f-text">OVERVIEW</div>
                <span>Dashboard</span>
            </div>
            <div class="top-box" style="margin-top: 2rem; display: flex; justify-content: space-evenly;">
                <div class="top-value-box">
                    <span class="box-title">TOTAL EXPENSE</span> <br>
                    <span>

                    <?php
//db connection
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="projectphp";
$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if(!$conn){
//    die('Could not Connect MySql Server:' .mysql_error());
 }

 //sum showing

$to_exp=$_POST['uname'];  

echo $sql="SELECT SUM(amout) as $to_exp FROM member WHERE memId='jhon'";
 if ( mysqli_query($conn, $sql)) {
   echo $to_exp;
 } else {
   echo "Error: " . $sql . ":-" . mysqli_error($conn);
 }
 mysqli_close($conn);
 ?>

</span>
                    <i class="fa fa-usd" style="margin-left: 4rem; color: aquamarine;" aria-hidden="true"></i>
                </div>
                <div class="top-value-box">
                    <span class="box-title">NO  OF EXPENSE</span> <br>
                    <span> 3</span>
                    <i class="fa fa-list-ol" style="margin-left: 6rem; color: aquamarine;" aria-hidden="true"></i>
                </div>
                <div class="top-value-box">
                    <span class="box-title">HIGHEST EXPENSE</span> <br>
                    <span> college fees ( 785 )</span>
                </div>
                </div>
        </div>
    </div>
</body>
</html>