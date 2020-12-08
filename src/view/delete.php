<h1>Ban chac chan muon xoa ?</h1>
<h3><?php echo $mobile->name ?></h3>
<form action="?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $mobile->id ?>">
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="?page=more"></a>

    </div>
    <div class="form-group">
        <input type="submit" value="Cancel" class="btn btn-success">
        <a class="btn btn-default" href="?page=more"></a>
    </div>
</form>