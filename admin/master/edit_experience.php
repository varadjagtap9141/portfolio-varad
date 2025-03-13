<?php include "navbar.php"; 
 extract($_GET);
 $query="SELECT experience_id, description, company, position, DATE_FORMAT(start_date, '%M %Y') AS start_date, DATE_FORMAT(end_date, '%M %Y') AS end_date FROM experience WHERE experience_id = '$experience_id'";
 $result=mysqli_query($conn,$query);
 $experience_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Manage Experience</h5>
                <hr />
                <form action="../component/update_experience.php" method="post">
                    <div class="row">
                        <input type="hidden" name="experience_id" value="<?=$experience_row['experience_id']?>">
                        <div class="col-md-12 mb-3">
                            <label for="position">Your Position</label>
                            <input type="text" class="form-control" name="position" id="position"
                                placeholder="Your Position" required value="<?=$experience_row['position']?>" autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="company">Company Name</label>
                            <input type="text" class="form-control" name="company" id="company"
                                placeholder="Company Name" required value="<?=$experience_row['company']?>">
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
                                required><?=$experience_row['description']?></textarea>
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" type="submit" class="btn btn-primary float-end">Update Experience</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>