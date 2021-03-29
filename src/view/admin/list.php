
<div class="container-fixed">
    <div class="card">
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-tabs bg-primary">
            <a class="navbar-brand" href="#">Mobile</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="?page=home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=list">List Of Product</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?page=add">Add New</a>
                            <a class="dropdown-item" href="?page=update">Update</a>
                            <a class="dropdown-item" href="?page=category">Category</a>
                        </div>
                    </li>
                    
                </ul>
                <form method="post" enctype="multipart/form-data" action="?page=search" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="container">
            <table class="table">
                <thead class=" bg-primary">
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
                        <td><?php echo number_format($row['price'], 3) ?></td>
                        <td>
                            <img style="width: 100px; height: 100px" src="img/<?php echo $row['image']; ?>">
                        </td>
                        <td><?php echo $row['categoryName']  ?></td>
                        <td>
                            <a href="?page=update&id=<?php echo $row['id']?>" class="btn btn-warning btn-sm">Update</a>
                        </td>
                        <td>
                            <a href="?page=delete&id=<?php echo $row['id']?>"
                               onclick="return confirm('ban co muon xoa')"
                               class="btn btn-danger btn-sm" >Delete</a>

                        </td>
                    </tr>

                <?php endforeach; ?>
                </tbody>

            </table>
        </div>
<footer class=" text-center text-lg-left bg-dark">
    <!-- Copyright -->
    <div class="text-center text-info p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-info" href="index.php">tongdung.com</a>
    </div>
    <!-- Copyright -->
</footer>

