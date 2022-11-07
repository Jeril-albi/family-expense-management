<html>
<head>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./styles/dashboard.css">
    <link rel="stylesheet" href="./styles/head/chart.css">
    <title>Family Head</title>
    <?php
    require 'connection.php';

    $t_exp_query = "select sum(exp_amount) as sum from expense";
    $max_exp_query = "select name, max(exp_amount) as max_amount from expense group by name";

    $con_file = new Connection();
    $con = $con_file->connect();
    $exp_qry_result = mysqli_query($con,$t_exp_query);
    $max_exp_qry_result = mysqli_query($con,$max_exp_query);

    $exp_qry_row = mysqli_fetch_assoc($exp_qry_result);

    $max_exp = mysqli_fetch_assoc($max_exp_qry_result);
    $totalExp = $exp_qry_row['sum'];
    mysqli_close($con);
    ?>
</head>
<body>
    <div class="side-menu">
        <div class="logo-box">
        </div>
        <div class="name-box">
            <span class="user_type">Family Head</span>
            <span class="user_name">Name</span>
            <span class="family_name">Family Name</span>
        </div>
        <a href="head_dashboard.php"><div class="side-options active"><i class="fa fa-home"></i> Dashboard</div></a>
        <a href="head_expense.php"><div class="side-options"><i class="fa fa-dollar"></i> Expenses</div></a>
        <a href="head_add_member.php"><div class="side-options"><i class="fa fa-file-text"></i> Add Member</div></a>
        <a href="head_members.php"><div class="side-options "><i class="fa fa-user"></i> Members</div></a>
        <div class="side-options"><i class="fa fa-sign-out"></i> Sign Out</div>
        <div class="side-btn"> <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Expense</div>
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
                    <span class="box-title">NO  OF MEMBERS</span> <br>
                    <span> 3</span>
                    <i class="fa fa-user" style="margin-left: 6rem; color: aquamarine;" aria-hidden="true"></i>
                </div>
                <div class="top-value-box">
                    <span class="box-title">HIGHEST EXPENSE</span> <br>
                    <?php 
                    if(empty($max_exp['max_amount'])){
                        echo"<span> 0 </span>";
                    }else{
                        echo"<span>".$max_exp['name']." ( ".$max_exp['max_amount']." )</span>";
                    }
                     ?>
                </div>
                </div>
        </div>
    </div>
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
            legend: 'none',
            textStyle:{color: '#FFF'},
          title: 'My Daily Activities',
          backgroundColor: '#12263f',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script> -->
</body>
</html>