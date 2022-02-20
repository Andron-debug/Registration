<?php require("Header.php");?>
<body>
<?php require("Nav.html");?>
<main>
        <form action="Login.php" method="post">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required <?php if(isset($_GET['email'])) print("value = ".$_GET['email'])?>>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required pattern="[0-9a-zA-Z!@#$%^&*]+" <?php if(isset($_GET['password'])) print("value = ".$_GET['password'])?>>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </form>
        <?php
                if(isset($_POST['email'])&&isset($_POST['password']))
                {
                }
        ?>
    </main>
    <?php require("Footer.html");?>
