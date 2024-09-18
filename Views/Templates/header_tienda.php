<?php
$cantCarrito = 0;
if (isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0) {
	foreach ($_SESSION['arrCarrito'] as $product) {
		$cantCarrito += $product['cantidad'];
	}
}
//$tituloPreguntas = !empty(getInfoPage(PPREGUNTAS)) ? getInfoPage(PPREGUNTAS)['titulo'] : "";
//$infoPreguntas = !empty(getInfoPage(PPREGUNTAS)) ? getInfoPage(PPREGUNTAS)['contenido'] : "";
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title><?= $data['page_tag'] ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Location" content="<?= base_url() ?>" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= media() ?>/tienda/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link href="<?= media() ?>vendor/fonts/circular-std/style.css" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= media() ?>tienda/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= media() ?>tienda/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>tienda/fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>tienda/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>tienda/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>tienda/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>tienda/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>tienda/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>tienda/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>tienda/vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>tienda/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>tienda/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= media() ?>tienda/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?= media() ?>libs/css/main.css">
	<!--===============================================================================================-->
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


	<style>
		.whatsapp-button {
			position: fixed;
			bottom: 120px;
			right: 30px;
			animation: bounce 2s infinite;
		}

		.whatsapp-circle {
			width: 60px;
			height: 60px;
			background-color: white;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			animation: pulse 2s infinite;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
		}

		.whatsapp-icon {
			width: 30px;
			height: 30px;
		}

		@keyframes pulse {

			0%,
			100% {
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
				transform: scale(1);
			}

			50% {
				box-shadow: 0 0 20px rgba(0, 0, 0, 1);
				transform: scale(1.1);
			}
		}
	</style>
</head>

<body class="animsition">

	<div class="chatbox-wrapper">
		<div class="chatbox-toggle">
			<img src="https://freesvg.org/img/1538298822.png" alt="" id="imgChatbot">
		</div>
		<div class="chatbox-message-wrapper">
			<div class="chatbox-message-header">
				<div class="chatbox-message-profile">
					<img src="https://previews.123rf.com/images/goodzone95/goodzone951803/goodzone95180300026/96725720-chatbot-icon.jpg"
						alt="" class="chatbox-message-image">
					<div>
						<h4 class="chatbox-message-name">Chatbot</h4>
						<p class="chatbox-message-status">online</p>
					</div>
				</div>
				<div class="chatbox-message-dropdown">

					<span class="chatbox-message-dropdown-toggle">X</span>
				</div>
			</div>
			<div class="chatbox-message-content">
				<h4 class="chatbox-message-no-message">Pregunte algo! </h4>
				<!-- <div class="chatbox-message-item sent">
					<span class="chatbox-message-item-text">
						Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Quod, fugiat?
					</span>
					<span class="chatbox-message-item-time">08:30</span>
				</div>
				<div class="chatbox-message-item received">
					<span class="chatbox-message-item-text">
						Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Quod, fugiat?
					</span>
					<span class="chatbox-message-item-time">08:30</span>
				</div> -->
			</div>
			<div class="chatbox-message-bottom">
				<form action="#" class="chatbox-message-form">
					<textarea rows="1" placeholder="Escriba...." class="chatbox-message-input"></textarea>
					<button type="submit" class="chatbox-message-submit"><i class='bx bx-send'></i></button>
				</form>
			</div>
		</div>
	</div>

	<!-- Botón de WhatsApp -->
	<div class="whatsapp-button">
		<a href="https://wa.me/1234567890" target="_blank">
			<div class="whatsapp-circle">
				<img src="data:image/jpeg;base64,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"
					alt="WhatsApp" style="width:50px;height:50px;">
			</div>
		</a>
	</div>


	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Bienvenido!
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="/tienda/dashboard" class="flex-c-m trans-04 p-lr-25">
							Mi Cuenta
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="<?= base_url() ?>" class="logo">
						<img src="<?= media() ?>tienda/images/icons/logot.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="<?= base_url() ?>">Inicio</a>
							</li>
							<li>
								<a href="<?= base_url() ?>/tienda">Tienda</a>
							</li>
							<li>
								<a href="<?= base_url() ?>/carrito">Carrito</a>
							</li>
							<li>
								<a href="<?= base_url() ?>/nosotros">Nosotros</a>
							</li>
							<li>
								<a href="<?= base_url() ?>/contacto">Contacto</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<?php if ($data['page_name'] != "carrito" /*and $data['page_name'] != "procesarpago"*/) { ?>
							<div class="cantCarrito icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
								data-notify="<?= $cantCarrito; ?>">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
						<?php } ?>


					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="<?= base_url() ?>"><img src="<?= media() ?>tienda/images/icons/logot.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<?php if ($data['page_name'] != "carrito" /*and $data['page_name'] != "procesarpago"*/) { ?>
					<div class="cantCarrito icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
						data-notify="<?= $cantCarrito; ?>">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>
				<?php } ?>


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
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Bienvenido
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Mi cuenta
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Salir
						</a>


					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="<?= base_url() ?>">Inicio</a>
				</li>

				<li>
					<a href="<?= base_url() ?>/tienda">Tienda</a>
				</li>
				<li>
					<a href="<?= base_url() ?>/carrito">Carrito</a>
				</li>
				<li>
					<a href="<?= base_url() ?>/nosotros">Nosotros</a>
				</li>

				<li>
					<a href="<?= base_url() ?>/contacto">Contacto</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="<?= media() ?>tienda/images/icons/icon-close2.png" alt="CLOSE">
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


	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>
		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Tu carrito
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			<div id="productosCarrito" class="header-cart-content flex-w js-pscroll">
				<?php getModal('modalCarrito', $data); ?>
			</div>
		</div>
	</div>