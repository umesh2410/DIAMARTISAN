<?php
// $showErr = "false";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include '_dbconnect.php';
    
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mnum = $_POST['mnum'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $address = $_POST['address'];

    // Check whether this email exists
    $existSql = "SELECT * FROM `user_db` WHERE `Email` = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    
    if ($numRows > 0) {
        header("Location: /video%2021/register.php?Email Already Exist");
        exit();
    } else {
        // Validate password match
        if ($pass === $cpass) {
            // Corrected SQL query
            $sql = "INSERT INTO `user_db` (`Fname`, `Lname`, `MoNo`, `Email`, `Pass`, `Cpass`, `City`, `Pincode`, `Address`) 
                    VALUES ('$fname', '$lname', '$mnum', '$email', '$pass', '$cpass', '$city', '$pincode', '$address')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showErr = true;
                header("Location: /video%2021/login.php?signupsuccess=true");
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            header("Location: /video%2021/register.php?Password Does Not Match");
            exit();
        }
    }
    header("Location: /video%2021/register.php?signupsuccess=false");
}
?>
