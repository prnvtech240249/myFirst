<?php
    include("connect.php");
    $action=$_POST["action"];
    if ($action=="save") {
        $sname=strtoupper($_POST["sname"]);
        $gender=($_POST["gender"]);
        $mobile=$_POST["mobile"];    
            mysqli_query ($con,"insert into student (name,gender,mobile) values('$sname','$gender',$mobile)") or mysqli_error("invalid SQL command");
        echo "<script> alert('saved successfully');</script>";
        echo "<script>top.window.location.href='index.php';</script>";
            
    }
    
?>