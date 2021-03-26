					<section class="w3-row-padding w3-animate-right">
                        <h2><b>Statistics</b></h2>
					
						<div class="w3-center statistics">

							<div class="w3-col s12 m4 l4 stat-container">
								
								<div class="stat">
									
									<ul>
										<li><p>Staff</p></li>
										<li>
											<?php 
												$count = readStaffFile();
												echo $count[1];
											?>
										</li>
										
									</ul>
									<div>
										<a href="#view-staff" onclick="w3.show('#view-staffList'), w3.hide('#admin-stat')">View more</a>
									</div>
								</div>

							</div>
							<div class="w3-col s12 m4 l4 w3-disabled stat-container">
								<div class="stat w3-disable">
									
									<ul>
										<li><p>Students</p></li>
										<li>
											0
										</li>
										
									</ul>
									<div>
										<p>View more</p>
									</div>
								</div>

							</div>
							<div class="w3-col s12 m4 l4 w3-disabled stat-container">
								<div class="stat w3-disable">
									
									<ul>
										<li><p>Modules</p></li>
										<li>
											0
										</li>
										
									</ul>
									<div>
										<p>View more</p>
									</div>
								</div>

							</div>

						</div>

						<article id="performance-student">
							<h2>Student Performance</h2>

							<div class="w3-border" id="pie-container">
								<div id="donutchart">
								</div>
							</div>

						</article>
						
						<article id="performance-staff">
							<h2>Staff Performance</h2>

							<div id="bar-container">
								<div id="bar_chart"></div>
							</div>

						</article>
				 </section> <!-- End quick access -->
                       