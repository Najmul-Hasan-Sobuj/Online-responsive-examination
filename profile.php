<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
$userid = Session::get("userid");
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$updateUser = $usr->updateUserData($userid, $_POST);

}

?>

<div class="section1">
        <div class="title pt-5 text-center">
            <h1 class="pt-3 text-success">Your Profile</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
		 <?php 
if (isset($updateUser)) {
	echo $updateUser;
}

	 ?>
                    <form class="" method="post">

	<?php
	$getData = $usr->getUserData($userid);
	if ($getData) {
	//here we can skip while loop for fetching 1 row data
		$result = $getData->fetch_assoc();
	?>
	<table class="table"> 
			<div class="form-group pt-5">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" value="<?php echo $result['name'] ?>">
                        </div>
			<div class="form-group pt-5">
                            <label for="username">Username</label>
                            <input name="username" type="text" class="form-control" id="username" value="<?php echo $result['username'] ?>">
                        </div>
                        <div class="form-group pt-5">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" value="<?php echo $result['email'] ?>">
                        </div>
                        <button type="submit" value="Update" class="btn btn-primary float-right">Update</button>
	</table>
	<?php } ?>
                    </form>
	
   
                </div>
                <div class="col-md-3"></div>
            </div>
        </div> 
    </div>

<?php include 'inc/footer.php'; ?>