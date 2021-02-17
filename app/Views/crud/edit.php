<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <h5 class="card-header fw-bold">Edit Student Data</h5>
                <div class="card-body">
                    <form method="post" action="<?= base_url('crud/update/'.$student_data['id']); ?>">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $student_data['name']; ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="student_number" class="form-label">Student Number </label>
                            <input type="student_number" class="form-control" id="student_number" name="student_number" value="<?php echo $student_data['student_number']; ?>" required>
                        </div>
                            
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="course">Course</label>
                                <select id="course" class="form-control" name="course" required>
                                    <option selected><?php echo $student_data['course']; ?></option>
                                    <option >Bachelor of Science in Mechanical Engineering (BSME)</option>
                                    <option >Bachelor of Science in Electronics Engineering (BSECE)</option>
                                    <option >Bachelor of Science in Information Technology (BSIT)</option>
                                    <option >Bachelor of Science in Education - Major in English (BSED-ENG)</option>
                                    <option >Bachelor of Science in Education - Major in Math (BSED-Math)</option>
                                    <option >Bachelor of Science in Accountancy (BSA)</option>
                                    <option >Bachelor of Science in Office Administration (BSOA)</option>
                                    <option >Bachelor of Science in Business Administration - Marketing Management (BSBA-MM)</option>
                                    <option >Bachelor of Science in Business Administration - Human Resource Management (BSBA-HRM)</option>
                                    <option >Diploma in Information and Communication Technology (DICT)</option>
                                    <option >Diploma in Office Management Technology (DOMT)</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-group">
                                <label for="year_level">Year Level</label>
                                <select id="year_level" class="form-control" name="year_level" required>
                                    <option selected><?php echo $student_data['year_level']; ?></option>
                                    <option >1st Year</option>
                                    <option >2nd Year</option>
                                    <option >3rd Year</option>
                                    <option >4th Year</option>
                                    <option >5th Year</option>
                                </select>
                            </div>
                        </div>
                        
                        <a class="btn btn-secondary btn-sm mt-5" href="<?= base_url("/")?>"></i> Back</a>
                        <input type="submit" class="btn btn-primary btn-sm mt-5 float-end" value="Save" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>