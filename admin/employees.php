<?php
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
	$_SESSION['message'] = "You must be logged in to access the page.";
	header("Location: ../login.php");
	exit();
}
$title = "Employees";
include('config/dbconn.php');
include('includes/header.php');


?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-header d-flex justify-content-end">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-success" href="./index.php?page=new_user"><i
						class="fa fa-plus"></i> Add New Employee</a>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table class="table tabe-hover table-bordered table-hover">
				<thead>
					<tr>
						<th scope="col">Company ID</th>
						<th scope="col">Position</th>
						<th scope="col">First Name</th>
						<th scope="col">Middle Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Email</th>
						<th scope="col">Date Hired</th>
						<th scope="col">Status</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>001</td>
						<td>IT</td>
						<td>Jerome</td>
						<td>Ferrer</td>
						<td>Caluag</td>
						<td>jerome.f.caluag@gmail.com</td>
						<td>02-06-2023</td>
						<td>Active</td>
						<td class="text-center">
							<div class="dropdown">
								<button type="button"
									class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle"
									data-toggle="dropdown" aria-expanded="true">
									Action
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item view_user" href="javascript:void(0)"
										data-id="<?php echo $row['id'] ?>">View</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item"
										href="./index.php?page=edit_user&id=<?php echo $row['id'] ?>">Edit</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item delete_user" href="javascript:void(0)"
										data-id="<?php echo $row['id'] ?>">Delete</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>002</td>
						<td>IT</td>
						<td>Carl John</td>
						<td>T</td>
						<td>Torrevillo</td>
						<td>carljohn@gmail.com</td>
						<td>02-06-2023</td>
						<td>Active</td>
						<td class="text-center">
							<button type="button"
								class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle"
								data-toggle="dropdown" aria-expanded="true">
								Action
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item view_user" href="javascript:void(0)"
									data-id="<?php echo $row['id'] ?>">View</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item"
									href="./index.php?page=edit_user&id=<?php echo $row['id'] ?>">Edit</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item delete_user" href="javascript:void(0)"
									data-id="<?php echo $row['id'] ?>">Delete</a>
							</div>
						</td>
					</tr>
					<!-- Add more rows for additional employees -->
				</tbody>
			</table>
		</div>

	</div>
</div>
<?php
include('includes/script.php');
include('includes/footer.php');
?>