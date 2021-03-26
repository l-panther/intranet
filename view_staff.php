<?php
include 'includes/session-start.php'; # Initiate session.
require_once 'includes/functions.php'; # Functions.
include 'includes/header.php'; # HTML head.
$bannerId = "adminBanner"; # ID name for element.
$bannerName = "Administrator"; # Banner text.
$userName = ""; # Name of user.
if(isSession("adminName")) { # If sesson exists.
    $userName = ucfirst($_SESSION["adminName"]); # Assign name for user.
	include 'includes/admin-banner.php'; # Banner.
    echo '  
			<!-- Main content -->
			<main role="main" class="w3-large" id="register-main">
				';
    include 'includes/user-logged.php'; # Display user. 
    include 'includes/view-staff.php'; # Display add staff form. 
} else { # Else if name does not exist, display form.
    include 'includes/admin-login.php'; # Display admin login form.
    include 'includes/footer.php'; # Footer.
}
?>