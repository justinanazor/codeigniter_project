<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Employee <small class="text-muted">(<?= $employee->full_name ?>)</small>
                            <a href="<?php echo base_url('employees'); ?>" class="btn btn-danger float-right">BACK</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('employees/update/' . $employee->id); ?>" method="POST">
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" name="full_name" value="<?= $employee->full_name ?>" class="form-control">
                                <small><?php echo form_error('full_name'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" value="<?= $employee->email ?>" class="form-control">
                                <small><?php echo form_error('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" value="<?= $employee->address ?>" class="form-control">
                                <small><?php echo form_error('address'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="phone_no">Phone No</label>
                                <input type="text" name="phone_no" value="<?= $employee->phone_no ?>" class="form-control">
                                <small><?php echo form_error('phone_no'); ?></small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>