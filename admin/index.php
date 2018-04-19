<?php
    if(isset($_SESSION['logged_in'])){
     print_r("Hello ".$_SESSION['username']);
?>

     <a href="logout.php">LOGOUT</a>

<?php } ?>
