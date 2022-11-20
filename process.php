<?php 
    include("config.php");

    if(isset($_POST['btn-send']))
    {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];
       

       if(empty($name) || empty($email) || empty($message))
       {
           header('location:index.php?error');
       }
       else
       {
           $sql = "INSERT INTO `khuram`(`name`,`email`, `message`) VALUES ('".$name."','".$email."','".$message."')";
           $result = $mysqli->query($sql);
           
           $to = "admin@test.com";
           $Subject = 'Hello';
           
           if(mail($to,$Subject,$message,$email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }



?>