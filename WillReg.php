<form action="Registration.php" method="post" class="willreg_form">
    <input type="hidden" name="email" <?php if(isset($_POST['email'])) print("value = ".$_POST['email'])?>>
    <input type="hidden" name="password"<?php if(isset($_POST['password'])) print("value = ".$_POST['password'])?>>
    <label for="exampleInputEmail1" class="form-label">Do you want to register?</label>
    <button type="submit" class="btn btn-primary">Registration</button>
</form>