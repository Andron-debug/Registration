<!-- https://getbootstrap.com/ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="Style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Sing in</a>
      </div>
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Registration</a>
      </div>
    </nav>
    <main>
        <form action="Index.php" method="get">
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
              <button type="submit" class="btn btn-primary">Reg</button>
            </form>
        </form>
        <?php
                if(isset($_GET['email']))
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
                    $email = $_GET['email'];
                    $password = $_GET['password'];
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
<footer>
    <p class="col-md-4 mb-0 text-muted">© 2022 Andrew Bushuew, Dubna university</p>
</footer>
</body>
</html>