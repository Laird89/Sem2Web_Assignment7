<?php
//Page3.php    
    session_start(); 
    $_SESSION["session-address"] = $_POST["address"];
?>

<form action="Page4.php" method="POST"> 
    Credit Card Number: <input type="text" name="ccInfo" placeholder="Enter credit card #"><br><br>
   <input type="submit">   
</form>