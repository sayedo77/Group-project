<?php
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:http://sasa28.brighton.domains/project/login.html"); //to redirect back to "login.php" after logging out
exit();