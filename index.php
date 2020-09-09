<?php include 'inc/header.php'; ?>
<?php
Session::checkLogin();
?>

<div class="section1">
        <div class="title pt-5 text-center">
            <h1 class="pt-3 text-success">Online Exam System - User Login</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form class="" method="post">
                        <div class="form-group pt-5">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                             <input name="password" type="password" class="form-control" id="password">
                        </div>
                        <button type="submit" id="loginsubmit" value="Login" class="btn btn-primary float-right">Log in</button>
                    </form>
<p>New User ? <a href="register.php">Signup</a> Free</p>
	   <span class="empty" style="display: none;">Field must not be empty !</span>
	   <span class="error" style="display: none;">Email or Password not matched !</span>
	   <span class="disable" style="display: none;">User Id disabled !</span>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div> 
    </div>


<?php include 'inc/footer.php'; ?>