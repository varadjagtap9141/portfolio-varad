<?php include "navbar.php";
 extract($_GET);
 $query="SELECT education_id, description, university, education, DATE_FORMAT(start_year, '%Y') AS start_year, DATE_FORMAT(end_year, '%M %Y') AS end_year FROM education WHERE education_id = '$education_id'";
 $result=mysqli_query($conn,$query);
 $education_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Manage Education</h5>
                <hr />
                <form action="../component/update_education.php" method="post">
                    <div class="row">
                        <input type="hidden" name="education_id" value="<?=$education_row['education_id']?>">
                        <div class="col-md-12 mb-3">
                            <label for="education">Your Education</label>
                            <input type="text" class="form-control" name="education" id="education"
                                placeholder="Your Education" required value="<?=$education_row['education']?>" autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="university">University</label>
                            <input type="text" class="form-control" name="university" id="university"
                                placeholder="university" required value="<?=$education_row['university']?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="start_year">Start Date</label>
                            <input type="date" class="form-control" name="start_year" id="start_year"
                                placeholder="Start Date">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="end_year">End Date</label>
                            <input type="date" class="form-control" name="end_year" id="end_year" placeholder="End Date"
                                >
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="description">Job Details</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                required><?=$education_row['description']?></textarea>
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" type="submit" class="btn btn-primary float-end">Update Education</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";?>