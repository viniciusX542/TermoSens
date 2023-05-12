<?php  

session_start();
if (!isset($_SESSION["auth"]) or $_SESSION["auth"] !== true) {
    header("location: indexSen.php", true, 302);
}

?>