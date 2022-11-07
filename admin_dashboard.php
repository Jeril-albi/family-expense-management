<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/dashboard.css">
    <title>Family Head</title>
    <?php
    require 'connection.php';
    $con_file = new Connection();
    $con = $con_file->connect();

    $t_exp_query = "select sum(exp_amount) as sum from expense";
    $fam_no_query = "select count(fam_name) as f_no from family";

    $t_exp_qry_result = mysqli_query($con,$t_exp_query);
    $fam_no_qry_result = mysqli_query($con,$fam_no_query);

    $exp_qry_row = mysqli_fetch_assoc($t_exp_qry_result);
    $fam_no_qry_row = mysqli_fetch_assoc($fam_no_qry_result);

    $totalExp = $exp_qry_row['sum'];
    $famNo = $fam_no_qry_row['f_no']
    ?>
</head>
<body>
    <div class="side-menu">
        <div class="logo-box">
        </div>
        <div class="name-box">
            <span class="user_type">ADMIN</span>
        </div>
        <a href="admin_dashboard.php"><div class="side-options active"><i class="fa fa-home"></i> Dashboard</div></a>
        <a href="admin_add_family.php"><div class="side-options "><i class="fa fa-file-text"></i> Add Family</div></a>
        <a href="admin_familys.php"><div class="side-options "><i class="fa fa-user"></i> Families</div></a>
        <a href="login.php"><div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div></a>
        <div class="side-btn" style="background-color: rgb(6, 43, 122);;"> <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Report</div>
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
                    <?php 
                    if(empty($totalExp)){
                        echo"<span> 0 </span>";
                    }else{
                        echo"<span>".$totalExp."</span>" ;
                    }
                    ?>
                    <i class="fa fa-usd" style="margin-left: 4rem; color: aquamarine;" aria-hidden="true"></i>
                </div>
                <div class="top-value-box">
                    <span class="box-title">NO  OF FAMILIES</span> <br>
                    <?php 
                    if(empty($totalExp)){
                        echo"<span> 0 </span>";
                    }else{
                        echo"<span>".$famNo."</span>" ;
                    }
                    ?>
                    <i class="fa fa-user" style="margin-left: 6rem; color: aquamarine;" aria-hidden="true"></i>
                </div>
                <div class="top-value-box">
                    <span class="box-title">HIGHEST EXPENSE</span> <br>
                    <span> 9643</span>
                    <i class="fa fa-usd" style="margin-left: 5rem; color: aquamarine;" aria-hidden="true"></i>
                </div>
                </div>
        </div>
    </div>
</body>
</html>