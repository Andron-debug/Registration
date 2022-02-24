<?php require("Header.php");?>
<main>
<?php 

    if ($db -> IsPasswordOk($_SESSION['email'], $_SESSION['password']))
    {
        echo "Hello ".$_SESSION['email'];
    }
    else
    {
        header("Location: Login.php");
    }
?>
</main>
<nav>
    <form class ="exit_form" action="Index.php" method="post">
        <input type="hidden" name ="exit" value = "true">
        <button type="submit"  class="btn btn-primary" class="Exit">Exit</button>
    </form>
    <?php
        if(isset($_POST['exit'])) {
            session_destroy();
            header("Location: Login.php");
        }
    ?>
</nav>
<?php require("Footer.html");?>