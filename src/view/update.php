
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1>Mobile</h1>
        </div>
        <div class="card-header">
            <a href="../../../demomvcs/index.php">Home |</a>
            <a href="?page=list">List Of Product</a>
            <form method="post" enctype="multipart/form-data">
                <input type="search" name="search">
                <input type="submit" value="search" class="btn btn-primary btn-sm">
            </form>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" name="name" value="<?php echo $up['name'] ?>" class="form-control" id="formGroupExampleInput ">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Price</label>
                    <input type="text" name="price" value="<?php echo $up['price']; ?>" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="from-group">
                    <label for="formGroupExampleInput">Image</label><br>
                    <input type="file" name="image" value="<?php echo $up['image']; ?> ">
                </div><br>
                <div class="form-group">
                    <label for="formGroupExampleInput">Category</label>
                    <input type="text" name="category" value="<?php echo $up['category'];  ?>" class="form-control" id="formGroupExampleInput">
                </div>
                <div>
                <button name="smd" class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>