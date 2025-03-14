<?php include "navbar.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Enquiry List</h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       $query="SELECT * FROM contact";
                       $result=mysqli_query($conn,$query);
                       foreach($result as $key=>$data)
                       {
                           ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$data['name']?></td>
                            <td><?=$data['email']?></td>
                            <td><?=$data['phone_no']?></td>
                            <td><?=$data['subject']?></td>
                            <td><?=$data['message']?></td>
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
