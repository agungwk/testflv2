
<?php
session_start();
if (!function_exists("curl_init")) die("cURL extension is not installed");

$formdata = $_POST['formdata'];
$formdata = json_decode($formdata);
$formdata = json_encode($formdata);
$formdata = json_decode($formdata);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" /> -->
	<!-- <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" /> -->
<!-- 	<meta name="author" content="FREEHTML5.CO" /> -->



<!-- @import url('https://fonts.googleapis.com/css?family=Montserrat');
font-family: "Montserrat", Montserrat, Arial, sans-serif; -->
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/select2.css">

	<!-- <link rel="stylesheet" href="plugins/rangeslider/rangeslider.css"> -->

	<link rel="stylesheet" href="plugins/iCheck/all.css">
	<link rel="stylesheet" href="plugins/bootstrap-slider/slider.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body  style="background-color: #7798c5;">
		<header class="navHead">
			<div class="container">
				<div style="width:85px; float: left;">
					<img src="images/Asset/bangJoni.png" class="" style="height:auto; width: 80px;">
				</div>

				<div class="textBox">
					<span><img src="images/Asset/chevron.png" class="dialog"></span>

					Coba cek lagi ringkasan pemesanan tiket pesawat yang kamu pilih.
				</div>
			</div>
		</header>

		<!-- end:header-top -->

		<div class="">
			<!-- <div class="row filterBox no-margin">
				<div class="col-xs-4"><button class="btnBlank" data-toggle="collapse" data-target="#MASKAPAI">MASKAPAI</button></div>
				<div class="col-xs-4"><button class="btnBlank" data-toggle="collapse" data-target="#WAKTU">WAKTU</button></div>
				<div class="col-xs-4"><button class="btnBlank" data-toggle="collapse" data-target="#TRANSIT">TRANSIT</button></div>
			</div> -->

		</div>

		<div class="container animate-box">
			<?php if ($formdata->pp == false) {?>

			<div class="row no-margin">
				<div class="col-xs-12" style="background-color:#fff; padding:10px 15px; margin-bottom:5px;">
					<div style="font-size: 14px; line-height: 14px; color: #326699; font-weight: bold; border-bottom: 1.5px solid #999999; padding: 5px 0;">
					PENERBANGAN PERGI </br> <span style="font-size: 10px; color: #a5a5a5;"><?php echo $formdata->result->departure_date_formatted; ?></span>
					</div>

					<div>
						<img src="<?php echo $formdata->result->departure->image; ?>" style="height:auto; width: 70px; margin: 10px 0;">
					</div>

					<div style="width: 100%; float: left; border-bottom: 1px solid #999999; padding-bottom: 5px;">
						<div class="col-xs-5 arrive" style="padding: 0 !important;">
							<div class="timesConfirm"><?php echo substr($formdata->result->departure->full_via,11,6); ?></div>
							<div class="timesConfirm" data-id="10485"> <?php echo $formdata->result->origin_name . ' (' . $formdata->result->departure->origin . ')'; ?></div>
							<div style="font-size:9px;"><?php echo $formdata->result->departure->simple_departure_time; ?></div>
						</div>

						<div class="col-xs-2 stopBox" style="padding: 5px !Important; font-size: 8px;">
							<div class="stops">
								<ul class="stop-line">
									<img class="directArrow" src="images/Asset/cheright.png">
								</ul>

								<div class="leg-stops">
									<span class="leg-stops-red leg-stops-label"><?php echo $formdata->result->departure->transit; ?></span>
								</div>
							</div>
						</div>
						<div class="col-xs-5 arrive" style="padding: 0 10px !important;">
							<div class="timesConfirm"><?php echo substr($formdata->result->departure->full_via,19,5); ?></div>
							<div class="timesConfirm" data-id="10485"><?php echo $formdata->result->destination_name . ' (' . $formdata->result->departure->destination . ')'; ?></div>
							<div style="font-size:9px;"><?php echo $formdata->result->departure->simple_arrival_time; ?></div>
						</div>
					</div>

					<div style="width:100%; float: left; padding-top: 10px; color:#efbd03;">
						<span style="text-align:left; font-size:10px; font-weight: bold;">HARGA</span>
						<span style="text-align:right; float:right; font-weight:bold; font-size:14px;">IDR <?php echo number_format(intval($formdata->result->total_price),0,',','.') ?></span>
					</div>

				</div>

				<div class="col-xs-12 totalBox" style="font-size: 14px; color: #efbd03;">
					TOTAL : <span> IDR <?php echo number_format(intval($formdata->result->total_price),0,',','.') ?></span>
				</div>

				<div class="col-xs-12" style="text-align:center; width:100%;">
					<button style="margin: 20px auto; padding: 5px; font-size: 14px; width: 70%;" type="submit" class="btn btn-primary btn-block submit-tiket" value="PESAN">PESAN </button>
				</div>
			</div>
			<?php } else if ($formdata->pp == true) { ?>
				<div class="row no-margin">
					<div class="col-xs-12" style="background-color:#fff; padding:10px 15px; margin-bottom:5px;">
						<div style="font-size: 14px; line-height: 14px; color: #326699; font-weight: bold; border-bottom: 1.5px solid #999999; padding: 5px 0;">
						PENERBANGAN PERGI </br> <span style="font-size: 10px; color: #a5a5a5;"><?php echo $formdata->result->departure->departure_date_formatted; ?></span>
						</div>

						<div>
							<img src="<?php echo $formdata->result->departure->departure->image; ?>" style="height:auto; width: 70px; margin: 10px 0;">
						</div>

						<div style="width: 100%; float: left; border-bottom: 1px solid #999999; padding-bottom: 5px;">
							<div class="col-xs-5 arrive" style="padding: 0 !important;">
								<div class="timesConfirm"><?php echo substr($formdata->result->departure->departure->full_via,11,6); ?></div>
								<div class="timesConfirm" data-id="10485"> <?php echo $formdata->result->departure->origin_name . ' (' . $formdata->result->departure->departure->origin . ')'; ?></div>
								<div style="font-size:9px;"><?php echo $formdata->result->departure->departure->simple_departure_time; ?></div>
							</div>

							<div class="col-xs-2 stopBox" style="padding: 5px !Important; font-size: 8px;">
								<div class="stops">
									<ul class="stop-line">
										<img class="directArrow" src="images/Asset/cheright.png">
									</ul>

									<div class="leg-stops">
										<span class="leg-stops-red leg-stops-label"><?php echo $formdata->result->departure->departure->transit; ?></span>
									</div>
								</div>
							</div>
							<div class="col-xs-5 arrive" style="padding: 0 10px !important;">
								<div class="timesConfirm"><?php echo substr($formdata->result->departure->departure->full_via,19,5); ?></div>
								<div class="timesConfirm" data-id="10485"><?php echo $formdata->result->departure->destination_name . ' (' . $formdata->result->departure->departure->destination . ')'; ?></div>
								<div style="font-size:9px;"><?php echo $formdata->result->departure->departure->simple_arrival_time; ?></div>
							</div>
						</div>

						<div style="width:100%; float: left; padding-top: 10px; color:#efbd03;">
							<span style="text-align:left; font-size:10px; font-weight: bold;">HARGA</span>
							<span style="text-align:right; float:right; font-weight:bold; font-size:14px;">IDR <?php echo number_format(intval($formdata->result->departure->total_price),0,',','.') ?></span>
						</div>

					</div>

					<div class="col-xs-12" style="background-color:#fff; padding:10px 15px; margin-bottom:5px;">
						<div style="font-size: 14px; line-height: 14px; color: #326699; font-weight: bold; border-bottom: 1.5px solid #999999; padding: 5px 0;">
						PENERBANGAN PULANG </br> <span style="font-size: 10px; color: #a5a5a5;"><?php echo $formdata->result->departure->return_date_formatted; ?></span>
						</div>

						<div>
							<img src="<?php echo $formdata->result->return->return->image; ?>" style="height:auto; width: 70px; margin: 10px 0;">
						</div>

						<div style="width: 100%; float: left; border-bottom: 1px solid #999999; padding-bottom: 5px;">
							<div class="col-xs-5 arrive" style="padding: 0 !important;">
								<div class="timesConfirm"><?php echo substr($formdata->result->return->return->full_via,11,6); ?></div>
								<div class="timesConfirm" data-id="10485"> <?php echo $formdata->result->departure->destination_name . ' (' . $formdata->result->return->return->destination . ')'; ?></div>
								<div style="font-size:9px;"><?php echo $formdata->result->departure->departure->simple_departure_time; ?></div>
							</div>

							<div class="col-xs-2 stopBox" style="padding: 5px !Important; font-size: 8px;">
								<div class="stops">
									<ul class="stop-line">
										<img class="directArrow" src="images/Asset/cheright.png">
									</ul>

									<div class="leg-stops">
										<span class="leg-stops-red leg-stops-label"><?php echo $formdata->result->return->return->transit; ?></span>
									</div>
								</div>
							</div>
							<div class="col-xs-5 arrive" style="padding: 0 10px !important;">
								<div class="timesConfirm"><?php echo substr($formdata->result->return->return->full_via,19,5); ?></div>
								<div class="timesConfirm" data-id="10485"><?php echo $formdata->result->departure->origin_name . ' (' . $formdata->result->return->return->origin . ')'; ?></div>
								<div style="font-size:9px;"><?php echo $formdata->result->return->return->simple_arrival_time; ?></div>
							</div>
						</div>

						<div style="width:100%; float: left; padding-top: 10px; color:#efbd03;">
							<span style="text-align:left; font-size:10px; font-weight: bold;">HARGA</span>
							<span style="text-align:right; float:right; font-weight:bold; font-size:14px;">IDR <?php echo number_format(intval($formdata->result->return->total_price),0,',','.') ?></span>
						</div>

					</div>


					<div class="col-xs-12 totalBox" style="font-size: 14px; color: #efbd03;">
						TOTAL : <span> IDR <?php echo number_format(intval($formdata->result->departure->total_price + $formdata->result->return->total_price),0,',','.') ?></span>
					</div>

					<div class="col-xs-12" style="text-align:center; width:100%;">
						<button style="margin: 20px auto; padding: 5px; font-size: 14px; width: 70%;" type="submit" class="btn btn-primary btn-block submit-tiket" value="PESAN">PESAN </button>
					</div>
				</div>
			<?php } ?>
		</div>

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>

	<!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script src="plugins/iCheck/icheck.js"></script>

    <script src="plugins/bootstrap-slider/bootstrap-slider.js"></script>
    <!-- <script src="plugins/bootstrap-slider/bootstrap-slider.js"></script>  -->

    <script src="plugins/rangeslider/rangeslider.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script src="js/jquery.redirect.js"></script>

	<script>

		$(document).ready(function(){

			$(".select2").select2({
                placeholder: ""
                //allowClear: true
			});

			// // With JQuery
			// $('#ex1').slider({
			// 	formatter: function(value) {
			// 		return 'Current value: ' + value;
			// 	}
			// });
			//
			// // Without JQuery
			// var slider = new Slider('#ex1', {
			// 	formatter: function(value) {
			// 		return 'Current value: ' + value;
			// 	}
			// });
			//
			//
			// // With JQuery
			$("#ex1").slider({});
			$("#ex2").slider({});
			//
			// // Without JQuery
			// var slider = new Slider('#ex2', {});

			$('.submit-tiket').click(function(){
				var post_data = <?php echo json_encode($formdata); ?>;
				console.log(JSON.stringify(post_data));
				$.redirect('order-form.php', {'formdata' : JSON.stringify(post_data)});

				});
		});


	</script>

	</body>
</html>
