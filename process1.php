<?php
    session_start();
     #header("Location: http://sasa28.brighton.domains/project/Home.html");
     
     
     if (!empty($_POST)) {
        $conn = new mysqli("localhost:3306", "sasa28_data", "sayed39986870", "sasa28_database");
        #echo "here";
        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);}
            
        }
        $sql = "SELECT Password FROM websitedata";
        $result = mysqli_query($conn, $sql);
        while ($record = mysqli_fetch_assoc($result)) {
            if ( $record["Password"] == md5($_POST['psw'])) {
                $_SESSION["status"] = "loggedin";

                header("Location: http://sasa28.brighton.domains/project/Home.html");
                exit();}
        }
         echo "the user name or the password is wrnog please try again ";
?>