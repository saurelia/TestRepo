<?php

$user = $_POST["userName"];
$email = $_POST["userEmail"];

$_SESSION["userName"] = $user;
$_SESSION["userEmail"] = $email;
?>
<?php include 'view/header.php'; ?>
<header> <h1>Page Two</h1></header>
<main>
        <?php
        // put your code here
        echo ('User name is: '.$_SESSION["userName"]);
        echo ('User email is: '.$_SESSION["userEmail"]);
        ?>
        <a href="page3.php">Page 3</a>
</main>        
<?php include 'view/footer.php'; ?>