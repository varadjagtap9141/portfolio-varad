<?php include "navbar.php"; ?>
<?php
$query="SELECT * FROM profile";
$row=mysqli_query($conn,$query);
$profile_row=mysqli_fetch_assoc($row);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Manage Profile</h5>
                <hr />
                <h6>Basic Information</h6>
                <form action="../component/save_profile.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="profile_id" value="<?=$profile_row['profile_id']?>">
                        <div class="col-md-5">
                            <img class="w-100 h-100" src="../component/upload/<?=$profile_row['profile_img']?>" alt="Profile Photo">
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="<?=$profile_row['name']?>" id="name" placeholder="Your Name" required autofocus>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="<?=$profile_row['email']?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Phone No</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Contact No" value="<?=$profile_row['phone']?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Your Address" value="<?=$profile_row['address']?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="Your City" value="<?=$profile_row['city']?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="file">Upload Profile Picture</label>
                                        <input type="file" class="form-control" id="file" name="profile_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                <h6>About Me</h6>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?=$profile_row['title']?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="resume">Resume</label>
                        <input type="file" class="form-control" id="resume" name="cv">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" id="age" name="age" value="<?=$profile_row['age']?>" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="intro">Introduction</label>
                        <textarea name="intro" id="intro" rows="3" class="form-control" required><?=$profile_row['intro']?></textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="<?=$profile_row['gender']?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" name="status" value="<?=$profile_row['status']?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="experience">Experience (In Years)</label>
                        <input type="text" class="form-control" id="experience" name="experience" value="<?=$profile_row['experience']?>" required>
                    </div>
                </div>
                <hr/>
                <h6>Social Media Links & Logo</h6>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="link_1">GitHub Link</label>
                        <input type="text" class="form-control" id="link_1" name="link_1" value="<?=$profile_row['link_1']?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="link_2">LinkedIn Link</label>
                        <input type="text" class="form-control" id="link_2" name="link_2" value="<?=$profile_row['link_2']?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="link_3">Instagram Link</label>
                        <input type="text" class="form-control" id="link_3" name="link_3" value="<?=$profile_row['link_3']?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" value="<?=$profile_row['nationality']?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="available">Service Available</label>
                        <input type="text" class="form-control" id="available" name="available" value="<?=$profile_row['available']?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="language">Languages</label>
                        <input type="text" class="form-control" id="language" name="language" value="<?=$profile_row['language']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Favicon Logo</label>
                        <input type="file" class="form-control" id="" name="favicon">
                        <img class=" mt-2" width="auto" height="80" src="../component/upload/<?=$profile_row['favicon']?>" alt="favicon">
                    </div>
                    <div class="col-md-6">
                        <label for="">Website Logo</label>
                        <input type="file" class="form-control" id="" name="logo">
                        <img class=" mt-2" width="auto" height="80" src="../component/upload/<?=$profile_row['logo']?>" alt="logo">
                    </div>
                    
                </div>
                <button onClick="return confirm('Are You Sure?')" class="btn btn-primary float-end">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
