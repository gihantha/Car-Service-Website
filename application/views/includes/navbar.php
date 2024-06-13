<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
	<div class="container">
		<a class="navbar-brand" href="#page-top"><img src="<?php echo base_url(); ?>/assets/assets/img/navbar-logo.svg" alt="..." /></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fas fa-bars ms-1"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>services">Services</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact Us</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="dropdown-item "><a class="dropdown-item " href=" <?php echo base_url() ?>aboutus">About Us</a></li>
						<li><a class="dropdown-item" href="#">Customer Testomanials</a></li>
						<li><a class="dropdown-item" href="#">Gallery</a></li>
						<li><a class="dropdown-item" href="#">News</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href=" <?php echo base_url() ?>booking">Booking/Appointment System</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>login">Login</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>dashboard">Admin</a></li>
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
						<svg width="15px" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#ffffff" d="M9 0a9 9 0 0 0-9 9 8.654 8.654 0 0 0 .05.92 9 9 0 0 0 17.9 0A8.654 8.654 0 0 0 18 9a9 9 0 0 0-9-9zm5.42 13.42c-.01 0-.06.08-.07.08a6.975 6.975 0 0 1-10.7 0c-.01 0-.06-.08-.07-.08a.512.512 0 0 1-.09-.27.522.522 0 0 1 .34-.48c.74-.25 1.45-.49 1.65-.54a.16.16 0 0 1 .03-.13.49.49 0 0 1 .43-.36l1.27-.1a2.077 2.077 0 0 0-.19-.79v-.01a2.814 2.814 0 0 0-.45-.78 3.83 3.83 0 0 1-.79-2.38A3.38 3.38 0 0 1 8.88 4h.24a3.38 3.38 0 0 1 3.1 3.58 3.83 3.83 0 0 1-.79 2.38 2.814 2.814 0 0 0-.45.78v.01a2.077 2.077 0 0 0-.19.79l1.27.1a.49.49 0 0 1 .43.36.16.16 0 0 1 .03.13c.2.05.91.29 1.65.54a.49.49 0 0 1 .25.75z"></path> </g></svg>
					</a>
					<!-- Dropdown - User Information -->
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="<?php echo base_url() ?>Settings/user_profile">
							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
							Profile
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url() ?>Login/userlogout">
							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
							Logout
						</a>
					</div>
				</li>

			</ul>
		</div>



	</div>
</nav>

<!-- Masthead-->
<header class="masthead">
	<div class="container">
		<div class="masthead-subheading">Welcome To Peak Performance Garage</div>
		<div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
		<a class="btn btn-primary btn-xl text-uppercase" href="<?php echo base_url(); ?>/aboutus">Tell Me More</a>
	</div>
</header>