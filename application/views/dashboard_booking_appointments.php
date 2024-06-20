<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("includes/head") ?>
</head>

<body id="page-top">
    <?php $this->load->view("includes/navbar") ?>

    <!-- services Grid-->
    <section class="page-section bg-light" id="services">
        <div>
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Bookings and Appointments</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. </p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="<?php echo base_url(); ?>/dashboard/dashboard_services_add" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-user-plus"></i>
                            </span>
                            <span class="text">Add a service</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="appointment_table" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Service Name</th>
                                        <th>Preferred Date</th>
                                        <th>Preferred Time</th>
                                        <th>Vehicle Make</th>
                                        <th>Vehicle Model</th>
                                        <th>Year</th>
                                        <th>License Plate Number</th>
                                        <th>Comments/Notes</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    foreach ($appointments as $row) {
                                        $name = $row->name;
                                        $phone = $row->phone;
                                        $email = $row->email;
                                        $service_name = $row->service_name;
                                        $date = $row->date;
                                        $time = $row->time;
                                        $vehicle_make = $row->vehicle_make;
                                        $model = $row->model;
                                        $year = $row->year;
                                        $license_plate = $row->license_plate;
                                        $comments = $row->comments;
                                    ?>
                                        <tr>
                                            <td><?php echo $name ?></td>
                                            <td><?php echo $phone ?></td>
                                            <td><?php echo $email ?></td>
                                            <td><?php echo $service_name ?></td>
                                            <td><?php echo $date ?></td>
                                            <td><?php echo $time ?></td>
                                            <td><?php echo $vehicle_make ?></td>
                                            <td><?php echo $model ?></td>
                                            <td><?php echo $year ?></td>
                                            <td><?php echo $license_plate ?></td>
                                            <td><?php echo $comments ?></td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <?php $this->load->view("includes/footer") ?>
    <?php $this->load->view("includes/js") ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>


    <script>
        $('#appointment_table').DataTable({
            "paging": true,
            "responsive": true,
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'pdf'
            ]
            // layout: {
            //     topStart: {
            //         buttons: [
            //             'copy', 'excel', 'pdf'
            //         ]
            //     }
            // }
        });
    </script>
</body>


</html>