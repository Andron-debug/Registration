<?php require("Header.php");?>
<main>
     <!-- Проверка пароля -->
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
    <!-- Форма добавления новой заметки -->
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
    <!-- Отображение таблицы -->
<table class ="todotable">
<?php
    $res = $db -> GetToDoList($_SESSION['email']);
    while ($row = mysqli_fetch_array($res))
    {
        print ("<tr>");     
        print ("<td class ='td_task'>".$row['Task']."</td>");
        print('<td  class = "td_butt"> <a href = "Index.php?edit='.$row['N'].'" class="btn btn-primary">Edit</a></td>');
        print('<td class = "td_butt"> <a href = "Index.php?del='.$row['N'].'" class="btn btn-primary">Delete</a></td>');
        print ("</tr>");
    }
    ?>
</table>
<!-- Удаление -->
<?php
if (isset($_GET['del'])) {
    $db -> DeleteTask($_GET['del']);
    header("Location: Index.php");
}
?>
</main>
    
    <!-- Выход -->
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
