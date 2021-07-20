<?php

    //Database connection
    $con = new mysqli('localhost','root','','charity');
    if($con->connect_error){
        die("fail:".$con->connect_error);
       }else{
           
           if(isset($_POST['submit'])){
        //insertion
            $name= $_POST['name'];
            $mail=$_POST['mail'];
            $sql = "INSERT INTO `donate`( `name`, `mail`, `amount`) VALUES ('{$name}','{$mail}','500')";
            $result = mysqli_query($con , $sql);
            if($result){
                echo "<script> 
                           window.location.href='https://test.instamojo.com/@vmathumitha2002/l47aa1e76fcab41fe9d89d36c899e146c/';
                 </script>";
            }else{
                echo "failed";
                }
           }
           
       
        }
?>