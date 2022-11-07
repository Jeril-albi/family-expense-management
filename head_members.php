<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/member.css">
    <title>Family Head</title>
    <?php
    require 'connection.php';

    $member_qry = "SELECT name from member WHERE member.head_name = 'dad' and member.fam_name ='anfield' ";

    $con_file = new Connection();
    $con = $con_file->connect();
    $member_qry_result = mysqli_query($con,$member_qry);
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
        <a href="head_add_member.php"><div class="side-options"><i class="fa fa-file-text"></i> Add Member</div></a>
        <a href="head_members.php"><div class="side-options active"><i class="fa fa-user"></i> Members</div></a>
        <a href="login.php"><div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div></a>
        <div class="side-btn"> <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Expense</div>
        <div class="side-btn" style="background-color: rgb(6, 43, 122);;"> <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Report</div>
    </div>
    <div class="main-section">
        <div class="main-wrapper">
            <div class="title-box">
                <span>Family Members</span>
            </div>
            <div class="expense-box">
                <?php
                while($members = mysqli_fetch_assoc($member_qry_result)){
                    echo 
                    '
                    <div class="expense-tile">
                    <span class="expense-type">'.$members['name'].'</span>
                    <div class="expense-side-box">
                        
                        <div class="delete-btn">
                            <i class="fa fa-trash"></i>
                        </div>
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