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
                    <h2 class="section-heading text-uppercase">services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- services item 1-->
                        <div class="services-item">
                            <a class="services-link" data-bs-toggle="modal" href="#servicesModal1">
                                <div class="services-hover">
                                    <div class="services-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/assets/img/services/1.jpg" alt="..." />
                            </a>
                            <div class="services-caption">
                                <div class="services-caption-heading">Periodic Services</div>
                                <div class="services-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- services item 2-->
                        <div class="services-item">
                            <a class="services-link" data-bs-toggle="modal" href="#servicesModal2">
                                <div class="services-hover">
                                    <div class="services-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/assets/img/services/2.jpg" alt="..." />
                            </a>
                            <div class="services-caption">
                                <div class="services-caption-heading">AC Service and Repair</div>
                                <div class="services-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- services item 3-->
                        <div class="services-item">
                            <a class="services-link" data-bs-toggle="modal" href="#servicesModal3">
                                <div class="services-hover">
                                    <div class="services-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/assets/img/services/3.jpg" alt="..." />
                            </a>
                            <div class="services-caption">
                                <div class="services-caption-heading">Batteries</div>
                                <div class="services-caption-subheading text-muted">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- services item 4-->
                        <div class="services-item">
                            <a class="services-link" data-bs-toggle="modal" href="#servicesModal4">
                                <div class="services-hover">
                                    <div class="services-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/assets/img/services/4.jpg" alt="..." />
                            </a>
                            <div class="services-caption">
                                <div class="services-caption-heading">Tyres and Wheel Care</div>
                                <div class="services-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- services item 5-->
                        <div class="services-item">
                            <a class="services-link" data-bs-toggle="modal" href="#servicesModal5">
                                <div class="services-hover">
                                    <div class="services-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/assets/img/services/5.jpg" alt="..." />
                            </a>
                            <div class="services-caption">
                                <div class="services-caption-heading">Denting and painting </div>
                                <div class="services-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- services item 6-->
                        <div class="services-item">
                            <a class="services-link" data-bs-toggle="modal" href="#servicesModal6">
                                <div class="services-hover">
                                    <div class="services-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/assets/img/services/6.jpg" alt="..." />
                            </a>
                            <div class="services-caption">
                                <div class="services-caption-heading">Cleaning</div>
                                <div class="services-caption-subheading text-muted">Photography</div>
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