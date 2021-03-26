						<div role="navigation" class="w3-sidenav w3-collaspe w3-hide-large w3-hide-large w3-animate-left">
							<ul>
								<li id="closeSidenav" class="w3-black">Close<i class="fa fa-remove w3-right w3-hide-large w3-large" title="Close menu"></i>
				  				</li>
								
								<li class="w3-black w3-center"><img src="images/main/profile.png" alt="Profile picture of admin" /></li>
							
								<li class="w3-black w3-center">Hello <?php echo $userName; ?></li>
								<li><a href="view_staff.php">Staff<i class="fa fa-chevron-right"></i></a></li>
								<li>Students<i class="fa fa-chevron-right"></i></li>
								<li>Modules<i class="fa fa-chevron-right"></i></li>
								<li>Library<i class="fa fa-chevron-right"></i></li>
								<li>Forms<i class="fa fa-chevron-right"></i></li>
								<li>Messgaes<span class="menu-icon menu-icon-admin-messages">16</span></li>
								<li>Reports<span class="menu-icon menu-icon-reports icon_reports">37</span></li>
								<li>Issues<span class="menu-icon menu-icon-issues">5</span></li>
								<li class="w3-text-red">
								<a href="logout.php" title="Logout" id="drop-logout">Logout <i class="fa fa-sign-out"></i></a>
								
							</li>
							</ul> 
						</div>

<script>
	function w3_open() {
	  $(".w3-sidenav")[0].toggle();
	}
	function w3_close() {
	  document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
	}
	
	$("#closeSidenav").click(function() {
		$(".w3-sidenav").hide();
	});

</script>