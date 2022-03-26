<?php

    $host = "localhost";
    $user = "avk";
    $password = 'avkproj';
    $db_name = "web_dev_internship";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
        $email = isset($_POST['email'])?$_POST['email']:'';
        $username = isset($_POST['username'])?$_POST['username']:'';
        $password = isset($_POST['password'])?$_POST['password']:'';

        //to prevent from mysqli injection
        $email = stripcslashes($email);
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $email = mysqli_real_escape_string($con, $email);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $sql="SELECT * from signup where (username='$username' or email='$email');";

              $res=mysqli_query($con,$sql);

              if (mysqli_num_rows($res) > 0) {

                $row = mysqli_fetch_assoc($res);
                if($username==$row['username']){
                   echo "<script>alert('Username already exists');</script>";
               }
                if($email==isset($row['email'])){
                    $sql2="UPDATE signup SET username='$username', password='$password' where email ='$email'";
                    $res2 = mysqli_query($con,$sql2);
                    echo "<script>alert('Yor username and password updated successfully');</script>";
                }
                else{
                  echo "<script>alert('Email Id does not exist please Register first');</script>";
                  //echo "Email-Id does not exist";
                  header("Location: forgot.php");
                  return;
                }
            }



        $con->close();
?>
