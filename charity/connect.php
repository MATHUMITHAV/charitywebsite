<?php

    //Database connection
    $con = new mysqli('localhost','root','','charity');
    if($con->connect_error){
        die("fail:".$con->connect_error);
       }else{if(isset($_POST['submit'])){
        //insertion
            $name= $_POST['name'];
            $volunteer=$_POST['volunteer'];
            $message=$_POST['message'];
            $sql="INSERT INTO `volunteer`(`name`, `no of volunteer`, `message`) VALUES ('{$name}','{$volunteer}','{$message}')";
            $result=mysqli_query($con , $sql);
            if($result){
                echo "<script> alert('Thank You');
                           window.location.href='index.html';
                 </script>";
            }
        }
       
        }
?>