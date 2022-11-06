<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/member.css">
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
        <a href="head_dashboard.php"><div class="side-options"><i class="fa fa-home"></i> Dashboard</div></a>
        <a href="head_expense.php"><div class="side-options"><i class="fa fa-dollar"></i> Expenses</div></a>
        <a href="head_add_member.php"><div class="side-options"><i class="fa fa-file-text"></i> Add Member</div></a>
        <a href="head_members.php"><div class="side-options active"><i class="fa fa-user"></i> Members</div></a>
        <div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div>
        <div class="side-btn"> <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Expense</div>
        <div class="side-btn" style="background-color: rgb(6, 43, 122);;"> <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Report</div>
    </div>
    <div class="main-section">
        <div class="main-wrapper">
            <div class="title-box">
                <span>Family Members</span>
            </div>
            <div class="expense-box">
                <div class="expense-tile">
                    <span class="expense-type">Jeril</span>
                    <div class="expense-side-box">
                        <span class="expense-amount">Total Expense: 487</span>
                        <div class="edit-btn">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="delete-btn">
                            <i class="fa fa-trash"></i>
                        </div>
                    </div>
                </div>
                <div class="expense-tile"></div>
                <div class="expense-tile"></div>
                <div class="expense-tile"></div>
            </div>
        </div>
    </div>
</body>
</html>