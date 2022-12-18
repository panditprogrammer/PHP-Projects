<?php include_once('config.php');

require_once "header.php";

if (isset($_REQUEST['submit']) and $_REQUEST['submit'] != "") {
	extract($_REQUEST);
	if ($username == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=un');
		exit;
	} elseif ($useremail == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=ue');
		exit;
	} elseif ($userphone == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=up');
		exit;
	} elseif ($useraddress == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=up');
		exit;
	} elseif ($stGrade == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=up');
		exit;
	} elseif ($classTime == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=up');
		exit;
	} else {

		$userCount	=	$db->getQueryCount('students', 'id');
		$data	=	array(
			'username' => $username,
			'useremail' => $useremail,
			'userphone' => $userphone,
			'useraddress' => $useraddress,
			'stGrade' => $stGrade,
			'classTime' => $classTime
		);
		$insert	=	$db->insert('students', $data);
		if ($insert) {
			header('location:index.php?msg=ras');
			exit;
		} else {
			header('location:index.php?msg=rna');
			exit;
		}
	}
}
?>









<div class="container">

	<?php

	if (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "un") {

		echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User name is mandatory field!</div>';
	} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "ue") {

		echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User email is mandatory field!</div>';
	} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "up") {

		echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User phone is mandatory field!</div>';
	} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "ras") {

		echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record added successfully!</div>';
	} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "rna") {

		echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Record not added <strong>Please try again!</strong></div>';
	}

	?>

	<div class="card mt-4">
		<div class="card-header">
			<i class="fa fa-fw fa-plus-circle"></i> <strong>Add Student</strong>
			<a href="index.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Students</a>
		</div>
		<div class="card-body">
			<h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
			<form method="post">

				<h5>Personal Info:</h5>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Student Name <span class="text-danger">*</span></label>
							<input type="text" name="username" id="username" class="form-control" placeholder="Enter user name" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>Student Email <span class="text-danger">*</span></label>
							<input type="email" name="useremail" id="useremail" class="form-control" placeholder="Enter user email" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Student Phone <span class="text-danger">*</span></label>
							<input type="tel" title="Accept Number format" class="tel form-control" name="userphone" id="userphone" x-autocompletetype="tel" placeholder="Enter user phone" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>Student Address <span class="text-danger">*</span></label>
							<input type="text" title="Your Address details" class="form-control" name="useraddress" id="useraddress" placeholder="Enter Student Address" required>
						</div>
					</div>
				</div>

				<h5>Academic Info:</h5>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Student Grade <span class="text-danger">*</span></label>
							<input type="text" title="Grade" class="form-control" name="stGrade" id="stGrade" placeholder="Enter Student Grade" required>
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Student Class Time <span class="text-danger">*</span></label>
							<input type="datetime-local" title="Class Time" class="form-control" name="classTime" id="classTime" placeholder="Enter Student Class Time" required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<button type="submit" name="submit" value="submit" id="submit" class="btn btn-info"><i class="fa fa-fw fa-plus-circle"></i> Add Student</button>
				</div>

			</form>

		</div>
	</div>

</div>


<?php
require_once "footer.php";
?>