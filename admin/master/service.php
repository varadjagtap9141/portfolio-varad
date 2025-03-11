<?php include "navbar.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Services</h5>
                <hr />
                <form action="../component/save_service.php" method="post">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="service_title">Service Title</label>
                            <input type="text" class="form-control" name="service_title" id="service_title"
                                placeholder="Service Title" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="service_subtitle">Service Description</label>
                            <textarea class="form-control" id="service_subtitle" name="service_subtitle" rows="3"
                                required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Service</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">
                <h5 class="text-capitalize">Services List</h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Service Title</th>
                            <th>Service Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM services";
                        $result=mysqli_query($conn,$query);
                        foreach($result as $key=>$data)
                        {
                            ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><small><?=$data['service_title']?></small></td>
                            <td><small><?=$data['service_subtitle']?></small></td>
                            <td class="d-flex">
                                <a href="edit_service.php?service_id=<?=$data['service_id']?>"
                                    class="btn btn-primary btn-sm mx-1"><i class='bx bx-edit'></i></a>
                                <a href="../component/delete_service.php?service_id=<?=$data['service_id']?>"
                                    class="btn btn-danger btn-sm mx-1"><i class='bx bx-trash'></i></a>
                            </td>
                        </tr>
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