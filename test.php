<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
if (isset($_GET['q'])) {
	$number = (int) $_GET['q'];
}else{
	header("Location:exam.php");
}

$total = $exm->getTotalRows();
$question = $exm->getQuesByNumber($number);
?>

<?php 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$process = $pro->processData($_POST);
	}

 ?>
    <div class="section1">
        <div class="title pt-5 text-center">
            <h1 class="pt-5 text-success">Welcome to Online Exam</h1>
        </div>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-12">

<h1>Question <?php echo $question['quesNo']; ?> of <?php echo $total; ?></h1>
                    <form method="post" action="">
                        <table class="table table-light">
                            <tr>
                                <td>
                                    <h3>Que <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?></h3>
                                </td>
                            </tr>
	<?php 

				$answer = $exm->getAnswer($number);
				if ($answer) {
					while ($result = $answer->fetch_assoc()) {
				
			 ?>

                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox"  name="ans" value="<?php echo $result['id']; ?>" class="custom-control-input" id="customControlInline1">
                                        <label class="custom-control-label" for="customControlInline1"><?php echo $result['ans']; ?></label>
                                    </div>
                                </td>
                            </tr>
			<?php }} ?>
                           
                        </table>
                        <button class="btn btn-primary float-right" name="submit" type="submit" value="Next Question"></button>
			<button class="btn btn-primary float-right" name="number" type="hidden" value="<?php echo $number; ?>"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>