<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("includes/head") ?>
</head>

<body id="page-top">
    <?php $this->load->view("includes/navbar") ?>

    <!-- services Grid-->
    <section class="page-section bg-light" id="services">
    <div class="container-fluid align-items-center justify-content-center">



<!-- Page Heading -->
 <center>
<h1 class="h3 mb-2  text-gray-800 justify-content:center">Appointment</h1>
<p class="mt-4 ">Please fill Appointment Details.</p>
</center>
<div class="container justify-content:center">
    <div class="row ">
        <div class="col-md-6 ">
            <form class="services" id="services_form">
                <div class="form-group ">

                    <label>Customer Name</label>
                    <input type="text" class="form-control form-control-services" id="name" placeholder="Please Enter Service Name">

                
                </div>
                <div class="form-group ">

                    <label>Service Name</label>
                    <input type="text" class="form-control form-control-services" id="name" placeholder="Please Enter Service Name">

                
                </div>
                
                <div class="form-group row">

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Appointment Date</label>

                        <input type="date" class="form-control form-control-services" id="phone" placeholder="Please Enter Duration">
                    </div>

                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label>Appointment Time</label>
                    <input type="time" class="form-control form-control-services" id="phone" placeholder="Please Enter Service Price">
                </div>
                <div class="form-group row">

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Duration</label>

                        <input type="text" class="form-control form-control-services" id="phone" placeholder="Please Enter Service Category">
                    </div>

                </div>
                <div class="form-group row">

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Status</label>

                        <input type="text" class="form-control form-control-services" id="phone" placeholder="Please Enter Status">
                    </div>

                </div>
               
                

                <button class="btn btn-primary btn-user btn-block">
                    Add Appointment
                </button>
                <hr>

            </form>
        </div>


    </div>






</div>
</div>
    </section>


    <?php $this->load->view("includes/footer") ?>
    <?php $this->load->view("includes/js") ?>
</body>


</html>