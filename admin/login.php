<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/loginheader.php');
	include_once ($filepath.'/../classes/Admin.php');
	$ad = new Admin();
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$adminData = $ad->getAdminData($_POST);
}

  ?>






<div class="section1">
        <div class="title pt-5 text-center">
            <h1 class="pt-3 text-success">Admin Login</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form class="" method="post">
                        <div class="form-group pt-5">
                            <label for="username">Username</label>
                            <input name="adminUser" type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                             <input name="adminPass" type="password" class="form-control" id="password">
                        </div>
                        <button type="submit" value="Login" name="login" class="btn btn-primary float-right">Log in</button>
	<?php 
					if (isset($adminData)) {
						echo $adminData;
					}
					 ?>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div> 
    </div>


<?php include 'inc/footer.php'; ?>