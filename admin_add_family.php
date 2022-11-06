<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/add_member.css">
    <link rel="stylesheet" href="./styles/admin/add_families.css">
    <title>Family Head</title>
</head>
<body>
    <div class="side-menu">
        <div class="logo-box"></div>
        <div class="name-box">
            <span class="user_type">ADMIN</span>
        </div>
        <a href="admin_dashboard.php"><div class="side-options"><i class="fa fa-home"></i> Dashboard</div></a>
        <a href="admin_add_family.php"><div class="side-options active"><i class="fa fa-file-text"></i> Add Family</div></a>
        <a href="admin_familys.php"><div class="side-options "><i class="fa fa-user"></i> Families</div></a>
        <div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div>
        <div class="side-btn" style="background-color: rgb(6, 43, 122);;"> <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Report</div>
    </div>
    <div class="main-section">
        <div class="main-wrapper">
            <form action="" method="post">
            <div class="form">
        <h1>Add Family</h1>
        <div class="content">
        <input type="text" placeholder="FAMILY NAME">
    </div>
    <div class="content">
    <input type="text" placeholder="NAME">
</div>
<div class="content">
<input type="email" placeholder="Email">
</div>
<div class="content">
<input type="password" placeholder="PASSWORD">
</div>
<input type="submit"  class="btn" value="ADD">
</div>
            </form>
        
        </div>
    </div>
</body>
</html>