<?php require("Header.html");?>
<body>
<?php require("Nav.html");?>
    <main>
        <form action="Index.php" method="post">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required <?php if(isset($_GET['email'])) print("value = ".$_GET['email'])?>>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required pattern="[0-9a-zA-Z!@#$%^&*]+" <?php if(isset($_GET['password'])) print("value = ".$_GET['password'])?>>
                <div id="emailHelp" class="form-text">May contain 0-9 a-z A-Z ! @ # $ % ^ & *</div>
              </div>
              <button type="submit" class="btn btn-primary">Registration</button>
            </form>
        </form>
        <?php
                if(isset($_POST['email'])&&isset($_POST['password']))
                {
                    $host = "localhost";
                    $user = "root";
                    $db_password = "";
                    $db_name = "task1";
                    $sql_con = new mysqli($host, $user, $db_password, $db_name);
                    if($sql_con -> connect_errno)
                    {
                      echo $sql_con ->error;
                    }
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $sql = "INSERT INTO `users`(`Id`, `Email`, `Password`) VALUES (null, '".$email."', '".$password."')";
                    echo $sql;
                    $sql_con -> query($sql);
                    if(!$sql_con -> query($sql))
                    {
                        echo $sql_con ->error;
                    }
                }
        ?>
    </main>
<?php require("Footer.html");?>
