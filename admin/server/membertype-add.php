<?php
 session_start();
//Database Configuration File
include('../includes/config.php');
//error_reporting(0);
if(isset($_POST['add']))
  {
 
    // Getting username/ email and password
    $membertype=$_POST['membertype'];
    $fee=$_POST['fee'];
    // Fetch data from database on the basis of username/email and password
    $query=mysqli_query($con,"insert into tblmembertype(memberType,fee) values('$membertype','$fee')");
    if($query)
    {
    echo "<script type='text/javascript'> document.location = '../page-member-type'; </script>";
    }
    else{
    echo "<script type='text/javascript'> alert(".mysqli_error($con).") </script>";
    } 
    
}

?>