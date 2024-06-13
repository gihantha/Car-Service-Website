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
            <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Customers</h1>
<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. </p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url();?>/dashboard/dashboard_customermgt_add" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                    <span class="text">Add a Customer</span>
                                </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Customer  ID</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Total Appointments</th>
                        <th>Last Appointment Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>john.doe@example.com</td>
                        <td>123-456-7890</td>
                        <td>123 Maple St, Anytown</td>
                        <td>5</td>
                        <td>2024-06-10</td>
                        <td>View/Edit/Delete</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>jane.smith@example.com</td>
                        <td>987-654-3210</td>
                        <td>456 Oak St, Anytown</td>
                        <td>3</td>
                        <td>2024-06-08	</td>
                        <td>View/Edit/Delete</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bob Johnson</td>
                        <td>bob.johnson@example.com</td>
                        <td>555-123-4567</td>
                        <td>789 Pine St, Anytown</td>
                        <td>2</td>
                        <td>2024-06-05</td>
                        <td>View/Edit/Delete</td>
                    </tr>
                    
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
</body>


</html>