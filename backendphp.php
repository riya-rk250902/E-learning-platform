<?php
if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    if (!empty($username) || !empty($password) || !empty($fullname)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "elearning";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
            die('Connect Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
        } else {
            $SELECT = "SELECT email from signup where email=? Limit 1";
            $INSERT = "INSERT INTO signup(email,password,fullname) values(?,?,?)";
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sss", $email, $password, $fullname);
                $stmt->execute();
                echo "</br></br>";
                echo "<center><font size='15'> You are successfully registered!</font></center>";
                echo "</br>";
                echo "<center><font size='10'><a href='signin.html'>Click here to login</a></font></center>";

            } else {
                echo "</br></br>";
                echo "<center><font size='10'>someone is already registered on this email</font></center>";
            }
            $stmt->close();
            $conn->close();
        }

    } else {
        echo "All fields are required";
        die();
    }
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * from elearning where email='$email' and password='$password'";
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
?>