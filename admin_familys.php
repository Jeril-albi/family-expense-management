<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/member.css">
    <title>Family Head</title>
    <?php
    require 'connection.php';
    $con_file = new Connection();
    $con = $con_file->connect();

    $familes_query = "select name,fam_name from family";
    $familes_qry_result = mysqli_query($con,$familes_query);
    ?>
</head>
<body>
    <div class="side-menu">
    <div class="logo-box" style="background-image: url('logo.png');"></div>
        <div class="name-box">
            <span class="user_type">ADMIN</span>
        </div>
        <a href="admin_dashboard.php"><div class="side-options "><i class="fa fa-home"></i> Dashboard</div></a>
        <a href="admin_add_family.php"><div class="side-options "><i class="fa fa-file-text"></i> Add Family</div></a>
        <a href="admin_familys.php"><div class="side-options active"><i class="fa fa-user"></i> Families</div></a>
        <a href="login.php"><div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div></a>
        <div class="side-btn" style="background-color: rgb(6, 43, 122);;"> <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Report</div>
    </div>
    <div class="main-section">
        <div class="main-wrapper">
            <div class="title-box">
                <span>Family Members</span>
            </div>
            <div class="expense-box">
                <?php
                while($res = mysqli_fetch_assoc($familes_qry_result)){
                    echo 
                    '
                    <div class="expense-tile" style="height: 60px;">
                    <span class="expense-type">'.$res['name'].'</span><br>
                    <span class="expense-type">'.$res['fam_name'].'</span>
                    <div class="expense-side-box">
                        <!-- <span class="expense-amount">Total Expense: 487</span> -->
                    </div>
                </div>
                    ';
                }
                ?>
                
            </div>
        </div>
    </div>
</body>
</html>