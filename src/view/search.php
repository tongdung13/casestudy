
<div class="container-fixed">
    <div class="card">
<div class="card-body">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($bills as $key => $row): ?>
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
</div>
</div>
</div>
<a href="?page=login">Đăng xuất</a>
<footer style="display: block; margin: auto; text-align: center; padding-top: 20%">
    <div>©2020 Tong dung web</div>
</footer>



