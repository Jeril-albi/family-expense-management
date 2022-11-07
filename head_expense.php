<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/expense.css">
    <title>Family Head</title>
    <?php
    require 'connection.php';

    $expences_qry = "select * from expense";

    $con_file = new Connection();
    $con = $con_file->connect();
    $exp_qry_result = mysqli_query($con,$expences_qry);

    
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
        <a href="head_expense.php"><div class="side-options active"><i class="fa fa-dollar"></i> Expenses</div></a>
        <a href="head_add_member.php"><div class="side-options"><i class="fa fa-file-text"></i> Add Member</div></a>
        <a href="head_members.php"><div class="side-options "><i class="fa fa-user"></i> Members</div></a>
        <a href="login.php"><div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div></a>
        <div class="side-btn"> <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Expense</div>
        <div class="side-btn" style="background-color: rgb(6, 43, 122);;"> <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Report</div>
    </div>
    <div class="main-section">
        <div class="main-wrapper">
            <div class="title-box">
                <span>Expenses of Family Members</span>
            </div>
            <form method="POST">
            <div class="expense-box" >
                <?php 
                
                while($exp_qry_row = mysqli_fetch_array($exp_qry_result)){
                    $index = 0;
                    if(isset($_POST['delete_exp'])){
                        // $editQuery = "delete from expense where name='".$exp_qry_row['name']."' and exp_type='".$exp_qry_row['exp_type']."' and exp_amount=".$exp_qry_row['exp_amount']."";
                        // mysqli_query($con,$editQuery);
                        echo " ".$exp_qry_row[$index]['name']." ".$exp_qry_row['exp_type']."".$exp_qry_row['exp_amount']."";
                        $_POST['delete_exp'] = null;
                    }
                    echo 
                    '
                    <div class="expense-tile">
                    <span class="expense-mem-name">'.$exp_qry_row['name'].'</span>
                    <span class="expense-type">'.$exp_qry_row['exp_type'].'</span>
                    <div class="expense-side-box">
                        <span class="expense-amount">Amount: '.$exp_qry_row['exp_amount'].'</span>
                        <button type="submit" id="edit_exp" class="edit-btn" title="Edit" style="background-color: #254c7c;">
                        <i class="fa fa-pencil"></i>
                        </button>
                        <button type="submit" name="delete_exp" class="delete-btn" title="Delete" style="background-color: #254c7c;">
                        <i class="fa fa-trash"></i>
                        </button>
                    </div>
                </div>
                    ';
                    $index++;
                }
                ?>
                
            </div>
            </form>
        </div>
    </div>
</body>
</html>