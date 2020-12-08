
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

