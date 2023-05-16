
<?php
    require_once 'dbkoneksi.php';

    $sqljenis = "SELECT * FROM pesanan";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/bp/fav.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop ">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="index.php" class="logo">
						<img src="images/bp/logo.png" alt="IMG-LOGO" >
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li  class="label1" data-label1="hot">
								<a href="b-goods.php">B-Goods</a>
							</li>

							<li>
								<a href="b-cart.php">B-Cart</a>
							</li>

							<li>
								<a href="b-blog.html">B-Blog</a>
							</li>

							<li class="active-menu">
								<a href="order.html">Order</a>
							</li>

							<li>
								<a href="login.php">Login</a>
							</li>
						</ul>
					</div>	


					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="3">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php"><img src="images/bp/logo.png" alt="IMG-LOGO"></a>
			</div>


			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="3">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
				</li>

				<li>
					<a href="b-goods.php" class="label1 rs1" data-label1="hot">B-Goods</a>
				</li>

				<li>
					<a href="b-cart.php">B-Cart</a>
				</li>

				<li>
					<a href="blog.html">B-Blog</a>
				</li>

				<li>
					<a href="order.html">Order</a>
				</li>

				<li>
					<a href="login.php">Login</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>


	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Order
			</span>
		</div>
	</div>

	<!-- Content page -->
	<section class="bg0 p-t-50 p-b-116">
		<div class="container">
			<div class="w-full-md bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg formorder" style="background-color: #E1AAC5;">
				<form method="post" action="index.php">
					<h3 class="mtext-105 cl2 txt-center p-b-30">
						Order Form
					</h3>
					<div class="form-group row">
						<label for="tanggal" class="col-4 col-form-label font-weight-bold text-white">Tanggal</label> 
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<img src="images/icons/icon-dated.png" alt="ICON"></i>
									</div>
								</div> 
								<input type="date" id="tanggal" name="tanggal" placeholder="Today's Date" required class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group row">
						<label for="nama_pemesan" class="col-4 col-form-label font-weight-bold text-white">Nama</label> 
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<img src="images/icons/icon-nama.png" alt="ICON"></i>
									</div>
								</div> 
								<input type="text" id="nama_pemesan" name="nama_pemesan" placeholder="Your Name" required class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group row">
						<label for="alamat_pemesan" class="col-4 col-form-label font-weight-bold text-white">Alamat</label> 
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<img src="images/icons/icon-alamat.png" alt="ICON"></i>
									</div>
								</div> 
								<input type="text" id="alamat_pemesan" name="alamat_pemesan" placeholder="Your Address" required class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="no_hp" class="col-4 col-form-label font-weight-bold text-white">No HP</label> 
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<img src="images/icons/icon-hp.png" alt="ICON"></i>
									</div>
								</div> 
								<input type="number" id="no_hp" name="no_hp" placeholder="Your Phone Number" required class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-4 col-form-label font-weight-bold text-white">Email</label> 
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<img src="images/icons/icon-email.png" alt="ICON"></i>
									</div>
								</div> 
								<input type="email" id="email" name="email" placeholder="Your email" required class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="jumlah_pesanan" class="col-4 col-form-label font-weight-bold text-white">Jumlah Pesanan</label> 
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<img src="images/icons/icon-produk.png" alt="ICON"></i>
									</div>
								</div> 
								<input type="number" id="jumlah_pesanan" name="jumlah_pesanan" placeholder="Your Order Quantity" required class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group row">
						<label for="deskripsi" class="col-4 col-form-label font-weight-bold text-white">Catatan</label> 
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<img src="images/icons/icon-produk.png" alt="ICON"></i>
									</div>
								</div> 
								<input type="textarea" id="deskripsi" name="deskripsi" placeholder="Noted For Your Package" required class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group row">
						<label for="produk_id" class="col-4 col-form-label font-weight-bold text-white">Catatan</label> 
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<img src="images/icons/icon-produk.png" alt="ICON"></i>
									</div>
								</div> 
								<select type="text" id="produk_id" name="produk_id" placeholder="Your Order Product"required class="form-control">
									<option value="">Pick Product</option>
									<option value="AP101">Blackpink 2023 Hoodie</option>
									<option value="AP102">Blackpink Athletic Sweatpants	</option>
									<option value="AP103">Lovesick Girls Sweatpants</option>
									<option value="AP104">Shut Down Cropped Hoodie</option>
									<option value="AP105">Born Pink Sweat</option>
									<option value="AP106">Pink Venom T-Shirt</option>
									<option value="Mg01">Born Pink CD</option>
									<option value="Mg02">Born Pink Vinyl</option>
									<option value="Mg03">The Album (Version 1)</option>
									<option value="Mg04">The Album (Version 2)</option>
									<option value="Mg05">The Album (Version 3)</option>
									<option value="Mg06">Born Pink Exclusive Box Set	</option>
									<option value="AC101">Blackpink Bucket Hat</option>
									<option value="AC102">Shut Down Necklace</option>
									<option value="AC103">Flower Heart Keychain</option>
									<option value="AC104">The Album Tote Bag</option>
									<option value="AC105">Blackpink Lightstick Keyring	</option>
									<option value="AC106">Shut Down Hat</option>
								</select>
							</div>
						</div>
					</div>

					<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit" value="submit" name="submit">
						Submit
					</button>
				</form>
			</div>
		</div>
	</section>	


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Apparel
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Music
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Accessories
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at  Jalan Situ Indah no 116, Depok or call us on (+62) 857-1920-9180
					</p>

					<div class="p-t-27">
						<a href="https://www.linkedin.com/in/nadya-mutia-safira/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-linkedin"></i>
						</a>

						<a href="https://www.instagram.com/nadyamtia_" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="https://www.facebook.com/nadyamutias" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg5 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="https://www.paypal.com/id/signin" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="paypal">
					</a>

					<a href="https://www.visa.com.au/en_au/account/login" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="visa">
					</a>

					<a href="https://customerportal.mastercard.com/" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="mastercard">
					</a>

					<a href="https://www.americanexpress.com/en-us/account/login" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="americanexpress">
					</a>

					<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="discover">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.instagram.com/nadyamtia_/" target="_blank">Nadya Mutia S.</a> &amp; distributed by <a href="https://colorlib.com/" target="_blank">Colorlib</a> <a href="https://themewagon.com" target="_blank">ThemeWagon</a>

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>