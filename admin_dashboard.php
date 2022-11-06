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
            <span class="user_type">ADMIN</span>
        </div>
        <a href="admin_dashboard.php"><div class="side-options active"><i class="fa fa-home"></i> Dashboard</div></a>
        <a href="admin_add_family.php"><div class="side-options "><i class="fa fa-file-text"></i> Add Family</div></a>
        <a href="admin_familys.php"><div class="side-options "><i class="fa fa-user"></i> Families</div></a>
        <div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div>
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
                    <span>$ 45031</span>
                    <i class="fa fa-usd" style="margin-left: 4rem; color: aquamarine;" aria-hidden="true"></i>
                </div>
                <div class="top-value-box">
                    <span class="box-title">NO  OF FAMILIES</span> <br>
                    <span> 3</span>
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