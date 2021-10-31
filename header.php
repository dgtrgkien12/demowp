<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<title>Our Blog – Razzi – Default</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
	<header class="site-header">
		<div class="site-header-container header-1">
			<div class="site-header-1-top-box">
				<div class="site-header-1-top container">
					<div class="free-ship-box">
						<div class="icon-free-shipping">
							<svg width="17" height="14" viewBox="0 0 17 14" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M11.2273 9.66667V1H1V9.66667H11.2273ZM11.2273 9.66667H16V6.33333L13.9545 4.33333H11.2273V9.66667ZM5.77273 11.3333C5.77273 12.2538 5.00958 13 4.06818 13C3.12679 13 2.36364 12.2538 2.36364 11.3333C2.36364 10.4129 3.12679 9.66667 4.06818 9.66667C5.00958 9.66667 5.77273 10.4129 5.77273 11.3333ZM14.6364 11.3333C14.6364 12.2538 13.8732 13 12.9318 13C11.9904 13 11.2273 12.2538 11.2273 11.3333C11.2273 10.4129 11.9904 9.66667 12.9318 9.66667C13.8732 9.66667 14.6364 10.4129 14.6364 11.3333Z"
									stroke="#111111" stroke-width="1.1" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
						</div>
						<span class="text-free-shipping">
							<p>Free shipping over $100</p>
					</div>
					<div class="item-topbar money-list">
						<div class="select-option-money select-option-header">
							<div class="select-group select-country">
								<p>USD</p>
							</div>
							<div class="icon-country-language-money">
								<svg width="7" height="4" viewBox="0 0 7 4" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M3.15346 3.85609L0.143669 0.838849C-0.0478897 0.646917 -0.0478897 0.335731 0.143669 0.143891C0.335056 -0.0479637 0.645469 -0.0479637 0.836841 0.143891L3.50005 2.81368L6.16317 0.143969C6.35463 -0.0478861 6.66501 -0.0478861 6.8564 0.143969C7.04787 0.335824 7.04787 0.646994 6.8564 0.838927L3.84656 3.85616C3.75082 3.95209 3.62547 4 3.50007 4C3.3746 4 3.24916 3.952 3.15346 3.85609Z"
										fill="#111111" />
								</svg>
							</div>
							<div class="dropdown-money-list dropdown-list-header">
								<ul>
									<li>
										<p>USD</p>
									</li>
									<li>
										<p>USD</p>
									</li>
									<li>
										<p>USD</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item-topbar language-list">
						<div class="select-option-language select-option-header">
							<div class="select-group select-country">
								<p>English</p>
							</div>
							<div class="icon-country-language-money">
								<svg width="7" height="4" viewBox="0 0 7 4" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M3.15346 3.85609L0.143669 0.838849C-0.0478897 0.646917 -0.0478897 0.335731 0.143669 0.143891C0.335056 -0.0479637 0.645469 -0.0479637 0.836841 0.143891L3.50005 2.81368L6.16317 0.143969C6.35463 -0.0478861 6.66501 -0.0478861 6.8564 0.143969C7.04787 0.335824 7.04787 0.646994 6.8564 0.838927L3.84656 3.85616C3.75082 3.95209 3.62547 4 3.50007 4C3.3746 4 3.24916 3.952 3.15346 3.85609Z"
										fill="#111111" />
								</svg>
							</div>
							<div class="dropdown-language-list dropdown-list-header">
								<ul>
									<li>
										<p>English</p>
									</li>
									<li>
										<p>Lao</p>
									</li>
									<li>
										<p>Vietnam</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="topbar-right-item">
						<div class="shipping-contact">
							<div class="shipping-contact-list">
								<a href="">
									<p>Shipping</p>
								</a>
							</div>
							<div class="shipping-contact-list">
								<a href="">
									<p>FAQ</p>
								</a>
							</div>
							<div class="shipping-contact-list">
								<a href="">
									<p>Contact</p>
								</a>
							</div>
						</div>
						<div class="social-icon-list">
							<a href=""><svg class="social-icon" aria-hidden="true" role="img" focusable="false"
									width="24" height="24" viewBox="0 0 7 12" fill="currentColor" color="#A0A0A0"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M5.27972 1.99219H6.30215V0.084375C6.12609 0.0585937 5.51942 0 4.81306 0C3.33882 0 2.32912 0.99375 2.32912 2.81953V4.5H0.702148V6.63281H2.32912V12H4.32306V6.63281H5.88427L6.13245 4.5H4.32306V3.03047C4.32306 2.41406 4.47791 1.99219 5.27972 1.99219Z">
									</path>
								</svg></a>

							<a href=""><svg class="social-icon" aria-hidden="true" role="img" focusable="false"
									viewBox="0 0 24 24" width="24" height="24" fill="currentColor" color="#A0A0A0">
									<path
										d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
									</path>
								</svg></a>
							<a href=""><svg aria-hidden="true" role="img" focusable="false" width="24" height="24"
									fill="currentColor" viewBox="0 0 13 12" xmlns="http://www.w3.org/2000/svg"
									color="#A0A0A0">
									<path
										d="M6.70482 2.89996C5.00125 2.89996 3.62714 4.26262 3.62714 5.95199C3.62714 7.64137 5.00125 9.00402 6.70482 9.00402C8.40839 9.00402 9.7825 7.64137 9.7825 5.95199C9.7825 4.26262 8.40839 2.89996 6.70482 2.89996ZM6.70482 7.93621C5.60393 7.93621 4.70393 7.04637 4.70393 5.95199C4.70393 4.85762 5.60125 3.96777 6.70482 3.96777C7.80839 3.96777 8.70571 4.85762 8.70571 5.95199C8.70571 7.04637 7.80571 7.93621 6.70482 7.93621ZM10.6263 2.77512C10.6263 3.1709 10.3048 3.48699 9.90839 3.48699C9.50929 3.48699 9.19054 3.16824 9.19054 2.77512C9.19054 2.38199 9.51196 2.06324 9.90839 2.06324C10.3048 2.06324 10.6263 2.38199 10.6263 2.77512ZM12.6646 3.49762C12.6191 2.54402 12.3995 1.69934 11.695 1.0034C10.9932 0.307461 10.1414 0.0896484 9.17982 0.0418359C8.18875 -0.0139453 5.21821 -0.0139453 4.22714 0.0418359C3.26821 0.0869922 2.41643 0.304805 1.71196 1.00074C1.0075 1.69668 0.790536 2.54137 0.742322 3.49496C0.686072 4.47777 0.686072 7.42355 0.742322 8.40637C0.787857 9.35996 1.0075 10.2046 1.71196 10.9006C2.41643 11.5965 3.26554 11.8143 4.22714 11.8621C5.21821 11.9179 8.18875 11.9179 9.17982 11.8621C10.1414 11.817 10.9932 11.5992 11.695 10.9006C12.3968 10.2046 12.6164 9.35996 12.6646 8.40637C12.7209 7.42355 12.7209 4.48043 12.6646 3.49762ZM11.3843 9.4609C11.1754 9.98152 10.7709 10.3826 10.2432 10.5925C9.45304 10.9032 7.57804 10.8315 6.70482 10.8315C5.83161 10.8315 3.95393 10.9006 3.16643 10.5925C2.64143 10.3853 2.23696 9.98418 2.02536 9.4609C1.71196 8.67731 1.78429 6.81793 1.78429 5.95199C1.78429 5.08606 1.71464 3.22402 2.02536 2.44309C2.23429 1.92246 2.63875 1.52137 3.16643 1.31152C3.95661 1.00074 5.83161 1.07246 6.70482 1.07246C7.57804 1.07246 9.45572 1.0034 10.2432 1.31152C10.7682 1.51871 11.1727 1.9198 11.3843 2.44309C11.6977 3.22668 11.6254 5.08606 11.6254 5.95199C11.6254 6.81793 11.6977 8.67996 11.3843 9.4609Z">
									</path>
								</svg></a>
							<a href=""><svg class="social-icon" aria-hidden="true" role="img" focusable="false"
									width="24" height="24" fill="currentColor" viewBox="0 0 24 24" version="1.1"
									xmlns="http://www.w3.org/2000/svg" color="#A0A0A0">
									<path
										d="M12.289,2C6.617,2,3.606,5.648,3.606,9.622c0,1.846,1.025,4.146,2.666,4.878c0.25,0.111,0.381,0.063,0.439-0.169 c0.044-0.175,0.267-1.029,0.365-1.428c0.032-0.128,0.017-0.237-0.091-0.362C6.445,11.911,6.01,10.75,6.01,9.668 c0-2.777,2.194-5.464,5.933-5.464c3.23,0,5.49,2.108,5.49,5.122c0,3.407-1.794,5.768-4.13,5.768c-1.291,0-2.257-1.021-1.948-2.277 c0.372-1.495,1.089-3.112,1.089-4.191c0-0.967-0.542-1.775-1.663-1.775c-1.319,0-2.379,1.309-2.379,3.059 c0,1.115,0.394,1.869,0.394,1.869s-1.302,5.279-1.54,6.261c-0.405,1.666,0.053,4.368,0.094,4.604 c0.021,0.126,0.167,0.169,0.25,0.063c0.129-0.165,1.699-2.419,2.142-4.051c0.158-0.59,0.817-2.995,0.817-2.995 c0.43,0.784,1.681,1.446,3.013,1.446c3.963,0,6.822-3.494,6.822-7.833C20.394,5.112,16.849,2,12.289,2">
									</path>
								</svg></a>
						</div>
					</div>

				</div>
			</div>

			<div id="site-header-1-bottom-box" class="site-header-1-bottom-box">
				<div class="site-header-1-bottom container">
					<div class="logo-shop-header">
						<a href="<?php echo site_url('/home'); ?>" style="text-decoration: none; color: black;">
							<h1>Razzi.</h1>
						</a>
					</div>
					<div class="menu-header-list">
						<?php
					wp_nav_menu(array(
						'theme_location' => 'headerMenulocation'
					))
					?>
						<script>
						$("a").last().addClass("selected highlight");
						</script>

					</div>
					<div class="menu-header-icon-bar">
						<div class="menu-header-icon-bar-list">
							<svg id="icon-search" width="18" height="18" viewBox="0 0 18 18" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M17 17L13.1333 13.1333M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z"
									stroke="#111111" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>

							<svg id="icon-account" width="17" height="19" viewBox="0 0 17 19" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M16 18V16.1111C16 15.1092 15.6049 14.1483 14.9016 13.4398C14.1984 12.7313 13.2446 12.3333 12.25 12.3333H4.75C3.75544 12.3333 2.80161 12.7313 2.09835 13.4398C1.39509 14.1483 1 15.1092 1 16.1111V18M12.25 4.77778C12.25 6.86419 10.5711 8.55556 8.5 8.55556C6.42893 8.55556 4.75 6.86419 4.75 4.77778C4.75 2.69137 6.42893 1 8.5 1C10.5711 1 12.25 2.69137 12.25 4.77778Z"
									stroke="#111111" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>

							<svg width="20" height="17" viewBox="0 0 20 17" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M17.612 2.32611C17.1722 1.90569 16.65 1.57219 16.0752 1.34465C15.5005 1.11711 14.8844 1 14.2623 1C13.6401 1 13.0241 1.11711 12.4493 1.34465C11.8746 1.57219 11.3524 1.90569 10.9126 2.32611L9.99977 3.19821L9.08699 2.32611C8.19858 1.4773 6.99364 1.00044 5.73725 1.00044C4.48085 1.00044 3.27591 1.4773 2.38751 2.32611C1.4991 3.17492 1 4.32616 1 5.52656C1 6.72696 1.4991 7.87819 2.38751 8.727L3.30029 9.5991L9.99977 16L16.6992 9.5991L17.612 8.727C18.0521 8.30679 18.4011 7.80785 18.6393 7.25871C18.8774 6.70957 19 6.12097 19 5.52656C19 4.93214 18.8774 4.34355 18.6393 3.7944C18.4011 3.24526 18.0521 2.74633 17.612 2.32611V2.32611Z"
									stroke="#111111" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>

							<svg id="icon-cart" class="icon-cart" width="21" height="20" viewBox="0 0 21 20" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M8.77273 18.1429C8.77273 18.6162 8.38606 19 7.90909 19M8.77273 18.1429C8.77273 17.6695 8.38606 17.2857 7.90909 17.2857M8.77273 18.1429H7.04545M7.90909 19C7.43212 19 7.04545 18.6162 7.04545 18.1429M7.90909 19V18.1429C7.90909 18.4206 7.90909 18.6379 7.90909 17.2857M7.04545 18.1429C7.04545 17.6695 7.43212 17.2857 7.90909 17.2857M18.2727 18.1429C18.2727 18.6162 17.8861 19 17.4091 19M18.2727 18.1429C18.2727 17.6695 17.8861 17.2857 17.4091 17.2857M18.2727 18.1429H16.5455M17.4091 19C16.9321 19 16.5455 18.6162 16.5455 18.1429M17.4091 19V17.2857M16.5455 18.1429C16.5455 17.6695 16.9321 17.2857 17.4091 17.2857M1 1H4.45455L6.76909 12.4771C6.84807 12.8718 7.06438 13.2263 7.38015 13.4785C7.69593 13.7308 8.09106 13.8649 8.49636 13.8571H16.8909C17.2962 13.8649 17.6913 13.7308 18.0071 13.4785C18.3229 13.2263 18.5392 12.8718 18.6182 12.4771L20 5.28571H5.31818"
									stroke="#111111" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- header mobile -->
		<div class="site-header-container header-2">
			<div class="site-header-2-top-box">
				<div class="site-header-2-top container">
					<div class="item-topbar money-list">
						<div class="select-option-money select-option-header">
							<div class="select-country">
								<p>USD</p>
							</div>
							<div class="icon-country-language-money">
								<svg width="7" height="4" viewBox="0 0 7 4" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M3.15346 3.85609L0.143669 0.838849C-0.0478897 0.646917 -0.0478897 0.335731 0.143669 0.143891C0.335056 -0.0479637 0.645469 -0.0479637 0.836841 0.143891L3.50005 2.81368L6.16317 0.143969C6.35463 -0.0478861 6.66501 -0.0478861 6.8564 0.143969C7.04787 0.335824 7.04787 0.646994 6.8564 0.838927L3.84656 3.85616C3.75082 3.95209 3.62547 4 3.50007 4C3.3746 4 3.24916 3.952 3.15346 3.85609Z"
										fill="#111111" />
								</svg>
							</div>
							<div class="dropdown-money-list dropdown-list-header">
								<ul>
									<li>
										<p>USD</p>
									</li>
									<li>
										<p>USD</p>
									</li>
									<li>
										<p>USD</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item-topbar language-list">
						<div class="select-option-language select-option-header">
							<div class="select-country">
								<p>English</p>
							</div>
							<div class="icon-country-language-money">
								<svg width="7" height="4" viewBox="0 0 7 4" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M3.15346 3.85609L0.143669 0.838849C-0.0478897 0.646917 -0.0478897 0.335731 0.143669 0.143891C0.335056 -0.0479637 0.645469 -0.0479637 0.836841 0.143891L3.50005 2.81368L6.16317 0.143969C6.35463 -0.0478861 6.66501 -0.0478861 6.8564 0.143969C7.04787 0.335824 7.04787 0.646994 6.8564 0.838927L3.84656 3.85616C3.75082 3.95209 3.62547 4 3.50007 4C3.3746 4 3.24916 3.952 3.15346 3.85609Z"
										fill="#111111" />
								</svg>
							</div>
							<div class=" dropdown-language-list dropdown-list-header">
								<ul>
									<li>
										<p>English</p>
									</li>
									<li>
										<p>Lao</p>
									</li>
									<li>
										<p>Vietnam</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="site-header-2-bottom-box" class="site-header-2-bottom-box">
				<div class="site-header-2-bottom container">
					<div class="menu-icon-header">
						<svg class="icon-menu-mobile" aria-hidden="true" role="img" focusable="false" width="24" height="18" viewBox="0 0 24 18"
							fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M24 0H0V2.10674H24V0Z"></path>
							<path d="M24 7.88215H0V9.98889H24V7.88215Z"></path>
							<path d="M24 15.8925H0V18H24V15.8925Z"></path>
						</svg>
					</div>
					<div class="logo-shop-header">
						<a href="<?php echo site_url('/home'); ?>" style="text-decoration: none; color: black;">
							<h1>Razzi.</h1>
						</a>
					</div>
					<div class="menu-header-icon-bar">
						<div class="menu-header-icon-bar-list">
							<svg width="20" height="17" viewBox="0 0 20 17" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M17.612 2.32611C17.1722 1.90569 16.65 1.57219 16.0752 1.34465C15.5005 1.11711 14.8844 1 14.2623 1C13.6401 1 13.0241 1.11711 12.4493 1.34465C11.8746 1.57219 11.3524 1.90569 10.9126 2.32611L9.99977 3.19821L9.08699 2.32611C8.19858 1.4773 6.99364 1.00044 5.73725 1.00044C4.48085 1.00044 3.27591 1.4773 2.38751 2.32611C1.4991 3.17492 1 4.32616 1 5.52656C1 6.72696 1.4991 7.87819 2.38751 8.727L3.30029 9.5991L9.99977 16L16.6992 9.5991L17.612 8.727C18.0521 8.30679 18.4011 7.80785 18.6393 7.25871C18.8774 6.70957 19 6.12097 19 5.52656C19 4.93214 18.8774 4.34355 18.6393 3.7944C18.4011 3.24526 18.0521 2.74633 17.612 2.32611V2.32611Z"
									stroke="#111111" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
							<svg class="icon-cart" width="21" height="20" viewBox="0 0 21 20" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M8.77273 18.1429C8.77273 18.6162 8.38606 19 7.90909 19M8.77273 18.1429C8.77273 17.6695 8.38606 17.2857 7.90909 17.2857M8.77273 18.1429H7.04545M7.90909 19C7.43212 19 7.04545 18.6162 7.04545 18.1429M7.90909 19V18.1429C7.90909 18.4206 7.90909 18.6379 7.90909 17.2857M7.04545 18.1429C7.04545 17.6695 7.43212 17.2857 7.90909 17.2857M18.2727 18.1429C18.2727 18.6162 17.8861 19 17.4091 19M18.2727 18.1429C18.2727 17.6695 17.8861 17.2857 17.4091 17.2857M18.2727 18.1429H16.5455M17.4091 19C16.9321 19 16.5455 18.6162 16.5455 18.1429M17.4091 19V17.2857M16.5455 18.1429C16.5455 17.6695 16.9321 17.2857 17.4091 17.2857M1 1H4.45455L6.76909 12.4771C6.84807 12.8718 7.06438 13.2263 7.38015 13.4785C7.69593 13.7308 8.09106 13.8649 8.49636 13.8571H16.8909C17.2962 13.8649 17.6913 13.7308 18.0071 13.4785C18.3229 13.2263 18.5392 12.8718 18.6182 12.4771L20 5.28571H5.31818"
									stroke="#111111" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<script>
	window.onscroll = function() {
		myFunction()
	};
	var header = document.getElementById("site-header-1-bottom-box");
	var sticky = header.offsetTop;

	function myFunction() {
		if (window.pageYOffset >= sticky) {
			header.classList.add("sticky");
		} else {
			header.classList.remove("sticky");
		}
	}
	</script>
</body>

</html>