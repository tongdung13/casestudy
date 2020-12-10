
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarExample01"
                    aria-controls="navbarExample01"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div
            class="p-5 text-center bg-image"
            style="
      background-image: url('https://mdbootstrap.com/img/new/slides/041.jpg');
      height: 580px;

    "
    >
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <fieldset style="width: 500px; text-align: center; margin: auto; padding-top: 145px">
                        <div class="container">
                            <div class="card">
                                <div class="card-header">
                                    <h1>Login Page</h1>
                                </div >
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form">
                                            <label for="">UserName:</label><br>
                                            <input type="text" name="username" placeholder="username" />
                                        </div>
                                        <div class="form">
                                            <label for="">Password:</label><br>
                                            <input type="password" name="password" placeholder="Password" >
                                        </div>
                                        <div class="checkbox mb-3">
                                            <label>
                                                <input type="checkbox" value="remember-me"> Remember me
                                            </label>
                                        </div>
                                        <div class="form-">
                                            <input type="submit" value="Login" class="btn btn-primary btn-sm">
                                            <input type="reset" value="Reset" class="btn btn-primary btn-sm">
                                        </div>
                                        <a  href="?page=registration">Registration</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
</header>


