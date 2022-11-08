<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/dashboard.css">
    <title>Family Member</title>
    <?php
    require 'connection.php';
    $con_file = new Connection();
    $con = $con_file->connect();

    $t_exp_query = "select sum(exp_amount) as sum from expense where name";
    $no_mem_qry = "select count(name) as no_mem from member";
    $max_exp_query = "SELECT name,exp_amount FROM expense WHERE exp_amount = (SELECT MAX(exp_amount) from expense)";

    $exp_qry_result = mysqli_query($con,$t_exp_query);
    $max_exp_qry_result = mysqli_query($con,$max_exp_query);
    $no_mem_qry_result = mysqli_query($con,$no_mem_qry);

    $exp_qry_row = mysqli_fetch_assoc($exp_qry_result);

    $max_exp = mysqli_fetch_assoc($max_exp_qry_result);
    $no_mem_res = mysqli_fetch_assoc($no_mem_qry_result);

    $totalExp = $exp_qry_row['sum'];
    $no_mem = $no_mem_res['no_mem'];
    mysqli_close($con);

    ?>
</head>
<body>
    <div class="side-menu">
    <div class="logo-box" style="background: url('logo.png') center no-repeat;background-size: contain; "></div>
        <div class="name-box">
            <span class="user_type">Family Head</span>
            <span class="user_name">Name</span>
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