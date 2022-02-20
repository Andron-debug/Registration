<?php require("Header.php");?>
<body>
<?php require("Nav.html");?>
<main>
        <form action="Login.php" method="post" class="login_form">
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
        <?php
                if(isset($_POST['email'])&&isset($_POST['password']))
                {
                  if($db -> IsEmailInBase($_POST['email']))
                  {
                    if($db -> IsPasswordOk($_POST['email'],$_POST['password']))
                    {
                      echo "<script>alert('You successfully login')</script>";
                    }
                      else
                      {
                        echo "<script>alert('Invalid password')</script>";
                      }
                  }
                  else
                  {
                    //echo "<script>alert('User does not exist')</script>";
                    require("WillReg.php");
                  }
                }
        ?>
    </main>
    <?php require("Footer.html");?>
