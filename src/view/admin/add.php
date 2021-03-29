<?php


?>


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

                        </div>
                    </li>

                </ul>
                <form method="post" enctype="multipart/form-data" action="?page=search" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <hr>
        <div class="container">
            <form method="post" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" >
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Price</label>
                    <input type="text" name="price" class="form-control" id="formGroupExampleInput" >
                </div>
                <div class="from-group">
                    <label for="formGroupExampleInput">Image</label><br>
                    <input type="file" name="image" id="formGroupExampleInput">
                </div><br>
               <div class="form-group">
                   <label for="formGroupExampleInput">Category</label>

                   <select name="category_id" class="form-control" >
                       <?php foreach ($categories as $category): ?>
                       <option class="form-control" value="<?php echo $category['id_category'];  ?>">
                           <?php echo $category['categoryName'];  ?>
                       </option>
                       <?php endforeach; ?>
                   </select>
                </div>
                <button name="smd" class="btn btn-success btn-sm" type="submit">Add New</button>
            </form>
        </div>
<footer class=" bg-dark text-center text-lg-left">
    <!-- Copyright -->
    <div class="text-center text-info p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-info" href="index.php">tongdung.com</a>
    </div>
    <!-- Copyright -->
</footer>
