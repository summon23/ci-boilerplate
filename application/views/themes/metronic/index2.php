<?php $assetpath = base_url()."themes/metronic/";?>
<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title><?php echo APPNAME;?></title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="<?php echo $assetpath;?>vendors//perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="<?php echo $assetpath;?>vendors//tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
		<link href="<?php echo $assetpath;?>vendors//bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors//vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $assetpath;?>vendors//vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $assetpath;?>vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="<?php echo $assetpath;?>demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="<?php echo $assetpath;?>demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->
        <link rel="shortcut icon" href="<?php echo $assetpath;?>demo/media/img/logo/favicon.ico" />
		<script src="<?php echo $assetpath;?>vendors//jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>app/js/custom.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//dropzone/dist/dropzone.js" type="text/javascript"></script>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="<?php echo base_url();?>" class="m-brand__logo-wrapper">
										<img alt="" src="<?php echo $assetpath;?>demo/media/img/logo/logo.png" />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

							<!-- BEGIN: Horizontal Menu -->
							<!-- ENABLE THIS TO TOP MENU -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
								<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><span
											 class="m-menu__link-text"><?php echo ucwords(getGroupName());?> - <?php echo getUserName();?> </span></a>
										<!-- <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="index.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span
																 class="m-menu__link-text">Generate Reports</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span> </span></span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-business"></i><span
														 class="m-menu__link-text">Manage Orders</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Latest Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Pending Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Processed Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Delivery Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Payments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Customers</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-chat-1"></i><span
														 class="m-menu__link-text">Customer Feedbacks</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Customer Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Supplier Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Reviewed Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Resolved Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Feedback Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Register Member</span></a></li>
											</ul>
										</div> -->
									</li>
									<!-- <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span
											 class="m-menu__item-here"></span><span class="m-menu__link-text">Reports</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
										<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:600px"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<div class="m-menu__subnav">
												<ul class="m-menu__content">
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Finance Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">HR Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">IPO Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Finance Margins</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Revenue Reports</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Project Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Coca Cola CRM</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Delta
																		Airlines Booking Site</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Malibu
																		Accounting</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Vineseed
																		Website Rewamp</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Zircon Mobile
																		App</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Mercury CMS</span></a></li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span
											 class="m-menu__item-here"></span><span class="m-menu__link-text">Orders</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
										<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:1000px"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<div class="m-menu__subnav">
												<ul class="m-menu__content">
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Finance Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">HR Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">IPO Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Finance Margins</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Revenue Reports</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Project Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Coca Cola CRM</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Delta
																		Airlines Booking Site</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Malibu
																		Accounting</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Vineseed
																		Website Rewamp</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Zircon Mobile
																		App</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Mercury CMS</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">HR Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
																		Directory</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Client
																		Directory</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Salary Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff Payslips</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Corporate
																		Expenses</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Project
																		Expenses</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Reporting Apps</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Report Adjusments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Sources & Mediums</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Reporting Settings</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Conversions</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Report Flows</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Audit & Logs</span></a></li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel m-menu__item--more m-menu__item--icon-only" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle"
										 title="Non functional dummy link"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-more-v3"></i><span class="m-menu__link-text"></span></a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--pull"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-business"></i><span class="m-menu__link-text">eCommerce</span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="crud/datatable_v1.html" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-computer"></i><span
														 class="m-menu__link-text">Audience</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Active Users</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-interface-1"></i><span class="m-menu__link-text">User Explorer</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-lifebuoy"></i><span class="m-menu__link-text">Users Flows</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Market Segments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic"></i><span class="m-menu__link-text">User Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Marketing</span></a></li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																<span class="m-menu__link-text">Campaigns</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">3</span></span> </span></span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-infinity"></i><span
														 class="m-menu__link-text">Cloud Manager</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span
																			 class="m-menu__link-text">File Upload</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">3</span></span> </span></span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-signs-1"></i><span class="m-menu__link-text">File Attributes</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder"></i><span class="m-menu__link-text">Folders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-cogwheel-2"></i><span class="m-menu__link-text">System Settings</span></a></li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li> -->
								</ul>
							</div>

							<!-- END: Horizontal Menu -->

							<!-- BEGIN: Topbar -->


							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">

					<!-- BEGIN: Brand -->
					<div class="m-brand  m-brand--skin-light ">
						<a href="<?php echo base_url();?>" class="m-brand__logo">
							<img alt="" src="<?php echo $assetpath;?>demo/media/img/logo/logo.png" />
						</a>
					</div>

					<!-- END: Brand -->

					<!-- Dynamic Menu -->
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " data-menu-vertical="true" m-menu-scrollable="true" m-menu-dropdown-timeout="500">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('home');?>" class="m-menu__link"><i class="m-menu__link-icon flaticon-home"></i><span class="m-menu__link-text">Dashboard</span><i class="m-menu__ver-arrow la la-angle-right"></i></a></li>
						<?php foreach ($menu as $key => $value) :
							$submenu = $value->submenu;?>

							<?php if(checkExist($accessmenu, $value->id)):?>
		  					<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon <?php echo $value->menu_icon;?>"></i><span class="m-menu__link-text"><?php echo $value->menu_name;?></span><i
								class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
								<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text"><?php echo $value->menu_name;?></span></span></li>

								<?php foreach ($submenu as $k => $v) :?>
									<?php if (checkExist($accesssubmenu, $v->id)) :?>
									<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url().$v->route;?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text"><?php echo $v->submenu_name;?></span></a></li>
									<?php endif;?>
								<?php endforeach;?>

								</ul>
								</div>
							</li>
							<?php endif;?>
						<?php endforeach;?>
							<li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-1" aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('auth/doLogout');?>" class="m-menu__link"><i class="m-menu__link-icon flaticon-logout"></i><span class="m-menu__link-text">Logout</span><i class="m-menu__ver-arrow la la-angle-right"></i></a></li>
						</ul>
					</div>

					<!-- BEGIN: Aside Menu -->
					<div style="display:none;" id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " data-menu-vertical="true" m-menu-scrollable="true" m-menu-dropdown-timeout="500">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-text">Parameter</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text">Parameter</span></span></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('brand');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Brand</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('size');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Size</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('color');?>" class="m-menu__link "><i class="m-menu__link-icon la la-user"></i><span class="m-menu__link-text">Color</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('discount');?>" class="m-menu__link "><i class="m-menu__link-icon la la-tags"></i><span class="m-menu__link-text">Discount</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('discounttype');?>" class="m-menu__link "><i class="m-menu__link-icon la la-tags"></i><span class="m-menu__link-text">Discount Type</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-business"></i><span class="m-menu__link-text">Outlet</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text">Outlet</span></span></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('supplier');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Supplier</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('store');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Store</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('groupstore');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Group Store</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('customer');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Customer</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-open-box"></i><span class="m-menu__link-text">Product</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text">Product</span></span></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('product');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Product</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('productdiscount');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Product Discount</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('productlog');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Product Log</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('spg');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">SPG</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-list-1"></i><span class="m-menu__link-text">Order</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text">Order</span></span></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('order');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Order</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('orderproduct');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Order Product</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('invoice');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Invoice</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('proporma');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Proporma</span></a></li>
									</ul>
								</div>
							</li>

							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-cogwheel-2"></i><span class="m-menu__link-text">Setting</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text">Setting</span></span></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('user');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">User</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('group');?>" class="m-menu__link "><i class="m-menu__link-icon la la-commenting"></i><span class="m-menu__link-text">Group</span></a></li>
									</ul>
								</div>
							</li>
							<!-- <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('brand');?>" class="m-menu__link"><i class="m-menu__link-icon flaticon-logout"></i><span class="m-menu__link-text">Brand</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('size');?>" class="m-menu__link"><i class="m-menu__link-icon flaticon-logout"></i><span class="m-menu__link-text">Size</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('store');?>" class="m-menu__link"><i class="m-menu__link-icon flaticon-logout"></i><span class="m-menu__link-text">Store</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('supplier');?>" class="m-menu__link"><i class="m-menu__link-icon flaticon-logout"></i><span class="m-menu__link-text">Supplier</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('color');?>" class="m-menu__link"><i class="m-menu__link-icon flaticon-logout"></i><span class="m-menu__link-text">Color</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li> -->
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-1" aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('auth/doLogout');?>" class="m-menu__link"><i class="m-menu__link-icon flaticon-logout"></i><span class="m-menu__link-text">Help</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            
							<!-- <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-1" aria-haspopup="true" m-menu-submenu-toggle="click"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-info"></i><span class="m-menu__link-text">Help</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu m-menu__submenu--up"><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-1" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Help</span></span></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Support</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Blog</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Documentation</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Terms</span></a></li>
									</ul>
								</div>
							</li> -->
						</ul>
					</div>

					<!-- END: Aside Menu -->
				</div>
				<div class="m-aside-menu-overlay"></div>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title "><?php echo array_key_exists('modulename', $params) ? $params['modulename'] : 'Dashboard';?></h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="<?php echo base_url();?>" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<?php if(array_key_exists('breadcrumb', $params)):?>
										<?php 
										$breadcrumbItemLength = count($params['breadcrumb']);
										$tempBreadcrumbItem = 1;
										foreach ($params['breadcrumb'] as $key => $value) :?>
											<li class="m-nav__item">
												<a href="<?php echo $value;?>" class="m-nav__link">
													<span class="m-nav__link-text"><?php echo $key;?></span>
												</a>
											</li>
											<?php if ($tempBreadcrumbItem != $breadcrumbItemLength) echo '<li class="m-nav__separator">-</li>';?>
										<?php 
										$tempBreadcrumbItem++;
										endforeach;?>									
									<?php endif;?>																	
								</ul>
							</div>
							<div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker" style="display:none;">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--square">
										<i class="la la-angle-down"></i>
									</a>
								</span>
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<?php 
                    $this->load->view('themes/'.THEME.'/'.$viewname, $params);
                    ?>
				</div>
			</div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								<?php echo date('Y');?> &copy; 
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<!-- <li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">About</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Privacy</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">T&C</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Purchase</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
										<i class="m-nav__link-icon flaticon-technology-1 m--icon-font-size-lg3"></i>
									</a>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</footer>

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Sidebar -->
		<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
			<div class="m-quick-sidebar__content m--hide">
				<span id="m_quick_sidebar_close" class="m-quick-sidebar__close"><i class="la la-close"></i></span>
				<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">Messages</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">Settings</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">Logs</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
						<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
							<div class="m-messenger__messages m-scrollable">
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="<?php echo $assetpath;?>app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Hi Bob. What time will be the meeting ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Hi Megan. It's at 2.30PM
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="<?php echo $assetpath;?>app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Will the development team be joining ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Yes sure. I invited them as well
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">2:30PM</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="<?php echo $assetpath;?>app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Noted. For the Coca-Cola Mobile App project as well ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Yes, sure.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Please also prepare the quotation for the Loop CRM project as well.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">3:15PM</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-no-pic m--bg-fill-danger">
											<span>M</span>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Noted. I will prepare it.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Thanks Megan. I will see you later.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="<?php echo $assetpath;?>app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Sure. See you in the meeting soon.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__seperator"></div>
							<div class="m-messenger__form">
								<div class="m-messenger__form-controls">
									<input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
								</div>
								<div class="m-messenger__form-tools">
									<a href="" class="m-messenger__form-attachment">
										<i class="la la-paperclip"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="m_quick_sidebar_tabs_settings" role="tabpanel">
						<div class="m-list-settings m-scrollable">
							<div class="m-list-settings__group">
								<div class="m-list-settings__heading">General Settings</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Email Notifications</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Site Tracking</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">SMS Alerts</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Backup Storage</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Audit Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
							</div>
							<div class="m-list-settings__group">
								<div class="m-list-settings__heading">System Settings</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">System Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Error Reporting</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Applications Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Backup Servers</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Audit Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="m_quick_sidebar_tabs_logs" role="tabpanel">
						<div class="m-list-timeline m-scrollable">
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									System Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">12 new users registered <span class="m-badge m-badge--warning m-badge--wide">important</span></a>
										<span class="m-list-timeline__time">Just now</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">System shutdown</a>
										<span class="m-list-timeline__time">11 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">New invoice received</a>
										<span class="m-list-timeline__time">20 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">Database overloaded 89% <span class="m-badge m-badge--success m-badge--wide">resolved</span></a>
										<span class="m-list-timeline__time">1 hr</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">System error</a>
										<span class="m-list-timeline__time">2 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">Production server down <span class="m-badge m-badge--danger m-badge--wide">pending</span></a>
										<span class="m-list-timeline__time">3 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">Production server up</a>
										<span class="m-list-timeline__time">5 hrs</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									Applications Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--info m-badge--wide">urgent</span></a>
										<span class="m-list-timeline__time">7 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">12 new users registered</a>
										<span class="m-list-timeline__time">Just now</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">System shutdown</a>
										<span class="m-list-timeline__time">11 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">New invoices received</a>
										<span class="m-list-timeline__time">20 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">Database overloaded 89%</a>
										<span class="m-list-timeline__time">1 hr</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">System error <span class="m-badge m-badge--info m-badge--wide">pending</span></a>
										<span class="m-list-timeline__time">2 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">Production server down</a>
										<span class="m-list-timeline__time">3 hrs</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									Server Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">Production server up</a>
										<span class="m-list-timeline__time">5 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">New order received</a>
										<span class="m-list-timeline__time">7 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">12 new users registered</a>
										<span class="m-list-timeline__time">Just now</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">System shutdown</a>
										<span class="m-list-timeline__time">11 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">New invoice received</a>
										<span class="m-list-timeline__time">20 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">Database overloaded 89%</a>
										<span class="m-list-timeline__time">1 hr</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">System error</a>
										<span class="m-list-timeline__time">2 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">Production server down</a>
										<span class="m-list-timeline__time">3 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">Production server up</a>
										<span class="m-list-timeline__time">5 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">New order received</a>
										<span class="m-list-timeline__time">1117 hrs</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end::Quick Sidebar -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		<!-- begin::Quick Nav -->
		<!-- <ul class="m-nav-sticky" style="margin-top: 30px;">
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
				<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank"><i class="la la-cart-arrow-down"></i></a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/documentation.html" target="_blank"><i class="la la-code-fork"></i></a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
				<a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank"><i class="la la-life-ring"></i></a>
			</li>
		</ul> -->

		<!-- begin::Quick Nav -->

		<!--begin:: Global Mandatory Vendors -->
		
		<script src="<?php echo $assetpath;?>vendors//popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//moment/min/moment.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="<?php echo $assetpath;?>vendors//jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>		
		<script src="<?php echo $assetpath;?>vendors//summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//jstree/dist/jstree.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//raphael/raphael.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//morris.js/morris.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//chartist/dist/chartist.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="<?php echo $assetpath;?>vendors//js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="<?php echo $assetpath;?>demo/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
        <script src="<?php echo $assetpath;?>app/js/dashboard.js" type="text/javascript"></script>
        <script src="<?php echo $assetpath;?>vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
		<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>