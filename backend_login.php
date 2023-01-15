<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "elearning";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
        die('Connect Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
        } 
        else {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $sql = "SELECT * from signup where email='$email' and password='$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count==1){
                header("Location:courses.html");
             }
             else{
                echo "<script>
                window.location.href='signin.html';
                alert('Login failed.Inavlid email or password!')
                </script>";
                }
            }
    }
?>

