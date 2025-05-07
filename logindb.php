<?php
session_start();
// include 'index.php';
include '_dbconnect.php';
if(isset($_POST['email']) && isset($_POST['password']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email=validate($_POST['email']);
    $pass=validate($_POST['password']);
    if(empty($email)){
            header("Location: /video%2021/login.php?error=Email is required");
            exit();
        } else if(empty($pass)){
            header("Location: /video%2021/login.php?error=Password is reqired");
            exit();
        }else{
            $sql = "SELECT * FROM `user_db` WHERE Email='$email' AND Pass= '$pass'";
            $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);
            if($row['Email']===$email && $row['Pass']===$pass){
                session_start();
                $_SESSION["loggedin"] = true;   
                $_SESSION["useremail"] = $email;
                echo "logged in". $email;
                header("Location: /video%2021/index.php?login successful = true");
                exit();
            }
        }
        else{
            header("Location: /video%2021/login.php?error=Incorect email or password");
            exit();
        }
        }
    }
else
{
    header("Location: /video%2021/login.php");
    exit();
}
?>