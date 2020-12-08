

<div class="container-fixed">
    <div class="card">
        <div class="card-header">
            <h1>Mobile</h1>
            <a href="?page=home">Home |</a>
           <a href="?page=list">List Of Product</a>
            <form method="post" enctype="multipart/form-data">
                <input type="search" name="search">
                <input type="submit" value="search" class="btn btn-primary btn-sm">
            </form>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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