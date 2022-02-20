<?php require("Header.php");?>
<body>
<?php require("Nav.html");?>
    <main>
        <form action="Index.php" method="post">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required <?php if(isset($_POST['email'])) print("value = ".$_POST['email'])?>>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required pattern="[0-9a-zA-Z!@#$%^&*]+" <?php if(isset($_POST['password'])) print("value = ".$_POST['password'])?>>
                <div id="emailHelp" class="form-text">May contain 0-9 a-z A-Z ! @ # $ % ^ & *</div>
              </div>
              <button type="submit" class="btn btn-primary">Registration</button>
            </form>
        </form>
        <?php
                 if(isset($_POST['email'])&&isset($_POST['password']))
                {
                  try
                  {
                    $db -> Registration($_POST['email'], $_POST['password']);
                    echo "<script>alert('User successfully registered')</script>";
                  }
                  catch (Exception $e)
                  {
                      echo $e -> getMessage();
                  }
                }

        ?>
    </main>
<?php require("Footer.html");?>
