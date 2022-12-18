<?php
require_once('config.php');
require_once "header.php";


if (isset($_REQUEST['editId']) and $_REQUEST['editId'] != "") {
	$row	=	$db->getAllRecords('students', '*', ' AND id="' . $_REQUEST['editId'] . '"');
}

if (isset($_REQUEST['submit']) and $_REQUEST['submit'] != "") {
	extract($_REQUEST);
	if ($username == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=un&editId=' . $_REQUEST['editId']);
		exit;
	} elseif ($useremail == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=ue&editId=' . $_REQUEST['editId']);
		exit;
	} elseif ($userphone == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=up&editId=' . $_REQUEST['editId']);
		exit;
	} elseif ($useraddress == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=uad&editId=' . $_REQUEST['editId']);
		exit;
	} elseif ($stGrade == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=ug&editId=' . $_REQUEST['editId']);
		exit;
	} elseif ($classTime == "") {
		header('location:' . $_SERVER['PHP_SELF'] . '?msg=uct&editId=' . $_REQUEST['editId']);
		exit;
	}

	$data	=	array(
		'username' => $username,
		'useremail' => $useremail,
		'userphone' => $userphone,
		'useraddress' => $useraddress,
		'stGrade' => $stGrade,
		'classTime' => $classTime
	);
	$update	=	$db->update('students', $data, array('id' => $editId));
	if ($update) {
		header('location: index.php?msg=rus');
		exit;
	} else {
		header('location: index.php?msg=rnu');
		exit;
	}
}
?>



<div class="container">
	<?php
	if (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "un") {
		echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Student name is mandatory field!</div>';
	} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "ue") {
		echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Student email is mandatory field!</div>';
	} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "up") {
		echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Student phone is mandatory field!</div>';
	} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "uad") {
		echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Student Address is mandatory field!</div>';
	} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "ug") {
		echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Student Grade is mandatory field!</div>';
	} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "uct") {
		echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Student Class Time is mandatory field!</div>';
	} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "ras") {
		echo	'<div class="alert alert-info"><i class="fa fa-thumbs-up"></i> Record added successfully!</div>';
	} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "rna") {
		echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Record not added <strong>Please try again!</strong></div>';
	}
	?>
	<div class="card mt-4">
		<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Update Student</strong> <a href="index.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Students</a></div>
		<div class="card-body">

			<h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
			<form method="post">
				<h5>Personal Info:</h5>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Student Name <span class="text-danger">*</span></label>
							<input type="text" name="username" id="username" class="form-control" value="<?php echo $row[0]['username']; ?>" placeholder="Enter Student name" required>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Student Email <span class="text-danger">*</span></label>
							<input type="email" name="useremail" id="useremail" class="form-control" value="<?php echo $row[0]['useremail']; ?>" placeholder="Enter Student email" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Student Phone <span class="text-danger">*</span></label>
							<input type="tel" name="userphone" id="userphone" maxlength="12" class="form-control" value="<?php echo $row[0]['userphone']; ?>" placeholder="Enter Student phone" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Student Address <span class="text-danger">*</span></label>
							<input type="text" name="useraddress" id="useraddress" class="form-control" value="<?php echo $row[0]['useraddress']; ?>" placeholder="Enter Student Address" required>
						</div>
					</div>

				</div>

				<h5>Academic Info:</h5>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Student Grade <span class="text-danger">*</span></label>
							<input type="text" title="Grade" class="form-control" value="<?php echo $row[0]['stGrade']; ?>" name="stGrade" id="stGrade" placeholder="Enter Student Grade" required>
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Student Class Time <span class="text-danger">*</span></label>
							<input type="datetime-local" title="Class Time" class="form-control" value="<?php echo $row[0]['classTime']; ?>" name="classTime" id="classTime" placeholder="Enter Student Class Time" required>
						</div>
					</div>
				</div>


				<div class="form-group">
					<input type="hidden" name="editId" id="editId" value="<?php echo $_REQUEST['editId'] ?>">
					<button type="submit" name="submit" value="submit" id="submit" class="btn btn-info"><i class="fa fa-fw fa-edit"></i> Update Student</button>
				</div>

			</form>
		</div>
	</div>
</div>


<?php
require_once "footer.php";
?>