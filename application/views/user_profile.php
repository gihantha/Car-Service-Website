<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("includes/head") ?>
</head>

<body id="page-top">
    <?php $this->load->view("includes/navbar") ?>

    <?php 
        $username='';
        foreach($profiledata as $row){
            $username = $row->user_name;
            $phone = $row->phone;
            $email = $row->email;
            $address = $row->address;
        }

    ?>
    <!-- services Grid-->
    <section class="page-section bg-light" id="services">
        <div class="container-fluid align-items-center justify-content-center">



            <!-- Page Heading -->
            <center>
                <h1 class="h3 mb-2  text-gray-800 justify-content:center">User Profile</h1>
            </center>
            

                    <div class="container-fluid justify-content:center">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        User Details
                                    </div>
                                    <div class="card-body">
                                        <!-- <form class="user"> -->
                                        <div class="form-group ">

                                            <label>User Name</label>
                                            <input type="text" class="form-control form-control-user" id="name" placeholder="Please Enter Name"  value="<?= $username; ?>" disabled>


                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label>User Phone</label>

                                                <input type="text" class="form-control form-control-user" id="phone" placeholder="Please Enter Phone Number" value="<?= $phone; ?>">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label>User Email</label>

                                            <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" value="<?= $email; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>User Address</label>

                                            <textarea class="form-control form-control-user" placeholder="Address" id="address" value="<?= $address; ?>">
                                            
                                        </textarea>

                                        </div>
                                        <!-- <div class="form-group">
                                        <label>User Password</label>

                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="User Password">
                                    </div> -->

                                        <button class="btn btn-primary btn-user btn-block" >
                                            Update Profile
                                        </button>
                                        <hr>

                                        <!-- </form> -->
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="card mb-4">
                                    <div class="card-header">
                                        <center><img width="150px" class="img-profile rounded-circle" src="<?php echo base_url() ?>assets/assets/img/undraw_profile.svg"></center>
                                    </div>
                                    <div class="card-body">
                                        <h4><b><?php $username = $this->session->userdata['loged_user']['user_name'];
                                                                            echo $username;
                                                                            ?></b></h4>
                                        <p>Engineer</p>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h3>Password Reset</h3>
                                    </div>
                                    <div class="card-body">
                                        <form class="user" id="changeps">
                                            <div class="form-group ">
                                                <label>Old Password</label>
                                                <input type="text" class="form-control form-control-user" placeholder="Please Enter Old Password" id="oldpass" required>
                                            </div>
                                            <div class="form-group ">
                                                <label>New Password</label>
                                                <input type="text" class="form-control form-control-user" placeholder="Please Enter New Password" id="newpass" required>
                                            </div>
                                            <div class="form-group ">
                                                <label>Confirm Password</label>
                                                <input type="text" class="form-control form-control-user" placeholder="Please Enter New Password" id="conpass" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block"> Change Password </button>
                                        </form>
                                    </div>
                                </div>


                            </div>

                        </div>






                    </div>
        </div>
    </section>


    <?php $this->load->view("includes/footer") ?>
    <?php $this->load->view("includes/js") ?>
</body>


</html>