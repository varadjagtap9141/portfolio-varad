<?php include "navbar.php";
$query="SELECT * FROM highlight";
$result=mysqli_query($conn,$query);
$highlight_row=mysqli_fetch_array($result);

print_r($highlight_row);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5>Manage Highlight's</h5>
                <hr/>
                <form action="../component/save_highlight.php" method="post">
                    <div class="row">
                        <input type="text" name="highlight_id" value="<?=$highlight_row['highlight_id']?>">
                        <div class="col-md-6 mb-3">
                            <label for="post_1">Who I am?</label>
                            <input id="post_1" type="text" class="form-control" name="post_1" autofocus value="<?=$highlight_row['post_1']?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="post_2">Who I am?</label>
                            <input id="post_2" type="text" class="form-control" name="post_2" value="<?=$highlight_row['post_2']?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="post_3">Who I am?</label>
                            <input id="post_3" type="text" class="form-control" name="post_3" value="<?=$highlight_row['post_3']?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="post_4">Who I am?</label>
                            <input id="post_4" type="text" class="form-control" name="post_4" value="<?=$highlight_row['post_4']?>">
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" class="btn btn-primary float-end">Update Highlight</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php";?>