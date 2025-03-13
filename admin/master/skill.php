<?php include "navbar.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Skills</h5>
                <hr />
                <form action="../component/save_skill.php" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="skill_name">Your skills</label>
                            <input type="text" class="form-control" name="skill_name" id="skill_name"
                                placeholder="Your skills: bx bxl-html5" required autofocus>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="title">Skill Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                placeholder="Skill Title" required autofocus>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Skills</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">
                <h5>Skills List</h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>SrNo</th>
                            <th>Skills</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        extract($_GET);
                        $query="SELECT * FROM skills";
                        $result=mysqli_query($conn,$query);
                        foreach($result as $key=>$data)
                        {
                            ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><i class="<?=$data['skill_name']?>" style="font-size:50px;"></i></td>
                            <td>
                                <a href="edit_skill.php?skill_id=<?= $data['skill_id']?>"
                                    class="btn btn-primary btn-sm mx-1"><i class='bx bx-edit'></i></a>
                                <a onClick="return confirm('Are You Sure?')"
                                    href="../component/delete_skill.php?skill_id=<?= $data['skill_id']?>"
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