<?php include "navbar.php";
extract($_GET);
$query="SELECT * FROM services WHERE service_id=$service_id";
$result=mysqli_query($conn,$query);
$service_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Services</h5>
                <hr />
                <form action="../component/update_service.php" method="post">
                    <div class="row">
                        <input type="hidden" name="service_id" value="<?=$service_row['service_id']?>">
                        <div class="col-md-12 mb-3">
                            <label for="service_title">Service Title</label>
                            <input type="text" class="form-control" name="service_title" id="service_title"
                                placeholder="Service Title" value="<?=$service_row['service_title']?>" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="service_subtitle">Service Description</label>
                            <textarea class="form-control" id="service_subtitle" name="service_subtitle" rows="3"
                                required><?=$service_row['service_subtitle']?></textarea>
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" type="submit" class="btn btn-primary float-end">Update Service</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";?>