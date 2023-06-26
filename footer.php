<footer id="footer">
	<!-- top footer -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="bg-white rounded shadow p-4 col-lg-6 col-md-6 mb-5 px-4">
				<iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.3745981358006!2d28.184208711464944!3d-25.857145677197334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95643720fe0389%3A0xc941ff63540e5238!2sCenturion%20Mall!5e0!3m2!1sen!2sza!4v1682266601744!5m2!1sen!2sza" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<h5>Address</h5>
				<a href="https://goo.gl/maps/47cKY34FL2s2Sgvy6" target="_blank" class="d-inline-block text-decoration-none text-dark">
					<i class="bi bi-geo-alt"></i>123 Centurion Mall, Die Hoewes, Centurion, 0157
				</a>
				<br>
				<br>
				<h5>Call Us</h5>
				<a href="Tel: +27 111 2233" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>
					+27 222 2233
				</a>
				<br>
				<br>
				<h5>Email Us</h5>
				<a href="email: hot@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i>
					hot@gmail.com
				</a>
				<br>
				<br>
				<h5>Follow Us</h5>
				<a href="#" class="d-inline-block text-dark fs-5 me-2">
					<span class="badge bg-light text-dark fs p-2">
						<i class="bi bi-twitter me-1"></i>
					</span>
				</a>
				<a href="#" class="d-inline-block text-dark fs-5 me-2">
					<span class="badge bg-light text-dark fs p-2">
						<i class="bi bi-facebook me-1"></i>
					</span>
				</a>
				<a href="#" class="d-inline-block text-dark fs-5 me-2">
					<span class="badge bg-light text-dark fs p-2">
						<i class="bi bi-instagram me-1"></i>
					</span>
				</a>
			</div>
			

			<div class="col-md-3 col-xs-6">
				<div class="footer">
					<h3 class="footer-title">Categories</h3>
					<ul class="footer-links">
						<li><a href="#">Mobiles</a></li>
						<li><a href="#">Men</a></li>
						<li><a href="#">Women</a></li>
						<li><a href="#">Kids</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-6 text-center" style="margin-top:80px;">
				<ul class="footer-payments">
					<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
					<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
					<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
					<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
					<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
					<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
				</ul>
				<span class="copyright">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">WH UYS</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</span>
			</div>

			<div class="clearfix visible-xs"></div>


		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
	</div>
	<!-- /top footer -->


	<!-- bottom footer -->

	<!-- /bottom footer -->
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>
<script src="js/actions.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/jquery.payform.min.js" charset="utf-8"></script>
<script src="js/script.js"></script>
<script>
	var c = 0;

	function menu() {
		if (c % 2 == 0) {
			document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";
			document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";
			c++;
		} else {
			document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";
			document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";
			c++;
		}
	}
</script>
<script type="text/javascript">
	$('.block2-btn-addcart').each(function() {
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function() {
			swal(nameProduct, "is added to cart !", "success");
		});
	});

	$('.block2-btn-addwishlist').each(function() {
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function() {
			swal(nameProduct, "is added to wishlist !", "success");
		});
	});
</script>