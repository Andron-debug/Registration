<?php require("Header.php");?>
<main>
    <?php 
    if ($db -> IsPasswordOk($_SESSION['email'], $_SESSION['password']))
    {
        echo "<H2>Hello ".$_SESSION['email']."</H2>";
    }
    else
    {
        header("Location: Login.php");
    }
    ?>
    <form class ="add_form" action="Index.php" method="post">
            <div class="mb-3">
                <label for="task" class="form-label">Task ToDo</label>
                <input type="text" class="form-control" name="task"  required>
            </div>
            <button type="submit"  class="btn btn-primary">Add</button>
    </form>
    <?php
        if (isset($_POST['task']))
        {
            $db ->AddTask($_SESSION['email'], $_POST['task']);
        }
    ?>
</main>
<nav>
    <form class ="exit_form" action="Index.php" method="post">
        <input type="hidden" name ="exit" value = "true">
        <button type="submit"  class="btn btn-primary">Exit</button>
    </form>
    <?php
        if(isset($_POST['exit'])) {
            session_destroy();
            header("Location: Login.php");
        }
    ?>
</nav>
<?php require("Footer.html");?>
