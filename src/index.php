<?php
/************************ Variable area ************************/
$site['file'] = isset($_GET['web']) ? $_GET['web'] : "home";
$head['site_name'] = "VH Template";
$head['title'] = "Home";
$head['favicon'] = "";

/************************ Content area ************************/
ob_start();
$include_return = include("sites/".$site['file'].".php");
$string = ob_get_contents();
ob_end_clean();

?>
<!doctype html>
<html lang="en">
	<head>
		<title><?php echo $head['title'] . " | " . $head['site_name']; ?></title>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="author" content="xXNurioXx">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/png" href="<?php echo $head['favicon']; ?>"/>
		<!-- Site static head here -->
		<!--<link rel="stylesheet" type="text/css" href="custom.css.url">-->
		<!--<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">-->
	<body>
		
		<!-- Web content -->
		<div id="web-content">
			<?php echo str_replace("\n", "\n\t\t\t", $string)."\n"; ?>
		</div>
		
		<!-- Common JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<!-- Site JS -->
		<!-- <script type="text/javascript" src="custom.js.url"></script> -->

		<!-- Google Analitys Include !-->
		<script async="" src="https://www.google-analytics.com/analytics.js"></script><script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'GOOGLE-ANALITYS-ID-HERE', 'auto');
			ga('send', 'pageview');
		</script>

	</body>
</html>