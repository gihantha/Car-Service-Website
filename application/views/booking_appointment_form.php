<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("includes/head") ?>
</head>

<body id="page-top">
    <?php $this->load->view("includes/navbar") ?>

    <!-- services Grid-->
    <section class="page-section bg-light" id="servicesform">
        <div class="container-fluid align-items-center justify-content-center">



            <!-- Page Heading -->
            <center>
                <h1 class="h3 mb-2  text-gray-800 justify-content:center">Appointment</h1>
                <p class="mt-4 ">Please fill Appointment Details.</p>
            </center>
            <div class="container justify-content:center">
                <div class="row ">
                    <div class="col-md-6 ">

                        <form class="services" id="formaddappointment">

                            <div class="form-group ">
                                <label>Customer Name</label>
                                <input type="text" class="form-control form-control-services" id="name" placeholder="Please Enter Your Name" required>
                            </div>

                            <div class="form-group ">
                                <label>Customer Email</label>
                                <input type="email" class="form-control form-control-services" id="email" placeholder="Please Enter Your Email" required>
                            </div>

                            <div class="form-group ">
                                <label>Customer Phone Number</label>
                                <input type="tel" class="form-control form-control-services" id="phone" placeholder="Please Enter Your Phone Number" required>
                            </div>

                            <div class="form-group ">
                                <label>Service Name</label>
                                <select class="form-control " id="service_name" required>
                                    <option value="" disabled selected>Please Select a Service</option>
                                    <option value="service1">Service 1</option>
                                    <option value="service2">Service 2</option>
                                    <option value="service3">Service 3</option>

                                </select>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Preferred Date</label>
                                    <input type="date" class="form-control form-control-services" id="date" placeholder="Please Enter Duration" required>
                                </div>
                            </div>

                            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                                <label>Preferred Time</label>
                                <input type="time" class="form-control form-control-services" id="time" placeholder="Please Enter Preferred Time" required>
                            </div>

                            <div class="form-group ">
                                <label>Vehicle Make</label>
                                <select class="form-control " id="vehicle_make">
                                    <option value="" disabled selected>Please Select a Vehicle Make</option>
                                    <option value="Manufacturer1">Manufacturer1</option>
                                    <option value="Manufacturer2">Manufacturer2</option>
                                    <option value="Manufacturer3">Manufacturer3</option>
                                </select>
                            </div>

                            <div class="form-group ">
                                <label>Vehicle Model</label>
                                <input type="text" class="form-control form-control-services" id="model" placeholder="Please Enter Vehicle Model">
                            </div>

                            <div class="form-group ">
                                <label>Year</label>
                                <input type="number" class="form-control form-control-services" id="year" placeholder="Please Enter Year">
                            </div>

                            <div class="form-group ">
                                <label>License Plate Number</label>
                                <input type="text" class="form-control form-control-services" id="license_plate" placeholder="Please Enter License Plate Number">
                            </div>

                            <div class="form-group ">
                                <label>Comments/Notes</label>
                                <textarea class="form-control" id="comments" placeholder="Please Enter Additional Requirements"></textarea>
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

    <script>
        $('#formaddappointment').on('submit', function(e) {
            e.preventDefault();

            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var service_name = $('#service_name').val();
            var date = $('#date').val();
            var time = $('#time').val();
            var vehicle_make = $('#vehicle_make').val();
            var model = $('#model').val();
            var year = $('#year').val();
            var license_plate = $('#license_plate').val();
            var comments = $('#comments').val();

            $.ajax({

                type: "POST",
                url: "<?= base_url() ?>add_booking_appointment",
                data: 'name=' + name + '&phone='+ phone + '&email='+email + '&service_name='+service_name + '&date='+date + '&time='+time + '&vehicle_make='+vehicle_make + '&model='+model + '&year='+year + '&license_plate='+license_plate + '&comments='+comments,


                success: function(result) {

                    var resdata = $.parseJSON(result);

                    if (resdata.status == 'success') {

                        Swal.fire({
                            title: 'Record Saved!',
                            text: resdata.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });

                    } else {
                        Swal.fire({
                            title: 'Record Saved!',
                            text: resdata.message,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });

                    }

                },
                error: function(result) {

                    alert("error");

                }
            })



        })
    </script>
</body>


</html>