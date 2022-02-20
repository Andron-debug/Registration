<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="Style.css" rel="stylesheet">
<form action="Index.php" method="post" class="willreg_form">
    <input type="hidden" name="email" <?php if(isset($_POST['email'])) print("value = ".$_POST['email'])?>>
    <input type="hidden" name="password"<?php if(isset($_POST['password'])) print("value = ".$_POST['password'])?>>
    <label for="exampleInputEmail1" class="form-label">Do you want to register?</label>
    <button type="submit" class="btn btn-primary">Registration</button>
</form>