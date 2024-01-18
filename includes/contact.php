<?php
include ('connect.php');

if(isset($_POST['insert'])){
	$name=$_POST['name'];
	$email=$_POST['mail'];
	$msg=$_POST['msg'];
	date_default_timezone_set("Asia/Calcutta");
	$date = date('Y-m-d h:i:s');
  
//   $sql ="SELECT * FROM `users` WHERE `email`= '$email'";
//   $run = mysqli_query($con,$sql);
//   $var_count = @mysqli_num_rows($run);

    $sql="INSERT INTO `contact`(`name`, `email`, `message`, `time`) VALUES ('$name','$email','$msg', '$date')";
    $run = mysqli_query($con,$sql);

  
}
 ?>
 <script>
function myFunction() {
  alert("Message sent successfully!");
}
</script>
<div id="colorlib-contact">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold">Contact</h2>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0">
						<div class="row">
							<div class="col-md-4 animate-box">
								<h3>My Address</h3>
								<ul class="contact-info">
									<li><span><i class="icon-map5"></i></span>Mandsaur (458001), MP, India</li>
									<li><span><i class="icon-phone4"></i></span><a href="tel:+91-7974813066">+91 7974813066</a></li>
									<li><span><i class="icon-envelope2"></i></span><a href="mailto: upmehta27@gmail.com">upmehta27@gmail.com</a></li>
									<li><span><i class="icon-globe3"></i></span><a href="#">www.rhymatic.com</a></li>
								</ul>
							</div>
							<div class="col-md-7 col-md-push-1 animate-box">
							<form class="email-signup" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name" name="name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Email" name="mail">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" id="" cols="30" rows="7" placeholder="Message" name="msg"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" value="Send Message" class="btn btn-primary btn-submit" name="insert" onclick="myFunction()">
										</div>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		