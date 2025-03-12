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
                                placeholder="Company Name" required autofocus>
                        </div>
                    <div class="col-md-6 mb-3">
                            <label for="start_date">Start Date</label>
                            <input type="month" class="form-control" name="start_date" id="start_date"
                                placeholder="Start Date" required autofocus>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="end_date">End Date</label>
                            <input type="month" class="form-control" name="end_date" id="end_date"
                                placeholder="End Date" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="desc">Job Details</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3"
                                required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Service</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>