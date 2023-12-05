<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once(dirname(dirname(__FILE__)).'/header-global.php');?>
    <meta name="Identifier-URL" content="http://www.atiz.com" /> 
    <meta name="author" content="">
    <title>Payment Success</title>
    <link href="//www.atiz.com/atiz1.ico" rel="shortcut icon" />
    <!-- Custom CSS -->
    <link href="css/main-responsive.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,700" /> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.payment-succeess-section {
			padding-top:60px;
			padding-bottom:60px;
			background: #fff;
		}

		.payment-succeess-section p {
			font-size:18px;
			line-height:1.6;
			color:#666;
			text-align:center;
			border-bottom:1px solid #e6e6e6;
			padding-top:30px;
			padding-bottom: 65px;	
		}
	</style>

</head>
<body>

	<?php require_once(dirname(dirname(__FILE__)).'/header-responsive.php');?>

	<section class="payment-succeess-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">						
					<p>Thank you for your payment. Your transaction has been completed, <br>and a receipt for your purchase has been emailed to you.</p>
				</div>
			</div>
		</div>
	</section>

	<?php require_once(dirname(dirname(__FILE__)).'/footer-responsive.php');?>
</body>
</html>