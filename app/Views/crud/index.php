<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h5 class="fw-bold align-middle d-inline">List of Students</h5>
                    <a class="btn btn-primary btn-sm float-end d-inline" href="<?= site_url('crud/add')?>"><i class="far fa-plus-square me-1"></i> Add New Student</a>
                </div>
                
                <div class="card-body">
                    <table class="table" id="student_list">
                        <thead>
                            <tr>
                                <th>Student Number</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Year Level</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        
                        <tbody>

                            <?php foreach($student_data as $sd){ ?>
                                <tr>

                                    <td><?php echo $sd['student_number']; ?></td>
                                    <td><?php echo $sd['name']; ?></td>
                                    <td><?php echo $sd['course']; ?></td>
                                    <td><?php echo $sd['year_level']; ?></td>
                                    <td>
                                        <a class="btn btn-secondary btn-sm d-inline" href="<?php echo base_url(); ?>/crud/edit/<?php echo $sd['id']; ?>"><i class="far fa-edit"></i> Edit</a>
                                        <a class="btn btn-danger btn-sm d-inline" href="<?php echo base_url(); ?>/crud/delete/<?php echo $sd['id']; ?>" onclick="return confirm('Are you sure you want to delete it?')"><i class="far fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>