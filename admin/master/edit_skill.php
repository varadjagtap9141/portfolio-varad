<?php include "navbar.php"; 
extract($_GET);
$query="SELECT * FROM skills WHERE skill_id='$skill_id'";
    $result=mysqli_query($conn,$query);
    $skill_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Skills</h5>
                <hr />
                <form action="../component/update_skill.php" method="post">
                    <div class="row">
                        <input type="hidden" name="skill_id" value="<?=$skill_row['skill_id']?>">
                        <div class="col-md-6 mb-3">
                            <label for="skill_name">Your skills</label>
                            <input type="text" class="form-control" name="skill_name" id="skill_name"
                                placeholder="Your skills: bx bxl-html5" required value="<?=$skill_row['skill_name']?>" autofocus>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="title">Skill Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                placeholder="Skill Title" required value="<?=$skill_row['title']?>">
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" type="submit" class="btn btn-primary float-end">Update Skills</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>