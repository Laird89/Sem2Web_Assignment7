<?php
//Page4.php    
    session_start(); 
    $_SESSION["session-ccInfo"] = $_POST["ccInfo"];
?>
<h2>Users Info</h2>
Name: <?= $_SESSION["session-name"] ?><br>
Email: <?= $_SESSION["session-email"] ?><br>
Address: <?= $_SESSION["session-address"] ?><br>
Credit Card Number: <?= $_SESSION["session-ccInfo"] ?>
