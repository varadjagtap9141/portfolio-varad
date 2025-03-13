<?php include "navbar.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Education</h5>
                <hr />
                <form action="../component/save_education.php" method="post">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="education">Your Education</label>
                            <input type="text" class="form-control" name="education" id="education"
                                placeholder="Your Education" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="university">University</label>
                            <input type="text" class="form-control" name="university" id="university"
                                placeholder="University" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="start_year">Start Year</label>
                            <input type="date" class="form-control" name="start_year" id="start_year"
                                placeholder="Start Date" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="end_year">End Year</label>
                            <input type="date" class="form-control" name="end_year" id="end_year" placeholder="End Date"
                                required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="description">Education Details</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Education</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">
                <h5>Experience List</h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>SrNo</th>
                            <th>Education</th>
                            <th>University</th>
                            <th>Start Year</th>
                            <th>End Year</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        extract($_GET);
                        $query="SELECT education_id, description, university, education, DATE_FORMAT(start_year, '%Y') AS start_year, DATE_FORMAT(end_year, '%Y') AS end_year FROM education";
                        $result=mysqli_query($conn,$query);
                        foreach($result as $key=>$data)
                        {
                            ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$data['education']?></td>
                            <td><?=$data['university']?></td>
                            <td><?=$data['start_year']?></td>
                            <td><?=$data['end_year']?></td>
                            <td class="d-flex">
                                <a href="edit_education.php?education_id=<?= $data['education_id']?>"
                                    class="btn btn-primary btn-sm mx-1"><i class='bx bx-edit'></i></a>
                                <a onClick="return confirm('Are You Sure?')"
                                    href="../component/delete_education.php?education_id=<?= $data['education_id']?>"
                                    class="btn btn-danger btn-sm mx-1"><i class='bx bx-trash'></i></a>

                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>