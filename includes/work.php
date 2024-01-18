<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<div id="colorlib-work">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold">Works</h2>
				</div>
				<?php
                                    $sql= "SELECT * FROM `blogs`";
                                    $check=mysqli_query($con, $sql);
                                    while($result= @mysqli_fetch_array($check)){
                                ?>
				<div class="row">
					<!-- <div class="col-md-12">
						<div class="work-entry-flex animate-box js-fullheight">
							<div class="col-three-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 col-md-push-10 no-gutters">
										<div class="work-img js-fullheight">
										<?php 
                                            echo $result['message'];

											"<img src=".$result['image'].' width=100px height="100px">'
                                        ?>
										
										<img src="<?php echo $result['image'];?>" alt="aesthetic" >
										</div>
									</div>
									
								</div>
							</div>
							<div class= "col-one-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 col-md-pull-12 no-gutters">
										<div class="display-t js-fullheight">
											<div class="display-tc js-fullheight">
												<div class="text-inner text-inner-right">
													<h2><a href="work-single.html">Application and practice of creating durable images</a></h2>
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p><a href="work-single.html" class="btn-view">View Photo</a></p> 
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
			<!-------------------------------------->
				

					<div class="col-md-10"> 
						<div class="work-entry-flex animate-box js-fullheight">
							<div class="col-three-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-10 no-gutters">
										<div class="work-img js-fullheight" style="background-image: url(<?php echo $result['image']?>);">
										</div>
									</div>
								</div>
							</div>
							<div class="col-one-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-10 no-gutters">
										<div class="display-t js-fullheight">
											<div class="display-tc js-fullheight">
												<div class="text-inner text-inner-left">
												<?php 
												echo $result['message'];
											?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
                        }
                    ?>

					<!-- <div class="col-md-12">
						<div class="work-entry-flex animate-box js-fullheight">
							<div class="col-three-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 col-md-push-10 no-gutters">
										<div class="work-img js-fullheight" style="background-image: url(images/work-3.jpg);">
										</div>
									</div>
								</div>
							</div>
							<div class="col-one-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 col-md-pull-12 no-gutters">
										<div class="display-t js-fullheight">
											<div class="display-tc js-fullheight">
												<div class="text-inner text-inner-right">
													<h2><a href="work-single.html">Application and practice of creating durable images</a></h2>
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p><a href="work-single.html" class="btn-view">View Photo</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<!-- <div class="col-md-12">
						<div class="work-entry-flex animate-box js-fullheight">
							<div class="col-three-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 no-gutters">
										<div class="work-img js-fullheight" style="background-image: url(images/work-4.jpg);">
										</div>
									</div>
								</div>
							</div>
							<div class="col-one-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 no-gutters">
										<div class="display-t js-fullheight">
											<div class="display-tc js-fullheight">
												<div class="text-inner text-inner-left">
													<h2><a href="work-single.html">Application and practice of creating durable images</a></h2>
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p><a href="work-single.html" class="btn-view">View Photo</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<!-- <div class="col-md-12">
						<div class="work-entry-flex animate-box js-fullheight">
							<div class="col-three-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 col-md-push-10 no-gutters">
										<div class="work-img js-fullheight" style="background-image: url(images/work-5.jpg);">
										</div>
									</div>
								</div>
							</div>
							<div class="col-one-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 col-md-pull-12 no-gutters">
										<div class="display-t js-fullheight">
											<div class="display-tc js-fullheight">
												<div class="text-inner text-inner-right">
													<h2><a href="work-single.html">Application and practice of creating durable images</a></h2>
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p><a href="work-single.html" class="btn-view">View Photo</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<!-- <div class="col-md-12">
						<div class="work-entry-flex animate-box js-fullheight">
							<div class="col-three-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 no-gutters">
										<div class="work-img js-fullheight" style="background-image: url(images/work-6.jpg);">
										</div>
									</div>
								</div>
							</div>
							<div class="col-one-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 no-gutters">
										<div class="display-t js-fullheight">
											<div class="display-tc js-fullheight">
												<div class="text-inner text-inner-left">
													<h2><a href="work-single.html">Application and practice of creating durable images</a></h2>
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p><a href="work-single.html" class="btn-view">View Photo</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</body>
	</html>