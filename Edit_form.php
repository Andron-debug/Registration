<form class = "add_form" action="Index.php" method="post">
     <div class="mb-3">
        <label for="task" class="form-label">New text</label>
        <input type="text" class="form-control" name="new_text"  required <?php if(isset($_GET['text'])) print("value = ".$_GET['text']);?>>
        <input type="hidden"  name="N"  required <?php if(isset($_GET['edit'])) print("value = ".$_GET['edit']);?>>
    </div>
    <button type="submit"  class="btn btn-primary">Ok</button>
</form>