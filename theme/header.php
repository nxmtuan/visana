<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */

?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<header>
		<div class="sticky-top">
			<div class="visana__header__top ">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="header__top__wrap">
								<div class="header__top__left">
									<div class="ht__link">
										<span>HCM:</span>
										<a class="s-bold s-hotline" href="tel:0902200454">
											090 2200 454 </a>
									</div>
									<div class="ht__link">
										<span>HN:</span>
										<a class="s-bold s-mobile" href="tel:0968354027">0968 354 027</a>
									</div>
								</div>
								<div class="header__top__right">
									<div class="ht__link ht__link--account visana__hide position-relative">
										<span class="menu-link--account">Xin chào <span
												class="account__full-name">Nguyễn Văn An</span> <i
												class="fas fa-chevron-down"></i></span>
										<ul class="sub-menu">
											<li class="menu-item"><a href="https://my.visana.vn/ti-le-dau/"
													target="_blank">Kết quả test tỉ lệ đậu</a></li>
											<li class="menu-item"><a href="https://my.visana.vn/sua-tai-khoan/"
													target="_blank">Cài đặt tài khoản</a></li>
											<li class="menu-item"><a href="https://my.visana.vn/dang-xuat/"
													target="_blank">Đăng xuất</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="vsn-header__navigation bg-body shadow-sm">
				<div class="container">
					<nav class="vsn-header-navigation navbar navbar-expand-lg navbar-light">
						<a class="vsn-header-navigation__logo" href="https://visana.vn/">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.31 173.05" style="width: 102px;">
								<defs>
									<style></style>
								</defs>
								<title>visana-logo</title>
								<path class="cls-1"
									d="M335.63,59v.84H253.14V59a11.69,11.69,0,0,1,11.68-11.7h59.12A11.69,11.69,0,0,1,335.63,59Z">
								</path>
								<path class="cls-1"
									d="M319.44,86.19V130.5a5.43,5.43,0,0,1-1.16,3.72,3.78,3.78,0,0,1-3,1.33,5.39,5.39,0,0,1-3.86-1.79l-34-34.2V135h-8V91.05a5.47,5.47,0,0,1,1.16-3.7A3.93,3.93,0,0,1,273.67,86a4.18,4.18,0,0,1,1.79.41,6,6,0,0,1,1.79,1.33l34.14,33.86V86.19Z">
								</path>
								<polygon class="cls-2"
									points="271.61 25.16 271.61 47.32 267.05 47.32 267.05 25.21 271.61 25.16"></polygon>
								<rect class="cls-2" x="317.04" y="25.21" width="4.54" height="22.1"></rect>
								<path class="cls-1"
									d="M253.14,69.65V140.2a11.69,11.69,0,0,0,11.68,11.7h59.12a11.69,11.69,0,0,0,11.7-11.7V69.65Zm66.29,60.85a5.43,5.43,0,0,1-1.16,3.72,3.78,3.78,0,0,1-3,1.33,5.39,5.39,0,0,1-3.86-1.79l-34-34.2V135h-8V91.05a5.47,5.47,0,0,1,1.16-3.7A3.93,3.93,0,0,1,273.67,86a4.18,4.18,0,0,1,1.79.41,6,6,0,0,1,1.79,1.33l34.14,33.86V86.19h8Z">
								</path>
								<rect class="cls-2" x="253.14" y="59.85" width="82.5" height="9.8"></rect>
								<path class="cls-1"
									d="M407.31,135.63H397L375,98.37l-21.89,37.26h-9.71l27.88-46.31a6.4,6.4,0,0,1,1.73-2,3.83,3.83,0,0,1,2.33-.73,3.94,3.94,0,0,1,2.4.73,6.4,6.4,0,0,1,1.73,2Z">
								</path>
								<path class="cls-1"
									d="M0,86.59H10.31l22,37.26L54.16,86.59h9.71L36,132.9a6.44,6.44,0,0,1-1.73,2,3.85,3.85,0,0,1-2.33.73,4,4,0,0,1-2.4-.73,6.42,6.42,0,0,1-1.73-2Z">
								</path>
								<path class="cls-1"
									d="M242.86,135.63H232.55l-22-37.26L188.7,135.63H179l27.88-46.31a6.42,6.42,0,0,1,1.73-2,3.83,3.83,0,0,1,2.33-.73,3.94,3.94,0,0,1,2.4.73,6.42,6.42,0,0,1,1.73,2Z">
								</path>
								<path class="cls-1" d="M82.84,135V86.59h8.45V135Z"></path>
								<path class="cls-1"
									d="M113.45,135v-8.45h36.26a7.3,7.3,0,0,0,5.22-1.73,6,6,0,0,0,1.83-4.59,5.83,5.83,0,0,0-1.83-4.69,7.82,7.82,0,0,0-5.22-1.56H127.49a17.43,17.43,0,0,1-6.15-1,13.3,13.3,0,0,1-4.66-2.86,12.56,12.56,0,0,1-2.93-4.36,14.49,14.49,0,0,1-1-5.52,14.9,14.9,0,0,1,1-5.42,11.56,11.56,0,0,1,2.86-4.29,13.57,13.57,0,0,1,4.69-2.83,18.4,18.4,0,0,1,6.39-1h34.73V95H127.62a6.2,6.2,0,0,0-4.52,1.56,5.82,5.82,0,0,0-1.6,4.36,5.64,5.64,0,0,0,1.63,4.32,6.2,6.2,0,0,0,4.42,1.53h22.16q7.38,0,11.21,3.46t3.83,10.51a16.63,16.63,0,0,1-.93,5.66,12.21,12.21,0,0,1-2.79,4.49,12.74,12.74,0,0,1-4.69,3,18.79,18.79,0,0,1-6.62,1.06Z">
								</path>
								<path class="cls-3"
									d="M311.39,86.19v35.39L277.25,87.73a6,6,0,0,0-1.79-1.33,4.18,4.18,0,0,0-1.79-.41,3.93,3.93,0,0,0-3.16,1.37,5.47,5.47,0,0,0-1.16,3.7V135h8V99.56l34,34.2a5.39,5.39,0,0,0,3.86,1.79,3.78,3.78,0,0,0,3-1.33,5.43,5.43,0,0,0,1.16-3.72V86.19Z">
								</path>
								<path class="cls-1"
									d="M322.75,25.21h-6.69s0-10.48-1.34-13.62a5.61,5.61,0,0,0-2.15-1.7c-8.12-4.21-28.92-3.89-37.11,0a3.54,3.54,0,0,0-1.28,1.46C273,14.6,272.9,25.17,272.9,25.17h-1.16l-4.56,0h-1s-1.68-13.72,0-17.85a4.63,4.63,0,0,1,1-1.41,13.9,13.9,0,0,1,3.56-2.52c.32-.14.65-.28,1-.41,11-4.21,34.46-3.89,45.44.13.26.09.51.18.75.28a12,12,0,0,1,3.79,3,6,6,0,0,1,1,1.64C324.19,12.12,322.75,25.21,322.75,25.21Z">
								</path>
								<circle class="cls-2" cx="275" cy="162.45" r="5.6"></circle>
								<circle class="cls-2" cx="313.78" cy="162.45" r="5.6"></circle>
								<path class="cls-2"
									d="M16.88,168,11.6,151.86h2.26l2.52,8c.7,2.18,1.3,4.15,1.73,6h0c.46-1.87,1.13-3.91,1.85-6l2.74-8H25L19.18,168Z">
								</path>
								<path class="cls-2"
									d="M31,153.15a1.31,1.31,0,0,1-2.62,0,1.29,1.29,0,0,1,1.32-1.32A1.25,1.25,0,0,1,31,153.15ZM28.66,168V156.42h2.11V168Z">
								</path>
								<path class="cls-2"
									d="M36.39,165.87a5.53,5.53,0,0,0,2.78.84c1.54,0,2.26-.77,2.26-1.73s-.6-1.56-2.16-2.14c-2.09-.74-3.07-1.9-3.07-3.29,0-1.87,1.51-3.41,4-3.41a5.81,5.81,0,0,1,2.86.72l-.53,1.54a4.51,4.51,0,0,0-2.38-.67c-1.25,0-1.94.72-1.94,1.58s.7,1.39,2.21,2c2,.77,3,1.78,3,3.51,0,2-1.58,3.48-4.34,3.48a6.62,6.62,0,0,1-3.26-.79Z">
								</path>
								<path class="cls-2"
									d="M55,168l-.17-1.46h-.07a4.33,4.33,0,0,1-3.55,1.73A3.31,3.31,0,0,1,47.67,165c0-2.81,2.5-4.35,7-4.32v-.24A2.4,2.4,0,0,0,52,157.71a5.78,5.78,0,0,0-3,.87l-.48-1.39a7.2,7.2,0,0,1,3.82-1c3.55,0,4.42,2.42,4.42,4.75v4.34a16.32,16.32,0,0,0,.19,2.79Zm-.31-5.93c-2.3,0-4.92.36-4.92,2.62a1.87,1.87,0,0,0,2,2,2.89,2.89,0,0,0,2.81-1.94,2.21,2.21,0,0,0,.12-.67Z">
								</path>
								<path class="cls-2"
									d="M78.32,167.6a7.76,7.76,0,0,1-3.34.67c-3.5,0-5.78-2.38-5.78-5.93a5.9,5.9,0,0,1,6.24-6.17,7.08,7.08,0,0,1,2.93.6l-.48,1.63a4.88,4.88,0,0,0-2.45-.55c-2.66,0-4.1,2-4.1,4.39,0,2.69,1.73,4.34,4,4.34A6,6,0,0,0,78,166Z">
								</path>
								<path class="cls-2"
									d="M83.19,151H85.3v7.25h0a3.91,3.91,0,0,1,1.51-1.49,4.33,4.33,0,0,1,2.16-.6c1.56,0,4.06,1,4.06,5V168H91v-6.67c0-1.87-.7-3.45-2.69-3.45A3,3,0,0,0,85.45,160a2.56,2.56,0,0,0-.14,1v7H83.19Z">
								</path>
								<path class="cls-2"
									d="M109.42,162.13c0,4.29-3,6.17-5.78,6.17-3.14,0-5.57-2.3-5.57-6,0-3.89,2.54-6.17,5.76-6.17S109.42,158.58,109.42,162.13Zm-9.22.12c0,2.54,1.46,4.46,3.53,4.46s3.53-1.9,3.53-4.51c0-2-1-4.46-3.48-4.46S100.21,160,100.21,162.25Z">
								</path>
								<path class="cls-2"
									d="M122,159.56c0-1.2,0-2.19-.1-3.14h1.87l.12,1.92h0a4.27,4.27,0,0,1,3.84-2.18c1.61,0,4.1,1,4.1,4.94V168h-2.11v-6.7c0-1.87-.7-3.43-2.69-3.43a3,3,0,0,0-2.83,2.16,3,3,0,0,0-.14,1v7H122Z">
								</path>
								<path class="cls-2"
									d="M147.7,156.42c0,.84-.1,1.78-.1,3.19v6.74c0,2.66-.53,4.3-1.66,5.3a6.15,6.15,0,0,1-4.22,1.39,7.49,7.49,0,0,1-3.86-1l.53-1.61a6.55,6.55,0,0,0,3.41.91c2.16,0,3.74-1.13,3.74-4.06V166h0a4.14,4.14,0,0,1-3.7,1.94c-2.88,0-4.94-2.45-4.94-5.66,0-3.94,2.57-6.17,5.23-6.17a3.86,3.86,0,0,1,3.62,2h0l.1-1.75ZM145.52,161a3.09,3.09,0,0,0-3.07-3.19c-2,0-3.46,1.71-3.46,4.39,0,2.28,1.15,4.18,3.43,4.18a3.09,3.09,0,0,0,2.93-2.16,3.71,3.71,0,0,0,.17-1.13Z">
								</path>
								<path class="cls-2"
									d="M165.1,153.83a3.61,3.61,0,0,1,.43,1.73,2,2,0,0,1-2,2l-.26,0v7.27c0,1.2,0,2.26.1,3.17h-1.87l-.12-1.9h0a4.37,4.37,0,0,1-3.84,2.16c-1.82,0-4-1-4-5.09v-6.79h2.11v6.43c0,2.21.67,3.7,2.59,3.7a3.05,3.05,0,0,0,2.78-1.92,3.09,3.09,0,0,0,.19-1.08v-7.13h1.66c.84,0,1.13-.34,1.13-.94a3,3,0,0,0-.41-1.39Z">
								</path>
								<path class="cls-2"
									d="M180.27,154.45a4,4,0,0,1,.41,1.75,1.93,1.93,0,0,1-2.23,2.09,6.07,6.07,0,0,1,1.2,3.84c0,4.29-3,6.17-5.78,6.17-3.14,0-5.57-2.3-5.57-6,0-3.89,2.54-6.17,5.76-6.17a6.07,6.07,0,0,1,2,.34,7.26,7.26,0,0,0,2,.62.86.86,0,0,0,1-1,3,3,0,0,0-.38-1.42Zm-9.84,7.8c0,2.54,1.46,4.46,3.53,4.46s3.53-1.9,3.53-4.51c0-2-1-4.46-3.48-4.46S170.43,160,170.43,162.25Zm2.78-10.85,2.11,3.43h-1.49l-2.93-3.43Z">
								</path>
								<path class="cls-2"
									d="M187.16,153.15a1.31,1.31,0,0,1-2.62,0,1.29,1.29,0,0,1,1.32-1.32A1.25,1.25,0,0,1,187.16,153.15ZM184.81,168V156.42h2.11V168Z">
								</path>
								<path class="cls-2"
									d="M203.07,168l-5.28-16.18H200l2.52,8c.7,2.18,1.3,4.15,1.73,6h0c.46-1.87,1.13-3.91,1.85-6l2.74-8h2.23L205.37,168Z">
								</path>
								<path class="cls-2"
									d="M217.21,153.15a1.31,1.31,0,0,1-2.62,0,1.29,1.29,0,0,1,1.32-1.32A1.25,1.25,0,0,1,217.21,153.15ZM214.85,168V156.42H217V168Z">
								</path>
								<path class="cls-2"
									d="M224,162.61a3.72,3.72,0,0,0,4,4,7.64,7.64,0,0,0,3.22-.6l.36,1.51a9.42,9.42,0,0,1-3.87.72c-3.58,0-5.71-2.35-5.71-5.86s2.06-6.26,5.45-6.26c3.79,0,4.8,3.34,4.8,5.47a8,8,0,0,1-.07,1Zm6.19-1.51c0-1.34-.55-3.43-2.93-3.43-2.14,0-3.07,2-3.24,3.43Zm-2.4-9.7,2.3,3.43h-1.63l-1.39-2.28h0l-1.39,2.28h-1.56l2.26-3.43Zm.48,19.78a1.21,1.21,0,0,1-1.22,1.25,1.24,1.24,0,0,1,0-2.47A1.2,1.2,0,0,1,228.32,171.18Z">
								</path>
								<path class="cls-2"
									d="M239.84,153.08v3.34h3V158h-3v6.27c0,1.44.41,2.26,1.58,2.26a4.68,4.68,0,0,0,1.22-.14l.1,1.58a5.17,5.17,0,0,1-1.87.29,2.93,2.93,0,0,1-2.28-.89,4.31,4.31,0,0,1-.82-3V158H236v-1.61h1.8v-2.79Z">
								</path>
							</svg>
						</a>

						<div class="vsn-header-navigation__button d-lg-none">
							<button class="navbar-toggler vsn-btn border-0 pe-0" type="button"
								data-bs-toggle="offcanvas" data-bs-target="#vsn-header-navigation__menu"
								aria-label="Menu Mobile">
								<span class="icon-visana__navbar-toggler text-black"></span>
							</button>
						</div>

						<div id="vsn-header-navigation__menu"
							class="vsn-header-navigation__menu offcanvas offcanvas-end">
							<div class="offcanvas-header">
								<button type="button" class="btn-close text-reset m-0 p-0" data-bs-dismiss="offcanvas"
									aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<ul id="menu-main-menu" class="navbar-nav ms-auto">
									<li
										class="menu-toggle menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13509 depth-0 nav-item">
										<a class="nav-link d-flex align-items-center" href=""
											data-bs-toggle="dropdown">Dịch vụ Visa<span
												class="icon-visana__arrow-down fs-ssm ms-1"></span></a>
										<ul class="dropdown-menu  mega-dropdown-menu  depth-0">
											<div class="container">
												<div class="row d-flex flex-column flex-lg-row">
													<div class="col"><span class="dropdown-header fw-bold mb-1 p-0">Visa
															Châu Á</span>
														<ul class="list-unstyled">

															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/saudi-arabia/">Visa
																	Ả Rập</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-an-do/">Visa Ấn
																	Độ</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-bangladesh/">Visa
																	Bangladesh</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-dubai/">Visa
																	Dubai</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-dai-loan/">Visa
																	Đài Loan</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-han-quoc/">Visa
																	Hàn Quốc</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-hongkong/">Visa
																	Hong Kong</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-israel/">Visa
																	Israel</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-nga/">Visa
																	Nga</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-nhat-ban/">Visa
																	Nhật Bản</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-macau/">Visa
																	Macau</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-pakistan/">Visa
																	Pakistan</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-trung-quoc/">Visa
																	Trung Quốc</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-mong-co/">Visa
																	Mông Cổ</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-qatar/">Visa
																	Qatar</a></li>

														</ul>

													</div>
													<div class="col"><span class="dropdown-header fw-bold mb-1 p-0">Visa
															Châu Âu</span>
														<ul class="list-unstyled">

															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-anh/">Visa
																	Anh</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-ao/">Visa
																	Áo</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-bi/">Visa
																	Bỉ</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-bulgaria/">Visa
																	Bulgaria</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-bo-dao-nha/">Visa
																	Bồ Đào Nha</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-croatia/">Visa
																	Croatia</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-dan-mach/">Visa
																	Đan Mạch</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-duc/">Visa
																	Đức</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-ha-lan/">Visa
																	Hà Lan</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-hy-lap/">Visa
																	Hy Lạp</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-hungary/">Visa
																	Hungary</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-iceland/">Visa
																	Iceland</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-liechtenstein/">Visa
																	Liechtenstein</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-lithuania/">Visa
																	Lithuania</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-luxembourg/">Visa
																	Luxembourg</a></li>

														</ul>

													</div>
													<div class="col"><span
															class="dropdown-header fw-bold mb-1 p-0"> </span>
														<ul class="list-unstyled">

															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-na-uy/">Visa Na
																	Uy</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-phap/">Visa
																	Pháp</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-phan-lan/">Visa
																	Phần Lan</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-sec/">Visa
																	Séc</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-sip/">Visa
																	Síp</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-slovakia/">Visa
																	Slovakia</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-slovenia/">Visa
																	Slovenia</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-tay-ban-nha/">Visa
																	Tây Ban Nha</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-tho-nhi-ky/">Visa
																	Thổ Nhĩ Kỳ</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-thuy-dien/">Visa
																	Thuỵ Điển</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-thuy-si/">Visa
																	Thuỵ Sĩ</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-y/">Visa Ý</a>
															</li>

														</ul>

													</div>
													<div class="col"><span class="dropdown-header fw-bold mb-1 p-0">Visa
															Châu Mỹ</span>
														<ul class="list-unstyled">

															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-mexico/">Visa
																	Mexico</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-brazil/">Visa
																	Brazil</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-my/">Visa
																	Mỹ</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-canada/">Visa
																	Canada</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-cuba/">Visa
																	Cuba</a></li>

														</ul>

													</div>
													<div class="col"><span class="dropdown-header fw-bold mb-1 p-0">Visa
															Châu Úc</span>
														<ul class="list-unstyled">

															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-new-caledonia/">Visa
																	New Caledonia</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-new-zealand/">Visa
																	New Zealand</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-uc/">Visa
																	Úc</a></li>

														</ul>

													</div>
													<div class="col"><span class="dropdown-header fw-bold mb-1 p-0">Visa
															Châu phi</span>
														<ul class="list-unstyled">

															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-ai-cap/">Visa
																	Ai Cập</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-algeria/">Visa
																	Algeria</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-kenya/">Visa
																	Kenya</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-maroc/">Visa
																	Maroc</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-mozambique/">Visa
																	Mozambique</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-nam-phi/">Visa
																	Nam Phi</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-nigeria/">Visa
																	Nigeria</a></li>
															<li><a class="dropdown-item"
																	href="https://visana.vn/dich-vu/visa-tanzania/">Visa
																	Tanzania</a></li>

														</ul>

													</div>
												</div>
											</div>
										</ul>
									</li>
									<li
										class="menu-toggle menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13577 depth-0 nav-item">
										<a class="nav-link d-flex align-items-center" href=""
											data-bs-toggle="dropdown">Dịch vụ khác<span
												class="icon-visana__arrow-down fs-ssm ms-1"></span></a>
										<ul class="dropdown-menu  depth-0">
											<div class="container">
												<li><a class="dropdown-item"
														href="https://visana.vn/hoi-cho-quoc-te/">Dịch vụ làm visa hội
														chợ quốc tế</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/dich-vu-don-tien-san-bay/">Đón tiễn sân
														bay</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/bao-hiem-du-lich/">Bảo hiểm du lịch</a>
												</li>
												<li><a class="dropdown-item"
														href="https://visana.vn/dich-vu-hop-phap-hoa-lanh-su/">Hợp pháp
														hóa lãnh sự</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/dich-vu-giay-phep-lao-dong/">Giấy phép
														lao động Việt Nam</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/dich-vu-the-tam-tru/">Thẻ tạm trú Việt
														Nam</a></li>
												<li><a class="dropdown-item" href="https://visana.vn/esim/">eSIM Quốc
														tế</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/gia-han-visa-cho-nguoi-nuoc-ngoai-tai-viet-nam/">Gia
														hạn Visa Việt Nam</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/dich-vu-gia-han-visa-my/">Gia hạn visa
														Mỹ</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/ho-chieu-nhanh/">Dịch vụ làm hộ chiếu
														online</a></li>

											</div>
										</ul>
									</li>
									<li
										class="menu-toggle menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13582 depth-0 nav-item">
										<a class="nav-link d-flex align-items-center" href=""
											data-bs-toggle="dropdown">Thông tin hữu ích<span
												class="icon-visana__arrow-down fs-ssm ms-1"></span></a>
										<ul class="dropdown-menu  depth-0">
											<div class="container">
												<li><a class="dropdown-item"
														href="https://visana.vn/faq/cau-hoi-chung/">FAQs</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/dai-su-quan-nuoc-ngoai-tai-viet-nam/">ĐSQ
														nước ngoài tại Việt Nam</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/dai-su-quan-viet-nam-tai-nuoc-ngoai/">ĐSQ
														Việt Nam tại nước ngoài</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/quoc-gia-mien-visa-cho-nguoi-viet/">Các
														nước miễn Visa</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/cac-nuoc-nguoi-viet-phai-lam-visa/">Các
														nước phải làm Visa</a></li>
												<li><a class="dropdown-item" href="https://visana.vn/cau-tra-loi/">Kiểm
														tra tỷ lệ đậu</a></li>

											</div>
										</ul>
									</li>
									<li
										class="li_vt_4 menu-item menu-item-type-custom menu-item-object-custom menu-item-13595 depth-0 nav-item">
										<a class="nav-link d-flex align-items-center" href="https://visana.vn/blog/">Cẩm
											nang</a>
									</li>
									<li
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-21471 depth-0 nav-item">
										<a class="nav-link d-flex align-items-center"
											href="https://visana.vn/gioi-thieu/" data-bs-toggle="dropdown">Về
											Visana<span class="icon-visana__arrow-down fs-ssm ms-1"></span></a>
										<ul class="dropdown-menu  depth-0">
											<div class="container">
												<li><a class="dropdown-item" href="https://visana.vn/gioi-thieu/">Giới
														thiệu</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/gioi-thieu/lich-su-visana/">Lịch sử</a>
												</li>
												<li><a class="dropdown-item"
														href="https://visana.vn/gioi-thieu/danh-gia-cua-khach-hang/">Đánh
														giá</a></li>
												<li><a class="dropdown-item"
														href="https://visana.vn/gioi-thieu/doi-tac-cua-visana/">Đối
														tác</a></li>

											</div>
										</ul>
									</li>
								</ul>
							</div>


							<div class="vsn-header-navigation__contact d-flex flex-column d-lg-none">
								<p>HCM: <a href="tel:0902200454" class="text-red fw-bold s-hotline">090 2200 454</a></p>
								<p>HN: <a href="tel:0968354027" class="text-red fw-bold s-mobile">0968 354 027</a></p>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>