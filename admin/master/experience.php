<?php include "navbar.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Experience</h5>
                <hr />
                <form action="../component/save_experience.php" method="post">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="position">Your Position</label>
                            <input type="text" class="form-control" name="position" id="position"
                                placeholder="Your Position" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="company">Company Name</label>
                            <input type="text" class="form-control" name="company" id="company"
                                placeholder="Company Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" name="start_date" id="start_date"
                                placeholder="Start Date" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" name="end_date" id="end_date" placeholder="End Date"
                                required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="description">Job Details</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Experience</button>
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
                            <th>Position</th>
                            <th>Company</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        extract($_GET);
                        $query="SELECT experience_id, description, company, position, DATE_FORMAT(start_date, '%M %Y') AS start_date, DATE_FORMAT(end_date, '%M %Y') AS end_date FROM experience";
                        $result=mysqli_query($conn,$query);
                        foreach($result as $key=>$data)
                        {
                            ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$data['position']?></td>
                            <td><?=$data['company']?></td>
                            <td><?=$data['start_date']?></td>
                            <td><?=$data['end_date']?></td>
                            <td class="d-flex">
                                <a href="edit_experience.php?experience_id=<?= $data['experience_id']?>"
                                    class="btn btn-primary btn-sm mx-1"><i class='bx bx-edit'></i></a>
                                <a onClick="return confirm('Are You Sure?')"
                                    href="../component/delete_experience.php?experience_id=<?= $data['experience_id']?>"
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