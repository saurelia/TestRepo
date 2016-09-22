<?php include 'view/header.php'; ?>
<main>
        <?php
        // put your code here
        echo ('User name is: '.$_SESSION["userName"]);
        echo ('User email is: '.$_SESSION["userEmail"]);
        print_r($_SESSION);
        ?>
        <br />
        <a href="index.php">Home</a>
</main>        
<?php include 'view/footer.php'; ?>
