<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="card-header">
						<h5>Employee Information
							<a href="<?php echo base_url('employees/add'); ?>" class="btn btn-primary float-right">Add New Employee</a>
						</h5>
						<h6 class="small">How to Fetch data from Database in Codeigniter</h6>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Id</th>
									<th>Full Name</th>
									<th>Email</th>
									<th>Address</th>
									<th>Phone No</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>Confirm Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php $count = 1; foreach ($employee as $row): ?>
									<tr>
										<td><?php echo $count++; ?></td>
										<td><?php echo $row->full_name; ?></td>
										<td><?php echo $row->email; ?></td>
										<td><?php echo $row->address; ?></td>
										<td><?php echo $row->phone_no; ?></td>
										<td><a href="<?php echo base_url('employees/edit/' . $row->id); ?>" class="btn btn-success btn-sm">Edit</a></td>
										<td><a href="<?php echo base_url('employees/delete/' . $row->id); ?>" class="btn btn-danger btn-sm">Delete</a></td>
										<td><button value="<?= $row->id; ?>" data-fullname="<?= $row->full_name?>" class="btn btn-danger btn-sm confirm-delete">Confirm Delete</button></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>