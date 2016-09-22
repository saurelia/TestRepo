<?php include '/view/header.php'; ?>
<main>
        <form method="post" action="page2.php" id="align_me">
            <input type="hidden" name="action" value="add_product" />
            <label>User name:</label> 
            <input type="text" name="userName" />
            <br/>
            <label>Email:</label> 
            <input type="email" name="userEmail" />
            <br/>
            <input type="submit" value="Click me!" />
        </form>    
            
</main>      
<?php include '/view/footer.php'; ?>