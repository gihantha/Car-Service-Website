<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("includes/head") ?>
</head>

<body id="page-top">
    <?php $this->load->view("includes/navbar") ?>

    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Booking/Appointment</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>

            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="<?php echo base_url(); ?>/booking/booking_appointment_form">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-file-text fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <h4 class="my-3">Form for booking appointment.</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>

                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-calendar fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="my-3">Calendar view of available slots</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-bell fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Booking confirmation and reminders via email/SMS.
                    </h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view("includes/footer") ?>
    <?php $this->load->view("includes/js") ?>
</body>


</html>