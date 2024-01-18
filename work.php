<?php include('includes/header.php'); 
include('connect.php');
$con=mysqli_connect("localhost", "root");
    mysqli_select_db($con, "mehtaji_writes");
    if(isset($_POST['insert'])){
        $id=$_POST['id'];
        $msg=$_POST['msg'];
		$img=$_POST['img'];
        $sql="INSERT INTO `blogs`(`id`, `message`, `image`) VALUES ('$id','$msg', '$img')";
        $query=mysqli_query($con, $sql);
        if($sql){
          echo "Inserted successfully!";
        }
    }
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rhymatic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<!-- =============================== links =============================== -->
	<?php include('includes/header-links.php'); ?>
	<!-- =============================== links =============================== -->
	


	</head>
	<body>
	<!-- =============================== nav =============================== -->
	<?php include('includes/nav.php'); ?>
	<!-- =============================== nav =============================== -->
	<div id="colorlib-page">
	<!-- =============================== header =============================== -->
	<?php include('includes/header.php'); ?>
	<!-- =============================== header =============================== -->	
	
		

		<!-- =============================== nav =============================== -->
			<?php include('includes/work.php'); ?>
		<!-- =============================== nav =============================== -->
		
		<!-- =============================== nav =============================== -->
		<?php include('includes/footer.php'); ?>
		<!-- =============================== nav =============================== -->
		
			
		
		
	</div>

	<!-- =============================== footerjs =============================== -->
	<?php include('includes/footerjs.php'); ?>
	<!-- =============================== footerjs =============================== -->	
			


	</body>
</html>

