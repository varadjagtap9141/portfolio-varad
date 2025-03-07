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
                <h6>Basic Infomation</h6>
                <form action="">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="w-100 h-100 border" src="../component/upload/<?=$profile_row['profile_img']?>" alt="Profile Photo">
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="<?=$profile_row['name']?>" id="name" placeholder="Your Name" autofocus>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="<?=$profile_row['email']?>">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Phone No</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Contact No " value="<?=$profile_row['phone']?>">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Your Address" value="<?=$profile_row['address']?>">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" id="file" placeholder="Your City" value="<?=$profile_row['city']?>">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="file">Upload Profile Picture</label>
                                        <input type="file" class="form-control" id="file" placeholder="Enter file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                <h6>About Me</h6>
                <div class="row">
                <div class="col-md-4 mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" id="" name="" value="<?=$profile_row['title']?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Resume</label>
                        <input type="file" class="form-control" id="" name="" value="<?=$profile_row['age']?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Age</label>
                        <input type="text" class="form-control" id="" name="" value="<?=$profile_row['age']?>">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Introduction</label>
                        <textarea name="" id="" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Gender</label>
                        <input type="text" class="form-control" id="" name="" value="<?=$profile_row['age']?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Status</label>
                        <input type="text" class="form-control" id="" name="" value="<?=$profile_row['age']?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Experience(In Year's)</label>
                        <input type="text" class="form-control" id="" name="" value="<?=$profile_row['age']?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Nationality</label>
                        <input type="text" class="form-control" id="" name="" value="<?=$profile_row['age']?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Service Available</label>
                        <input type="text" class="form-control" id="" name="" value="<?=$profile_row['age']?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Languages</label>
                        <input type="text" class="form-control" id="" name="" value="<?=$profile_row['age']?>">
                    </div>
                </div>
                <hr/>
                <h6>Social Media Links & Logo</h6>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" id="" name="" value="<?=$profile_row['link_1']?>">    
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" id="" name="" value="<?=$profile_row['link_2']?>">    
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" id="" name="" value="<?=$profile_row['link_3']?>">    
                    </div>
                    <div class="col-md-6">
                        <label for="">Favicon Logo</label>
                        <input type="file" class="form-control" id="" name="">
                        <img class="border mt-2" width="auto" height="80" src="http://localhost/git/portfolio-varad/images/favicon.png" alt="favicon">
                    </div>
                    <div class="col-md-6">
                        <label for="">Website Logo</label>
                        <input type="file" class="form-control" id="" name="">
                        <img class="border mt-2" width="auto" height="80" src="http://localhost/git/portfolio-varad/images/favicon.png" alt="logo">
                    </div>
                </div>
                <button class="btn btn-primary float-end">Update profile</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>