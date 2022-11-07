<?php
//db connection
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="family_expanse";
$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if(!$conn){
   die('Could not Connect MySql Server:' .mysql_error());
 }

//data insert

if(isset($_POST['submit']))
{
$fname=$_POST['family_name'];  
$name=$_POST['name'];
$hname=$_POST['head_name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$sql="INSERT INTO families (Family_name,Name,Head_name,Email,Password)
VALUES ('$fname','$name','$hname','$email','$pass')";
 if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
 } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
 }
 mysqli_close($conn);
}
?>
<html>
<body>
<form id='insertform' action="reg.php" method="POST">
    <div class='form-input'>
            <label id='name-label'>Family name</label>
            <input type='text' id='name' placeholder='name' class='form-input-size' required name="family_name" />
        </div>
        <div class='form-input'>
            <label id='name-label'>name</label>
            <input type='text' id='name' placeholder='name' class='form-input-size' required name="name" />
        </div>
        <div class='form-input'>
            <label id='email-label'>Head name</label>
            <input type='text' id='email' placeholder='name' class='form-input-size' required name="head_name"/>
        </div>
        <div class='form-input'>
            <label id='number-label'>Emial
                
            </label>
            <input type='text' id='number' placeholder='email'class='form-input-size' name="email"/>
        </div>
        <div class='form-input'>
            <label id='number-label'>password
                
            </label>
            <input type='text' id='number' placeholder='password'class='form-input-size' name="password"/>
        </div>

        <div class='form-input'>
            
            <button type='submit' id='submit' name="submit">register</button>
            
        </div>
    </form>