<?php
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
	$_SESSION['errmessage'] = "You must be logged in to access the page.";
	header("Location: ../login.php");
	exit();
}
$title = "List of Employees";
include('config/dbconn.php');
include('includes/header.php');


?>
<div class="col-lg-12">
	<?php include('../message.php'); ?>
	<div class="card border-3 border-success">
		<div class="card-header d-flex justify-content-end">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-success" href="new_employee.php"><i
						class="fa fa-plus"></i> Add New Employee</a>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table class="table tabe-hover table-bordered table-hover">
				<thead>
					<tr>
						<th scope="col">Company ID</th>
						<th scope="col">Last Name</th>
						<th scope="col">First Name</th>
						<th scope="col">Middle Name</th>
						<th scope="col">Email</th>
						<th scope="col">Position</th>
						<th scope="col">Date Hired</th>
						<th scope="col">Status</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$status = array('','Active','Inactive',);
					$qry = $conn->query("SELECT * FROM tblemployee");
					
					while ($row = $qry->fetch_assoc()):					
					?>
					<tr>
						<td><?php echo $row['compID']?></td>
						<td><?php echo $row['lastname']?></td>
						<td><?php echo $row['firstname']?></td>
						<td><?php echo $row['midname']?></td>
						<td><?php echo $row['email']?></td>
						<td><?php echo $row['position']?></td>
						<td><?php echo $row['date_hired']?></td>
						<td><?php echo $status[$row['status']]?></td>
						<td class="text-center">
							<div class="dropdown">
								<button type="button"
									class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle"
									data-toggle="dropdown" aria-expanded="true">
									Action
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="edit_employee.php?id=<?php echo $row['id'] ?>">Edit</a>
									<div class="dropdown-divider"></div>
									<form action="crud.php" method="POST">
										<button class="dropdown-item" type="submit" name="delete_employee" value="<?php echo $row['id'] ?>">Delete</button>
									</form>
								</div>
							</div>
						</td>
					</tr>
					<!-- Add more rows for additional employees -->
					
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>

	</div>
</div>
<?php
include('includes/script.php');
include('includes/footer.php');
?>