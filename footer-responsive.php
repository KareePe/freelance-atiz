<?php
define('BASE_URL', '//www.atiz.com');

$ipAdr_f = getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?:
	getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');
$actual_link_f = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>
<?php if (empty($page_subdomain_name)) { //check page domain 
?>

	<section class="ask-us-now">
		<div class="container">
			<div class="row" style="gap:91px">
				<div class="col-lg-6 col-md-12">
					<div class="hidden-mb">
						<img src="images/ask-now.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="ask-block">
						<h3><span>ASK</span> US NOW</h3>
						<p>Have a question or comment? Submit it here. <br>We will try to respond to you within 24 hours.</p>

						<form method="POST" class="form-horizontal contact-frm" id="contact-form">
							<div class="block-loader" style="display: none;">
								<div class="lds-default">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>

							<div class="form-group" style="margin: 0;margin-bottom:15px;">
								<label class="control-label">From:</label>
								<input type="email" class="form-control con-email" name="askEmail" id="askEmail" placeholder="Your email" value="">
							</div>
							<div class="form-group" style="margin: 0;margin-bottom:15px;">
								<label class="control-label">Subject:</label>
								<input type="text" class="form-control con-subj" id="askSubject" name="askSubject" placeholder="Your question" value="">
							</div>
							<div class="form-group" style="margin: 0;margin-bottom:15px;">
								<label class="control-label">Message:</label>
								<textarea class="form-control con-msg" rows="8" id="askMsg" name="askMsg" placeholder="Your Message"></textarea>
							</div>

							<div id="ResMsg"></div>
							<div class="form-group" style="margin: 0;margin-top:15px;">
								<div class="col-12">
									<div class="btn-block">
										<button type="submit" class="btn btn-default contact-submit-btn">SUBMIT</button>
									</div>
								</div>
							</div>

							<div class="captcha-block" style="text-align: center; margin-top: 10px;">
								<div class="g-recaptcha" id="captcha-verify" data-sitekey="6Le9lkoeAAAAAN_MMmZ6rTlzIWUNeGd2RBkDcXWy" style="display: inline-block; margin: 0 auto;"></div>
							</div>

							<input type="hidden" name="md" id="md_contact" value="md_ask" />
							<input type="hidden" name="urlPage" id="urlPage_contact" value="<?php echo $actual_link_f; ?>">
							<input type="hidden" name="ip" id="ip_contact" value="<?php echo $ipAdr_f; ?>">
						</form>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="hidden-ds">
						<img src="images/ask-now.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

<?php } ?>

<section class="global-footer-new">
	<div class="footer-block">
		<div class="footer-top">
			<div>
				<img alt="Atiz Innovation" src="https://www.atiz.com/imagess/navbar/atiz-logo-red-25.png">
				<p>
					ATIZ INNOVATION CO., LTD. <br>729/26-27 Ratchadaphisek Rd.Yannawa, Bangkok 10120 Thailand <br>(+66) 2683 6600
				</p>
			</div>
			<div>
				<div class="footer-head-title low-space">NewsLetter</div>
				<form id="subscribe-form" method="post">
					<div class="input-group">
						<input type="text" class="form-control" name="subscribeMail" id="subscribeMail" placeholder="Enter your email">
						<span class="input-group-btn">
							<input class="btn btn-default" type="submit" id="newsletter-join-btn" value="JOIN" style="background-color: #CD122F !important;border:none !important;">
						</span>
					</div>
					<input type="hidden" name="md" id="md" value="md_sub" />
					<input type="hidden" name="ip" id="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
					<input type="hidden" name="urlPage" id="urlPage" value="<?php echo $actual_link_f; ?>" />
				</form>
				<div class="error-txt"></div>
				<div class="submissionResponse"></div>
			</div>
		</div>
		<div class="footer-middle">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<p class="link-head">PRODUCTS</p>
							<div class="link-flex">
								<div>
									<a href="https://mark2.atiz.com" title="Scanning Solution">Scanning Solution</a>
									<a href="https://mark2.atiz.com" title="BookDrive Mark 2">BookDrive Mark 2</a>
									<a href="https://mark2lite.atiz.com" title="BookDrive Mark 2 Lite">BookDrive Mark 2 Lite</a>
									<a href="https://mini2.atiz.com" title="BookDrive Mini 2">BookDrive Mini 2</a>
								</div>
								<div>
									<a href="https://n.atiz.com" title="BookDrive N">BookDrive N</a>
									<a href="https://www.atiz.com/which" title="All Model Comparison">All Model Comparison</a>
									<a href="https://www.atiz.com/store" title="Software Store">Software Store</a>
									<a href="https://www.atiz.com/bookdrive-capture" title="BookDrive Capture">Capture Software</a>
									<a href="https://www.atiz.com/bookdrive-editor-pro" title="BookDrive Editor Pro">Editor Software</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<p class="link-head">Thermal Camera</p>
							<div class="link-flex">
								<div>
									<a href="https://www.atiz.com/scanitizer/" target="_blank" title="Scanitizer">Scanitizer</a>
									<a href="https://www.atiz.com/scanitizer/scanpod" target="_blank" title="ScanPod">ScanPod</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<p class="link-head">Hospital Solution</p>
							<div class="link-flex">
								<div>
									<a href="https://www.doctorease.co" target="_blank" title="DoctorEase Software for Clinic">DoctorEase</a>
									<a href="https://emr.atiz.com" target="_blank" title="Atiz EMR for Hospitals">Atiz EMR for Hospitals</a>
									<a href="https://www.above.co.th" target="_blank" title="BabyTag Infant Protection">BabyTag Infant Protection</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<p class="link-head">INFO</p>
							<div class="link-flex">
								<div>
									<a href="https://www.atiz.com/buy" title="Where to Buy">Where to Buy</a>
									<a href="https://www.atiz.com/support" title="Atiz Support">Support</a>
									<a href="https://www.atiz.com/guide" title="Videos Guide">Videos</a>
									<a href="https://www.atiz.com/dpi" title="DPI Guide">DPI Guide</a>
									<a href="https://www.atiz.com/about" title="About Atiz">About</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<p>Copyright © 2023 Atiz Innovation Co., Ltd. All rights reserved.</p>
			<div class="social">
				<ul>
					<li>
						<a href="https://www.youtube.com/user/atizinnovation" title="Atiz Innovation YouTube Channel" target="_blank">
							<img src="images/facebook.svg" alt="Atiz Innovation YouTube Channel">
						</a>
					</li>
					<li><a href="https://www.facebook.com/atiz.innovation" title="Atiz Innovation Facebook Page" target="_blank">
							<img src="images/youtube.png" alt="Atiz Innovation Facebook Page">
						</a>
					</li>
					<li>
						<a href="#" title="Atiz Innovation Twitter" target="_blank">
							<img src="images/twitter.png" alt="Atiz Innovation Twitter">
						</a>
					</li>
					<li>
						<a href="#" title="Atiz Innovation Line" target="_blank">
							<img src="images/line.png" alt="Atiz Innovation Twitter">
						</a>
					</li>
					<li>
						<a href="#" title="Atiz Innovation Mail" target="_blank">
							<img src="images/mail.png" alt="Atiz Innovation Twitter">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<script src="https://www.atiz.com/core_js/jquery-2.1.1.js"></script>
<script src="https://www.atiz.com/core_css/bootstrap/js/bootstrap.min.js"></script>
<script src="https://www.atiz.com/core_js/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://www.atiz.com/core_js/placeholder/jquery.placeholder.js"></script>
<script src="https://www.atiz.com/core_js/slide.min.js"></script>
<!-- CANDDi https://www.canddi.com/privacy -->
<script async type="text/javascript" src="//cdns.canddi.com/p/a10d7faa2c8667e797b9def02d2032b5.js"></script>
<!-- /END CANDDi -->
<!-- Default Statcounter code for Atiz https://www.atiz.com -->
<script type="text/javascript">
	var sc_project = 12582248;
	var sc_invisible = 1;
	var sc_security = "5d5d7daa";
</script>
<script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
<noscript>
	<div class="statcounter"><a title="Web Analytics" href="https://statcounter.com/" target="_blank"><img class="statcounter" src="https://c.statcounter.com/12582248/0/5d5d7daa/1/" alt="Web Analytics" referrerPolicy="no-referrer-when-downgrade"></a></div>
</noscript>
<!-- End of Statcounter Code -->

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script type="text/javascript">
	var ab = jQuery.noConflict();
	ab(document).ready(function() {

		ab('#subscribe-form').validate({
			rules: {
				subscribeMail: {
					required: true,
					email: true
				}
			},
			messages: {

				subscribeMail: {
					required: "This field is required.",
					email: "Please enter a valid address."
				}

			},

			errorLabelContainer: '.error-txt',


			submitHandler: function(form) {
				var data = ab("#subscribe-form").serialize();
				ab.ajax({
					url: 'https://www.atiz.com/back-end/action_menu/process_subscribe2.php',
					type: 'POST',
					data: data,
					beforeSend: function(data) {
						ab(".newsletter-block .block-loader").fadeIn("fast");
						ab("#subscribeMail").attr('disabled', 'disabled');
						ab("#newsletter-join-btn").attr('disabled', 'disabled');
					},
					success: function(response) {
						ab(".newsletter-block .block-loader").fadeOut("slow");
						ab('.submissionResponse').html(response).show();
						setTimeout(function() {
							ab(".subscribe-success").remove();
							// ab(".newsletter-input-email").val('');
						}, 6000);
						ab("#subscribeMail").removeAttr('disabled');
						ab("#newsletter-join-btn").removeAttr('disabled');
					}
				});
			}
		});
	});


	ab(".product-menu li a").on('click', function(e) {

		var linkTo = ab(this).attr("href");
		location.replace(linkTo);

	});

	ab(document).ready(function() {

		ab("#captcha_data").val('');
		ab('#contact-form').validate({
			rules: {
				askEmail: {
					required: true,
					email: true
				},
				askSubject: {
					minlength: 2,
					required: true
				},
				askMsg: {
					minlength: 2,
					required: true
				}

			},

			submitHandler: function(form) {
				var data = ab("#contact-form").serialize();
				let md = ab("#md_contact").val();
				let askEmail = ab('#askEmail').val();
				let askSubject = ab('#askSubject').val();
				let askMsg = ab('#askMsg').val();
				let urlPage_contact = ab('#urlPage_contact').val();
				let ip_contact = ab('#ip_contact').val();
				var get_captcha = grecaptcha.getResponse();

				ab.ajax({
					url: 'https://www.atiz.com/back-end/action_menu/process_new-footer.php',
					type: 'POST',
					data: {
						md: md,
						askEmail: askEmail,
						askSubject: askSubject,
						askMsg: askMsg,
						urlPage: urlPage_contact,
						ip: ip_contact,
						g_recaptcha_response: get_captcha
					},
					beforeSend: function(data) {
						ab("#contact-form .block-loader").fadeIn("fast");
						ab("#contact-form :input").attr('disabled', 'disabled'); //disable all input
						ab("#contact-form button").prop('disabled', true); //disable button  
					},
					success: function(response) {

						clearTimeout(timers);

						ab("#contact-form .block-loader").fadeOut("slow");
						ab("#contact-form :input").removeAttr('disabled'); //enable all input
						ab("#contact-form button").removeAttr('disabled'); //enable button
						//response data
						ab('#ResMsg').html(response.message).fadeIn();

						if (response.status == 'success') {

							ab('#contact-form').each(function() {
								this.reset();
							});

						}

						var timers = setTimeout(function() {
							ab("#ResMsg").html('').fadeOut();
						}, 12000);

					}
				});
			}
		});
	});


	ab(".first-item").click(function() {

		if (ab(this).hasClass("open")) {

		} else {
			ab("#global-nav").attr('style', '');
		}

	});

	ab(".hospital-item").click(function() {

		if (ab(this).hasClass("open")) {

		} else {
			ab("#global-nav").attr('style', '');
		}

	});

	var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)

	if (isSafari) {
		ab('#bd-item').on('show.bs.dropdown', function() {
			ab("#bd-nav-dd").css({
				"display": "block",
				"opacity": "1"
			});
		})

		ab('#bd-item').on('hide.bs.dropdown', function() {
			setTimeout(function() {
				ab("#bd-nav-dd").css({
					"display": "none",
					"opacity": "0"
				});
			}, 1);
		})

		ab('#hospital-item').on('hide.bs.dropdown', function() {
			setTimeout(function() {
				ab("#hospital-nav-dd").css({
					"display": "none",
					"opacity": "0"
				});
			}, 1);
		})

		ab('#hospital-item').on('show.bs.dropdown', function() {
			ab("#hospital-nav-dd").css({
				"display": "block",
				"opacity": "1"
			});
		})
	}

	ab(document).on('click', function(e) {
		/* bootstrap collapse js adds "in" class to your collapsible element*/
		var menu_opened = ab('#main-navigation').hasClass('in');

		if (!ab(e.target).closest('#main-navigation').length &&
			!ab(e.target).is('#main-navigation') &&
			menu_opened === true) {
			ab('#main-navigation').collapse('toggle');
		}
	});
</script>

<?php //echo 'page domain name = '.$page_subdomain_name; 
?>

<?php if (empty($page_subdomain_name)) { //check page domain 
?>

	<!-- Global site tag (gtag.js) - Google Ads: 813994689 -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-813994689"></script>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-1227334-1']);
	_gaq.push(['_setDomainName', '.atiz.com']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})(); -->

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K84BSP9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	</script>


	<?php if (!empty($pageId) && $pageId == "b01") { //buy page 
	?>

		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'AW-813994689');
		</script>

		<!-- Event snippet for Atiz Buy Page Conversion conversion page -->
		<script>
			gtag('event', 'conversion', {
				'send_to': 'AW-813994689/RuKpCNqe34gBEMGlkoQD',
				'transaction_id': ''
			});
		</script>

	<?php  } ?>


	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"url": "https://www.atiz.com",
			"name": "Atiz Innovation Co., Ltd.",
			"contactPoint": {
				"@type": "ContactPoint",
				"telephone": "+66 2683 6600",
				"contactType": "customer support"
			}
		}
	</script>

	<script type="text/javascript">
		var url = document.location.toString();

		if (url.match('#')) {

			$('html, body').animate({
				scrollTop: ($('#' + url.split('#')[1]).offset().top)
			}, 0);

		}
	</script>

<?php
} //end page domain
?>