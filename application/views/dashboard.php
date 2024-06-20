<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("includes/head") ?>
</head>

<body id="page-top">
<?php $this->load->view("includes/navbar") ?>
	
<!-- services Grid-->
<section class="page-section bg-light" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Dashboard</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- services item 1-->
                        <div class="services-item">
                            <a   href="<?php echo base_url();?>dashboard/dashboard_services" >
                                <!-- <div class="services-hover">
                                    <div class="services-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> -->
                                <img class="img-fluid" src="<?php echo base_url();?>/assets/assets/img/dashboard/1.jpg" alt="..." />
                            </a>
                            <div class="services-caption">
                                <div class="services-caption-heading">Manage services and pricing</div>
                                <div class="services-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- services item 2-->
                        <div class="services-item">
                            <a   href="<?php echo base_url();?>booking/dashboard_booking_appointments" >
                                
                                <img class="img-fluid" src="<?php echo base_url();?>/assets/assets/img/dashboard/2.jpg" alt="..." />
                            </a>
                            <div class="services-caption">
                                <div class="services-caption-heading">View and Manage Appointments</div>
                                <div class="services-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- services item 2-->
                        <div class="services-item">
                            <a   href="<?php echo base_url();?>dashboard/dashboard_customermgt" >
                                
                                <img class="img-fluid" src="<?php echo base_url();?>/assets/assets/img/dashboard/3.jpg" alt="..." />
                            </a>
                            <div class="services-caption">
                                <div class="services-caption-heading">Customer management</div>
                                <div class="services-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-6 col-sm-6 mb-4 mb-lg-0">
                        <!-- services item 4-->
                        <div class="services-item">
                            <a class="services-link" data-bs-toggle="modal" href="#servicesModal4">
                                <div class="services-hover">
                                    <div class="services-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url();?>assets/assets/img/dashboard/4.jpg" alt="..." />
                            </a>
                            <div class="services-caption">
                                <div class="services-caption-heading">Content management for blog and testimonials.</div>
                                <div class="services-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-4 mb-sm-0">
                        <!-- services item 5-->
                        <div class="services-item">
                            <a class="services-link" data-bs-toggle="modal" href="#servicesModal5">
                                <div class="services-hover">
                                    <div class="services-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url();?>assets/assets/img/dashboard/5.jpg" alt="..." />
                            </a>
                            <div class="services-caption">
                                <div class="services-caption-heading">Reports and analytics. </div>
                                <div class="services-caption-subheading text-muted">Website Design</div>
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