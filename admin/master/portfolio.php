<?php include "navbar.php";?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Project</h5>
                <hr />
                <form action="../component/save_project.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="project_name">Project Name</label>
                            <input type="text" class="form-control" name="project_name" id="project_name"
                                placeholder="Project Name" required autofocus>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="screenshot">Add Screenshot</label>
                            <input type="file" class="form-control" name="screenshot" id="screenshot"
                                placeholder="Add Screenshot" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="detail">Project Details</label>
                            <textarea class="form-control" id="detail" name="detail" rows="3" required></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="link">Project Link</label>
                            <input type="url" class="form-control" name="link" id="link" placeholder="Project Link"
                                required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="git_repo">Github Repository Link</label>
                            <input type="url" class="form-control" name="git_repo" id="git_repo"
                                placeholder="https://github.com/" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="technology">Technologies Used</label>
                            <input type="text" class="form-control" name="technology" id="technology"
                                placeholder="HTML,CSS etc" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Project</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">
                <h5 class="text-capitalize">Projects List</h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>SrNo</th>
                            <th>Project Name</th>
                            <th>Screenshot</th>
                            <th>Project Link</th>
                            <th>Github Repository</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM portfolio";
                        $result=mysqli_query($conn,$query);
                        foreach($result as $key=>$data)
                        {
                            ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$data['project_name']?></td>
                            <td>
                                <img src="../component/upload/<?=$data['screenshot']?>" alt="Project Image"
                                    width="auto" height="80">
                            </td>
                            <td><a href="<?=$data['link']?>"><i class="bx bx-link text-black fs-2"></i></a></td>
                            <td><a href="<?=$data['git_repo']?>"><i class="bx bxl-github text-black fs-2"></i></a></td>
                            <td class="d-flex justify-content-center">
                                <a href="edit_project.php?portfolio_id=<?=$data['portfolio_id']?>"
                                    class="btn btn-sm mx-1 btn-primary"><i class='bx bx-edit'></i></a>
                                <a onClick="return confirm('Are You Sure?')"
                                    href="../component/delete_project.php?portfolio_id=<?=$data['portfolio_id']?>"
                                    class="btn btn-sm mx-1 btn-danger"><i class='bx bx-trash'></i></a>
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