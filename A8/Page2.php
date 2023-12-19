<?php
//Page2.php    
    session_start();    
    $_SESSION["session-name"] = $_POST["name"];
    $_SESSION["session-email"] = $_POST["email"];
?>
<form action="Page3.php" method="POST"> 
    Address: <input type="text" name="address" placeholder="Enter address"><br><br>
   <input type="submit">   
</form>