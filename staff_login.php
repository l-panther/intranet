<?php
include 'includes/session-start.php'; # Initiate session.
require_once 'includes/functions.php'; # Functions.
require_once 'includes/scripts.html'; # Scripts.
include 'includes/header.php'; # HTML header.navigation.
$bannerId = "intranetBanner"; # ID name for element.
$bannerName = "Intranet"; # Banner text.

if(isSession("adminName")) { # If admin name exist in global array. 
    
	$userName = ucfirst($_SESSION["adminName"]); # Name for user.
    echo '    
            <!-- Main content -->
            <main role="main" class="main-content">';
    include 'includes/staff-main.php'; # Display intranet home page.
    echo '             
            </main> <!-- End main -->
        </div> <!-- End page -->
    </body> <!-- End body -->
</html> <!-- End html -->';
    
} else if(isSession("staffName")) { # Else if staff name exist in global array.
    $name = $_SESSION["staffName"]; # Name for user.
    echo '    
            <!-- Main content -->
            <main role="main class="main-content">';
    include 'includes/user-logged.php';  # Display user logged in.
    include 'includes/staff-main.php'; # Display intranet home page.
	
} else { # Else
    if(!isset($_SESSION["adminName"]) || !isset($_SESSION["staffName"])) { # If name does not exist, display form.
        include 'includes/staff-login.php'; # Staff login form.
    }
}
?>