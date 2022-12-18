<?php
require_once('config.php');
require_once "header.php";

?>


<?php
$condition	=	'';
if (isset($_REQUEST['username']) and $_REQUEST['username'] != "") {
	$condition	.=	' AND username LIKE "%' . $_REQUEST['username'] . '%" ';
}
if (isset($_REQUEST['useremail']) and $_REQUEST['useremail'] != "") {
	$condition	.=	' AND useremail LIKE "%' . $_REQUEST['useremail'] . '%" ';
}
if (isset($_REQUEST['userphone']) and $_REQUEST['userphone'] != "") {
	$condition	.=	' AND userphone LIKE "%' . $_REQUEST['userphone'] . '%" ';
}
if (isset($_REQUEST['df']) and $_REQUEST['df'] != "") {

	$condition	.=	' AND DATE(dt)>="' . $_REQUEST['df'] . '" ';
}
if (isset($_REQUEST['dt']) and $_REQUEST['dt'] != "") {

	$condition	.=	' AND DATE(dt)<="' . $_REQUEST['dt'] . '" ';
}

$userData	=	$db->getAllRecords('students', '*', $condition, 'ORDER BY id DESC');
?>
<div class="container-fluid">
	<div class="card mt-4">
		<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse Students</strong>
			<a href="add-student.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Student</a>
		</div>
		<div class="mt-4">
			<?php
			if (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "rds") {
				echo	'<div class="alert alert-info"><i class="fa fa-thumbs-up"></i> Record deleted successfully!</div>';
			} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "rus") {
				echo	'<div class="alert alert-info"><i class="fa fa-thumbs-up"></i> Record updated successfully!</div>';
			} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "ras") {
				echo	'<div class="alert alert-info"><i class="fa fa-thumbs-up"></i> Record Added successfully!</div>';
			} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "rnu") {
				echo	'<div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> You did not change any thing!</div>';
			} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "rna") {
				echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> There is some thing wrong <strong>Please try again!</strong></div>';
			}
			?>
			<div class="col-sm-12">
				<h5 class="card-title"><i class="fa fa-fw fa-search"></i> Find Student</h5>
				<form method="get">
					<div class="row">
						<div class="col-sm-3">
							<div class="form-group">
								<label>User Name</label>
								<input type="text" name="username" id="username" class="form-control" value="<?php echo isset($_REQUEST['username']) ? $_REQUEST['username'] : '' ?>" placeholder="Enter user name">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label>User Email</label>
								<input type="email" name="useremail" id="useremail" class="form-control" value="<?php echo isset($_REQUEST['useremail']) ? $_REQUEST['useremail'] : '' ?>" placeholder="Enter user email">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label>User Phone</label>
								<input type="tel" name="userphone" id="userphone" class="form-control" value="<?php echo isset($_REQUEST['userphone']) ? $_REQUEST['userphone'] : '' ?>" placeholder="Enter user phone">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group row">
								<div class="col-6">
									<label>From</label>
									<input type="text" class="fromDate form-control hasDatepicker" name="df" id="df" value="" placeholder="From Date">
								</div>
								<div class="col-6">
									<label> To </label>
									<input type="text" class="toDate form-control hasDatepicker" name="dt" id="dt" value="" placeholder="To Date">
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>What?</label>
								<div>
									<button type="submit" name="submit" value="search" id="submit" class="btn btn-info"><i class="fa fa-fw fa-search"></i> Search</button>
									<a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-danger"><i class="fa fa-fw fa-sync"></i> Clear</a>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<hr>


	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr class="bg-info text-white">
					<th>SN#</th>
					<th> Name</th>
					<th> Email</th>
					<th> Phone</th>
					<th> Address</th>
					<th> Grade</th>
					<th> Class Time</th>
					<th>Record Date</th>
					<th class="text-center" colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if (count($userData) > 0) {
					$s	=	'';
					foreach ($userData as $val) {
						$s++;
				?>
						<tr>
							<td><?php echo $s; ?></td>
							<td><?php echo $val['username']; ?></td>
							<td><?php echo $val['useremail']; ?></td>
							<td><?php echo $val['userphone']; ?></td>
							<td><?php echo $val['useraddress']; ?></td>
							<td><?php echo $val['stGrade']; ?></td>
							<td><?php echo $val['classTime']; ?></td>
							<td><?php echo date('Y-m-d', strtotime($val['dt'])); ?></td>
							<td class="text-center">
								<a href="edit-users.php?editId=<?php echo $val['id']; ?>" class="text-info"><i class="fa fa-fw fa-edit"></i> Edit</a>
							</td>
							<td>
								<a href="delete.php?delId=<?php echo $val['id']; ?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
							</td>

						</tr>
					<?php
					}
				} else {
					?>
					<tr>
						<td colspan="6">No Record(s) Found!</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<?php
require_once "footer.php";
?>