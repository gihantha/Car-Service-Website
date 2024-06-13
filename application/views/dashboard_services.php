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
<h1 class="h3 mb-2 text-gray-800">Services</h1>
<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. </p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href= "<?php echo base_url();?>/dashboard/dashboard_services_add" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                    <span class="text">Add a service</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Service ID</th>
                        <th>Service Name</th>
                        <th>Description</th>
                        <th>Duration</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Oil Change</td>
                        <td>Standard oil change service</td>
                        <td>30 mins</td>
                        <td>$29.99</td>
                        <td>Maintenance</td>
                        <td>Active</td>
                        <td>Edit/Delete</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tire Rotation</td>
                        <td>Rotate tires for even wear</td>
                        <td>45 mins</td>
                        <td>$19.99</td>
                        <td>Maintenance</td>
                        <td>Active</td>
                        <td>Edit/Delete</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Brake Inspection</td>
                        <td>Comprehensive brake check</td>
                        <td>1 hour</td>
                        <td>$49.99</td>
                        <td>Diagnostics</td>
                        <td>Active</td>
                        <td>Edit/Delete</td>
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