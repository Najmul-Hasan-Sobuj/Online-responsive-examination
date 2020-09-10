<?php include 'inc/header.php'; ?>

    <div class="section1">
        <div class="title pt-5 text-center">
            <h1 class="pt-3 text-success">Online Exam System - User Registration</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group pt-5">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email1" name="email"
                                aria-describedby="emailHelp">
                        </div>
                        <button type="submit" id="regsubmit" value="Signup" class="btn btn-primary float-right">Sign up</button>
                    </form>
			<p>Already Registered ? <a href="index.php">Login</a> Here</p>
				 <span id="state"></span>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>


<?php include 'inc/footer.php'; ?>