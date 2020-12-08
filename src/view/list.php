
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1>Mobile</h1>
        </div>
        <div class="card-header">
            <a href="?page=home">Home |</a>
            <a href="?page=list">List Of Product</a>
            <form method="post" enctype="multipart/form-data">
                <input type="search" name="search">
                <input type="submit" value="search" class="btn btn-primary btn-sm">
            </form>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($big as $key => $row): ?>
                    <tr>
                        <td><?php echo ++$key; ?></td>
                        <td><?php echo $row['name']   ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td>
                            <img style="width: 100px" src="img/<?php echo $row['image']; ?>">
                        </td>
                        <td><?php echo $row['category']  ?></td>
                        <td>
                            <a href="?page=update&id=<?php echo $row['id']?>" class="btn btn-warning btn-sm">Update</a>
                        </td>
                        <td>
                            <a href="?page=delete&id=<?php echo $row['id']?>" class="btn btn-danger btn-sm" >Delete</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
                </tbody>

            </table>
            <a class="btn btn-primary btn-sm" href="?page=add" >Add New</a>
        </div>
    </div>
</div>

<footer style="display: block; margin: auto; text-align: center; padding-top: 20%">
    <div>©2020 tong dung web</div>
</footer>


