<?php
session_start();
if (!function_exists("curl_init")) die("cURL extension is not installed");

$formdata = $_POST['formdata'];
$formdata = json_decode($formdata);
$formdata = json_encode($formdata);
$formdata = json_decode($formdata);
$request_json = $formdata->request;
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

	<link rel="stylesheet" href="plugins/iCheck/all.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body  style="background-color: #326699;">
		<header class="navHead">
			<div class="container">
				<div style="width:85px; float: left;">
					<img src="images/Asset/bangJoni.png" class="" style="height:auto; width: 80px;">
				</div>

				<div class="textBox">
					<span><img src="images/Asset/chevron.png" class="dialog"></span>

					One step away to ordering your ticket. Tinggal isi data kamu yang lengkap nih!
				</div>
			</div>
		</header>


		<div class="" style="text-align:left;">
			<div class="row filterBox no-margin" style="text-align:left;">
				INFORMASI KONTAK YANG DAPAT DIHUBUNGI
			</div>
		</div>

		<form id="form-contact-passenger" method="post">

			<div class="container animate-box" style="background-color: #7798c5;">
				<div class="row mt no-margin animate-box">
					<div class="col-xs-4 mt no-padding" style="padding-right: 10px !important;">
						<label for="class" class="lableFont">TITEL:</label>
						<!-- <select class="cs-select cs-skin-border" id="contact-title">
							<option value="TUAN" selected>TUAN</option>
							<option value="NYONYA">NYONYA</option>
						</select> -->
						<select id="contact-title" name="conSalutation" class="form-control f14Bold" style="padding: 10px 5px; border-radius: 0;">
							<option value="TUAN" selected>TUAN</option>
							<option value="NYONYA">NYONYA</option>
						</select>
					</div>

					<div class="col-xs-8 mt alternate no-padding">
						<input type="hidden" name="conEmailAddress" value="a2c6dfee7e69677cc7c9@cloudmailin.net" />
						<label for="class" class="lableFont">NAMA LENGKAP:</label>
						<input type="text" class="form-control noRadius" id="contact-full-name" name="conFirstName" placeholder="ISI SESUAI KTP/SIM/PASPOR" style="padding: 10px;">
					</div>
				</div>


				<div class="row mt no-margin animate-box">
					<label for="class" class="lableFont">NO. TELEPON:</label>
					<div class="row no-margin">
						<div class="col-xs-3 mt alternate no-padding" style="padding-right: 10px !important;">
							<input type="number" class="form-control noRadius" placeholder="62" style="padding: 10px;" readonly>
						</div>

						<div class="col-xs-9 mt alternate no-padding">
							<input type="text" class="form-control noRadius" id="contact-phone-no" placeholder="" style="padding: 10px;" name="conPhone" >
						</div>
					</div>
				</div>
			</div>

			<?php for ($x = 0; $x < $request_json->adult; $x++) { ?>
				<div class="container animate-box">
					<div class="headList">DETAIL PENUMPANG DEWASA <?php echo $x+1; ?></div>

					<?php if ($x == 0) { ?>
						<span class="f14">
							<label class="squaredFourWhite">
								<input type="checkbox" id="check_same_id" />
								<label for="check_same_id"></label>
							</label>
							<label class="f12 labelCheck">SAMA DENGAN KONTAK</label>
						</span>
					<?php } ?>

					<div class="row mt no-margin animate-box">
						<div class="col-xs-4 mt no-padding" style="padding-right: 10px !important;">
							<label for="class" class="lableFont">TITEL:</label>
							<!-- <select class="cs-select cs-skin-border" name="adult-passenger-title">
								<option value="TUAN">TUAN</option>
								<option value="NYONYA">NYONYA</option>
							</select> -->
							<select name="titlea<?php echo $x+1; ?>" class="form-control f14Bold" style="padding: 10px 5px; border-radius: 0;">
								<option value="TUAN">TUAN</option>
								<option value="NYONYA">NYONYA</option>
							</select>
						</div>

						<div class="col-xs-8 mt alternate no-padding">
							<label for="class" class="lableFont">NAMA LENGKAP:</label>
							<input type="text" class="form-control noRadius" name="firstnamea<?php echo $x+1; ?>" id="from-place" placeholder="ISI SESUAI KTP/SIM/PASPOR" style="padding: 10px;">
						</div>
					</div>
				</div>
			<?php } ?>

			<?php for ($x = 0; $x < $request_json->child; $x++) { ?>
				<div class="container animate-box">
					<div class="headList">DETAIL PENUMPANG ANAK <?php echo $x+1; ?></div>

					<div class="row mt no-margin animate-box">
						<div class="col-xs-4 mt no-padding" style="padding-right: 10px !important;">
							<label for="class" class="lableFont">TITEL:</label>
							<!-- <select class="cs-select cs-skin-border" name="adult-passenger-title">
								<option value="TUAN">TUAN</option>
								<option value="NYONYA">NYONYA</option>
							</select> -->
							<select name="titlec<?php echo $x+1; ?>" class="form-control f14Bold" style="padding: 10px 5px; border-radius: 0;">
								<option value="TUAN">TUAN</option>
								<option value="NYONYA">NYONYA</option>
							</select>
						</div>

						<div class="col-xs-8 mt alternate no-padding">
							<label for="class" class="lableFont">NAMA LENGKAP:</label>
							<input type="text" class="form-control noRadius" name="firstnamec<?php echo $x+1; ?>" id="from-place" placeholder="ISI SESUAI KTP/SIM/PASPOR" style="padding: 10px;">
						</div>
					</div>
				</div>
			<?php } ?>

			<?php for ($x = 0; $x < $request_json->infant; $x++) { ?>
				<div class="container animate-box">
					<div class="headList">DETAIL PENUMPANG BAYI <?php echo $x+1; ?></div>

					<div class="row mt no-margin animate-box">
						<div class="col-xs-4 mt no-padding" style="padding-right: 10px !important;">
							<label for="class" class="lableFont">TITEL:</label>
							<!-- <select class="cs-select cs-skin-border" name="adult-passenger-title">
								<option value="TUAN">TUAN</option>
								<option value="NYONYA">NYONYA</option>
							</select> -->
							<select name="titlei<?php echo $x+1; ?>" class="form-control f14Bold" style="padding: 10px 5px; border-radius: 0;">
								<option value="TUAN">TUAN</option>
								<option value="NYONYA">NYONYA</option>
							</select>
						</div>

						<div class="col-xs-8 mt alternate no-padding">
							<input type="hidden" name="parenti<?php echo $x+1; ?>" value="<?php echo $x+1; ?>" />
							<label for="class" class="lableFont">NAMA LENGKAP:</label>
							<input type="text" class="form-control noRadius" name="firstnamei<?php echo $x+1; ?>" id="from-place" placeholder="ISI SESUAI KTP/SIM/PASPOR" style="padding: 10px;">
						</div>
					</div>
				</div>
			<?php } ?>

				<div class="col-xs-12" style="text-align:center; width:100%;">
					<!-- <button onClick="window.location.href='order-form.html'" style="margin: 20px auto; padding: 5px; font-size: 14px; width: 70%;" type="submit" class="btn btn-primary btn-block" value="PESAN">PESAN </button>   -->
					<input type="submit" style="margin: 20px auto; padding: 5px; font-size: 14px; width: 70%;"  class="btn btn-primary btn-block" value="PESAN" />
				</div>


			</div>
		</form>


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

    <script src="js/bootstrap-slider.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script src="js/jquery.redirect.js"></script>

	<script>
	$(document).ready(function(){

		$(".select2").select2({
			placeholder: "",
			//allowClear: true
		});

		alert('asduuu');

		$("#check_same_id").change(function(){
			var chckValue = $(this).is(':checked');
			if (chckValue) {
				var contact_title = $("#contact-title").find(":selected").val()
				var contact_full_name = $('#contact-full-name').val();
				var contact_phone_no = $('#contact-phone-no').val();
				console.log(contact_title);

				// console.log($('input[name="titlea1"]')[0]);
				// console.log($('select[name="titlea1"]')[0]);
				$('input[name="firstnamea1"]')[0].value = contact_full_name;
				// $('select[name="adult-passenger-title"]')[0].value = contact_title;
				$('select[name$="titlea1"]').eq(0).val(contact_title);
				// $('select[name$="adult-passenger-title"]').eq(0).removeAttr('selected').find(contact_title).attr('selected', 'selected');
				// console.log('input[name="adult-passenger-title"] option[value='+contact_title+']');
				// $('input[name="adult-passenger-title"] option[value='+contact_title+']').attr('selected','selected').change();
			} else {
				$('input[name="adult-passenger-name"]')[0].value = "";
				// $('select[name$="adult-passenger-title"]').eq(0).val("");
			}
		});

		$("#form-contact-passenger").submit(function(e){
			e.preventDefault();
			var json_object_result = $(this).serializeArray();
			var data = {
				"formdata" : json_object_result,
				"flight_data" : <?php echo json_encode($formdata); ?>,
				"msisdn" : "<?php echo $formdata->result->msisdn; ?>"
			};
			console.log(data);
			console.log(JSON.stringify(data));

			// var jqxhr = $.post( "http://139.59.244.156:8001/postfltiket", json_object_result, function(result_data) {
			// 	// alert( "success" );
			// 	// alert(JSON.stringify(data));
			// 	console.log(result_data);
			// 	// $.redirect('result_pp.php', {'formdata' : JSON.stringify(data)});
			// 	header("Location:https://line.me/R/ti/p/%40bangjoni");
			// 	// $.postdatas({
			// 	// 	url:'flight-result-bj.php',
			// 	// 	datas:data
			// 	// });
			// 	// postData('flight-result-bj.php', 'post', data);
			// })
			// .fail(function(e) {
			// 	// alert("error");
			// 	// alert(JSON.stringify(e));
			// 	console.log(data);
			// })
			// .always(function() {
			// 	$('#loading-modal').modal('hide');
			// });
		});
	});
	</script>

	<!-- <script>
		$(document).ready(function(){

			// $(".select2").select2({
      //           placeholder: ""
      //           //allowClear: true
			// });
			alert('asd');
			$('#check_same_id').on('ifChecked', function(){
				var chckValue = $(this).iCheck('update')[0].checked;
				console.log(chckValue);
				var contact_full_name = $('#contact-full-name').val();
				var contact_phone_no = $('#contact-phone-no').val();

				$('input[name^="adult-passenger-name"]').each(function(){
					$(this).val(contact_full_name);
					break;
				});
			});

			$('#').submit(function(){
				console.log( $( this ).serializeArray() );
  			event.preventDefault();
			});

		});


	</script> -->

	</body>
</html>
