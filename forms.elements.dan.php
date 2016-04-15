<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Materia - Admin Template">
	<meta name="keywords" content="materia, webapp, admin, dashboard, template, ui">
	<meta name="author" content="solutionportal">
	<!-- <base href="/"> -->

	<title>Materia - Admin Template</title>
	
	<!-- Icons -->
	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="styles/plugins/waves.css">
	<link rel="stylesheet" href="styles/plugins/perfect-scrollbar.css">
	<link rel="stylesheet" href="styles/plugins/select2.css">
	<link rel="stylesheet" href="styles/plugins/bootstrap-colorpicker.css">
	<link rel="stylesheet" href="styles/plugins/bootstrap-slider.css">
	<link rel="stylesheet" href="styles/plugins/bootstrap-datepicker.css">
	<link rel="stylesheet" href="styles/plugins/summernote.css">
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.min.css">


	 
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]--> 

	
</head>
<body id="app" class="app off-canvas">
	
	<!-- header -->
	<header class="site-head" id="site-head">
		<ul class="list-unstyled left-elems">
			<!-- nav trigger/collapse -->
			<li>
				<a href="javascript:;" class="nav-trigger ion ion-drag"></a>
			</li>
			<!-- #end nav-trigger -->

			<!-- Search box -->
			<li>
				<div class="form-search hidden-xs">
					<form id="site-search" action="javascript:;">
						<input type="search" class="form-control" placeholder="Type here for search...">
						<button type="submit" class="ion ion-ios-search-strong"></button>
					</form>
				</div>
			</li>	<!-- #end search-box -->

			<!-- site-logo for mobile nav -->
			<li>
				<div class="site-logo visible-xs">
					<a href="javascript:;" class="text-uppercase h3">
						<span class="text">Materia</span>
					</a>
				</div>
			</li> <!-- #end site-logo -->

			<!-- fullscreen -->
			<li class="fullscreen hidden-xs">
				<a href="javascript:;"><i class="ion ion-qr-scanner"></i></a>

			</li>	<!-- #end fullscreen -->

			<!-- notification drop -->
			<li class="notify-drop hidden-xs dropdown">
				<a href="javascript:;" data-toggle="dropdown">
					<i class="ion ion-speakerphone"></i>
					<span class="badge badge-danger badge-xs circle">3</span>
				</a>

				<div class="panel panel-default dropdown-menu">
					<div class="panel-heading">
						You have 3 new notifications 
						<a href="javascript:;" class="right btn btn-xs btn-pink mt-3">Show All</a>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-archive left bg-success"></span>
									<div class="desc">
										<strong>App downloaded</strong>
										<p class="small text-muted">1 min ago</p>
									</div>
								</a>
							</li>
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-alert-circled left bg-danger"></span>
									<div class="desc">
										<strong>Application Error</strong>
										<p class="small text-muted">4 hours ago</p>
									</div>
								</a>
							</li>
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-person left bg-info"></span>
									<div class="desc">
										<strong>New User Registered</strong>
										<p class="small text-muted">2 days ago</p>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>

			</li>	<!-- #end notification drop -->

		</ul>

		<ul class="list-unstyled right-elems">
			<!-- profile drop -->
			<li class="profile-drop hidden-xs dropdown">
				<a href="javascript:;" data-toggle="dropdown">
					<img src="images/admin.jpg" alt="admin-pic">
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="javascript:;"><span class="ion ion-person">&nbsp;&nbsp;</span>Profile</a></li>
					<li><a href="javascript:;"><span class="ion ion-settings">&nbsp;&nbsp;</span>Settings</a></li>
					<li class="divider"></li>
					<li><a href="javascript:;"><span class="ion ion-lock-combination">&nbsp;&nbsp;</span>Lock Screen</a></li>
					<li><a href="javascript:;"><span class="ion ion-power">&nbsp;&nbsp;</span>Logout</a></li>
				</ul>
			</li>
			<!-- #end profile-drop -->

			<!-- sidebar contact -->
			<li class="floating-sidebar">
				<a href="javascript:;">
					<i class="ion ion-grid"></i>
				</a>
				<div class="sidebar-wrap" data-perfect-scrollbar>
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#sidebar-chat-tab" data-toggle="tab">Chat</a>
						</li>
						<li>
							<a href="#sidebar-info-tab" data-toggle="tab">Info</a>
						</li>
					</ul> <!-- #end nav-tabs -->
					<div class="tab-content">
						<div class="tab-pane active" id="sidebar-chat-tab">
							<div class="chat-tab tab clearfix">
								<h5 class="title mt0 mb20">Online</h5>
								<div class="user-container mb15">
									<img src="images/sample/1.jpg" alt="">
									<div class="desc">
										<p class="mb0">John Wick</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;San Franciso, USA</p>

									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/2.jpg" alt="">
									<div class="desc">
										<p class="mb0">George K.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;California, USA</p>
									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/3.jpg" alt="">
									<div class="desc">
										<p class="mb0">Shello Dse.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Berlin, Germany</p>
									</div>
									<span class="ion ion-record avail right away"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/4.jpg" alt="">
									<div class="desc">
										<p class="mb0">Lucas Tower</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Paris, France</p>
									</div>
									<span class="ion ion-record avail right away"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/5.jpg" alt="">
									<div class="desc">
										<p class="mb0">Hey Win</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Hongkong, China</p>
									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/6.jpg" alt="">
									<div class="desc">
										<p class="mb0">Kelvin L.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Moscow, Russia</p>
									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<h5 class="title mt0 mb20">Offline</h5>

								<div class="user-container mb15">
									<img src="images/sample/7.jpg" alt="">
									<div class="desc">
										<p class="mb0">Martin Xx.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;xxx, yyy</p>
									</div>
									<span class="ion ion-record avail right off"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/2.jpg" alt="">
									<div class="desc">
										<p class="mb0">Lorem Ipsum</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Virginia, USA</p>
									</div>
									<span class="ion ion-record avail right off"></span>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="sidebar-info-tab">
							<div class="info-tab tab clearfix">
								<h5 class="title mt0 mb20">Work in Progress</h5>
								<ul class="list-unstyled mb15 clearfix">
									<li>
										<div class="clearfix mb10">
											<small class="left">App Upload</small>
											<small class="right">80%</small>
										</div>
										<div class="progress-xs progress">
											<div class="progress-bar progress-bar-primary" style="width: 80%;"></div>
										</div>
									</li>
									<li>
										<div class="clearfix mb10">
											<small class="left">Creating Assets</small>
											<small class="right">50%</small>
										</div>
										<div class="progress-xs progress">
											<div class="progress-bar progress-bar-danger" style="width: 50%;"></div>
										</div>
									</li>
									<li>
										<div class="clearfix mb10">
											<small class="left">New UI 2.0</small>
											<small class="right">90%</small>
										</div>
										<div class="progress-xs progress">
											<div class="progress-bar progress-bar-success" style="width: 90%;"></div>
										</div>
									</li>
								</ul>

								<h5 class="title mt0 mb20">Settings</h5>
								<div class="clearfix mb15">
									<div class="left">
										<p>Show me online</p>
									</div>

									<div class="right">
										<div class="ui-toggle ui-toggle-success ui-toggle-xs">
											<label>
												<input type="checkbox" checked> 
												<span></span>
											</label>
										</div>
									</div>
								</div>

								<div class="clearfix mb15">
									<div class="left">
										<p>Notifications</p>
									</div>

									<div class="right">
										<div class="ui-toggle ui-toggle-success ui-toggle-xs">
											<label>
												<input type="checkbox"> 
												<span></span>
											</label>
										</div>
									</div>
								</div>

								<div class="clearfix mb15">
									<div class="left">
										<p>Enable History</p>
									</div>

									<div class="right">
										<div class="ui-toggle ui-toggle-success ui-toggle-xs">
											<label>
												<input type="checkbox" checked> 
												<span></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- #end tab content -->
				</div> <!-- #end sidebar-wrap -->
			</li>

		</ul>

	</header>
	<!-- #end header -->


	<!-- main-container -->
	<div class="main-container clearfix">
		<!-- main-navigation -->
		<aside class="nav-wrap" id="site-nav" data-perfect-scrollbar>
			<div class="nav-head">
				<!-- site logo -->
				<a href="index.html" class="site-logo text-uppercase">
					<i class="ion ion-disc"></i>
					<span class="text">Materia</span>
				</a>
			</div>

			<!-- Site nav (vertical) -->

			<nav class="site-nav clearfix" role="navigation">
				<div class="profile clearfix mb15">
					<img src="images/admin.jpg" alt="admin">
					<div class="group">
						<h5 class="name">Robert Smith</h5>
						<small class="desig text-uppercase">UX Designer</small>
					</div>
				</div>

				<!-- navigation -->
				<ul class="list-unstyled clearfix nav-list mb15">
					<li>
						<a href="index.html">
							<i class="ion ion-monitor"></i>
							<span class="text">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="email.inbox.html">
							<i class="ion ion-email"></i>
							<span class="text">Email</span>
						</a>
					</li>

					<li>
						<a href="calendar.html">
							<i class="ion ion-calendar"></i>
							<span class="text">Calendar</span>
							<span class="badge badge-xs badge-danger">hot</span>
						</a>
					</li>
					<li>
						<a href="material.html">
							<i class="ion ion-icecream"></i>
							<span class="text">Material</span>
							<span class="badge badge-xs badge-success">new</span>
						</a>
					</li>
					
					<li>
						<a href="javascript:;">
							<i class="ion ion-android-options"></i>
							<span class="text">UI Kit</span>
							<i class="arrow ion-chevron-left"></i>
							<span class="badge badge-xs badge-info">10</span>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="ui.buttons.html">Buttons</a></li>
							<li><a href="ui.typography.html">Typography</a></li>
							<li><a href="ui.grids.html">Grids</a></li>
							<li><a href="ui.panels.html">Panels</a></li>
							<li><a href="ui.notifications.html">Notifications</a></li>
							<li><a href="ui.tabs.html">Tabs &amp; Accordion</a></li>
							<li><a href="ui.progress-bars.html">Progress Bars</a></li>
							<li><a href="ui.extras.html">Extras</a></li>
						</ul>
					</li>

					<li>
						<a href="javascript:;">
							<i class="ion ion-asterisk"></i>
							<span class="text">Icons</span>
							<i class="arrow ion-chevron-left"></i>
							<span class="badge badge-xs badge-primary">2</span>
						</a>
						<ul class="inner-drop nested list-unstyled">
							<li><a href="icons.html">Font Awesome</a></li>
						</ul>
					</li>

					<li>
						<a href="javascript:;">
							<i class="ion ion-stats-bars"></i>
							<span class="text">Charts</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="charts.c3.html">C3</a></li>
							<li><a href="charts.sparklines.html">Sparklines</a></li>
						</ul>
					</li>
					<li class="open">
						<a href="javascript:;">
							<i class="ion ion-document-text"></i>
							<span class="text">Formularios</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<ul class="inner-drop list-unstyle"><li class="active"><a href="forms.elements.html">Cuentas a cobrar</a></li>
							<li class="active"><a href="forms.elements.html">Cuentas a cobrar</a></li><ul>
							
						</ul>
					</li>
					<li>
						<a href="gmap.html">
							<i class="ion ion-map"></i>
							<span class="text">Maps</span>
						</a>
					</li>
					<li>
						<a href="tables.html">
							<i class="ion ion-clipboard"></i>
							<span class="text">Tables</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="ion ion-printer"></i>
							<span class="text">Pages</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="pages.signin.html">Sign In</a></li>
							<li><a href="pages.signup.html">Sign Up</a></li>
							<li><a href="pages.forget-pass.html">Forget Pass</a></li>
							<li><a href="pages.404.html">404</a></li>
							<li><a href="pages.lockscreen.html">Lock Screen</a></li>
							<li><a href="pages.timeline.html">Timeline</a></li>
							<li><a href="pages.search.html">Search</a></li>
							<li><a href="pages.invoice.html">Invoice</a></li>
						</ul>
					</li>
				</ul> <!-- #end navigation -->
			</nav>

			<!-- nav-foot -->
			<footer class="nav-foot">
				<p>2015 &copy; <span>MATERIA</span></p>
			</footer>

		</aside>
		<!-- #end main-navigation -->

		<!-- content-here -->
		<div class="content-container" id="content">
			<div class="page page-forms-elements">

				<ol class="breadcrumb breadcrumb-small">
					<li>Forms</li>
					<li class="active"><a href="forms.elements.html">Mantenimientos cuentas a cobrar</a></li>
				</ol>

				<div class="page-wrap">
					<!-- row --> <!--
					<div class="row">
					
				
						<!-- col-left --
						<div class="col-sm-12 col-md-6">
							<div class="panel panel-default panel-hovered panel-stacked mb30">
								<div class="panel-heading">Native Controls</div>
								<div class="panel-body">
									<form role="form" class="form-horizontal" action="javascript:;"> <!-- form horizontal acts as a row -->
										<!-- normal control --
										<div class="form-group">
											<label class="col-md-3 control-label">Normal Control</label>
											<div class="col-md-9">
												<input type="text" class="form-control">
											</div>
										</div>

										-- with hint --
										<div class="form-group">
											<label class="col-md-3 control-label">With Hint</label>
											<div class="col-md-9">
												<input type="text" class="form-control" placeholder="Hint Text">
												<p class="text-danger text-right xsmall">hint description</p>
											</div>
										</div>
										
										-- passowrd control --
										<div class="form-group">
											<label class="col-md-3 control-label">Password</label>
											<div class="col-md-9">
												<input type="password" class="form-control" placeholder="Password Text">
											</div>
										</div>

										-- Disabled control --
										<div class="form-group">
											<label class="col-md-3 control-label">Disabled</label>
											<div class="col-md-9">
												<input type="text" class="form-control" placeholder="Input is disabled" disabled>
											</div>
										</div>
										
										-- textarea control --
										<div class="form-group">
											<label class="col-md-3 control-label">Textarea</label>
											<div class="col-md-9">
												<textarea rows="5" class="form-control resize-v" placeholder="Message here"></textarea>
											</div>
										</div>
										
										-- native select -
										<div class="form-group">
											<label class="col-md-3 control-label">Native Select</label>
											<div class="col-md-9">
												<select class="form-control">
													<option value="0" selected disabled>Select a fruit</option>
													<option value="1">Apple</option>
													<option value="2">Orange</option>
													<option value="3">Grapes</option>
													<option value="4">Pineapple</option>
													<option value="5">Cherry</option>
												</select>
											</div>
										</div>
										
										-- success control --
										<div class="form-group">
											<label class="col-md-3 control-label">Success Control</label>
											<div class="col-md-9">
												<div class="has-success">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>

										-- warning control --
										<div class="form-group">
											<label class="col-md-3 control-label">Warning Control</label>
											<div class="col-md-9">
												<div class="has-warning">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										
										-- error control --
										<div class="form-group">
											<label class="col-md-3 control-label">Error Control</label>
											<div class="col-md-9">
												<div class="has-error">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>

										-- prepend control --
										<div class="form-group">
											<label class="col-md-3 control-label">Prepend</label>
											<div class="col-md-9">
												<div class="input-group">
													<span class="input-group-addon ion ion-person"></span>
													<input type="text" class="form-control" placeholder="Full Name">
												</div>
											</div>
										</div>

										 append control 
										<div class="form-group">
											<label class="col-md-3 control-label">Append</label>
											<div class="col-md-9">
												<div class="input-group">
													<input type="email" class="form-control" placeholder="Email Address">
													<span class="input-group-addon ion ion-email-unread"></span>
												</div>
											</div>
										</div>

										 both control 
										<div class="form-group">
											<label class="col-md-3 control-label">Both Addon</label>
											<div class="col-md-9">
												<div class="input-group">
													<span class="input-group-addon">$</span>
													<input type="email" class="form-control" placeholder="Both Addon">
													<span class="input-group-addon">0.0</span>
												</div>
											</div>
										</div>

										dropdown control 
										<div class="form-group">
											<label class="col-md-3 control-label">Dropdown</label>
											<div class="col-md-9">
												<div class="input-group">
													<div class="input-group-btn">
														<div class="dropdown" dropdown>
															<button class="btn btn-pink dropdown-toggle" dropdown-toggle 
															type="button">Click Me<span class="caret"></span></button>
															<ul class="dropdown-menu">
																<li><a href="javascript:;">Action</a></li>
																<li><a href="javascript:;">Another action</a></li>
																<li><a href="javascript:;">Something else here</a></li>
																<li class="divider"></li>
																<li><a href="javascript:;">Separated link</a></li>
															</ul>
														</div>
													</div>
													<input type="text" class="form-control" placeholder="Dropdown button addon">
												</div>
											</div>
										</div>

										 button addon 
										<div class="form-group">
											<label class="col-md-3 control-label">Button Addon</label>
											<div class="col-md-9">
												<div class="input-group">
													<div class="input-group-btn">
														<button class="btn btn-default ion ion-paper-airplane"></button>
													</div>
													<input type="text" class="form-control" placeholder="Button Addon">
												</div>
											</div>	
										</div>
										
										<div class="clearfix right">
											<button class="btn btn-primary mr5" type="submit">Submit</button>
											<button class="btn btn-default">Cancel</button>
										</div>
									</form>
								</div>
							</div>
						</div>  #end col-left 


						col-right 
						<div class="col-sm-12 col-md-6">
							<div class="panel panel-default panel-hovered panel-stacked mb30">
								<div class="panel-heading">Sizes</div>
								<div class="panel-body">
									<form role="form" action="javascript:;">
										<div class="form-group form-group-sm">
											<label class="control-label small">Small - Using <code>.form-group-sm</code> class.</label>
											<input type="text" class="form-control" placeholder="or .input-sm">
										</div>

										<div class="form-group">
											<label class="control-label small">Medium - Default</label>
											<input type="text" class="form-control" placeholder="No extra class">
										</div>

										<div class="form-group form-group-lg">
											<label class="control-label small">Large - Using <code>.form-group-lg</code> class.</label>
											<input type="text" class="form-control" placeholder="or .input-lg">
										</div>
									</form>
								</div>
							</div>
						</div>
						
						Selects -->
						
						<!--
						<div class="col-sm-12 col-md-6">
							<div class="panel panel-default panel-hovered panel-stacked mb30">
								<div class="panel-heading">Selects</div>
								<div class="panel-body">
									<form role="form">
										<div>
										-->
											<!-- Single Select -->
											<!--
											<div class="form-group">
												<label class="control-label small">Single Select - default</label>
												<select id="personSelect" style="width: 100%" data-placeholder="Select a person">
													<option></option> -->	<!-- empty, for placeholder --> <!--
													<option value="1">Adam</option>
													<option value="2">Amalie</option>
													<option value="3">Nicolas</option>
													<option value="4">Wladimir</option>
													<option value="5">Johnson</option>
													<option value="6">Samantha</option>
													<option value="7">Estefania</option>
													<option value="8">Natasha</option>
													<option value="9">Nicole</option>
													<option value="10">Adrian</option>
												</select>
											</div>
-->
											<!-- single select - with optgroup -->
											<!--
											<div class="form-group">
												<label class="control-label small">Single Select - with optgroup</label>
												<select id="stateSelect" data-placeholder="Select a state (optgroup)" style="width: 100%">
													<option></option> -->	<!-- blank for placeholder --><!--
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
-->
											<!-- Multi Select -->
											<!--
											<div class="form-group">
												<label class="control-label small">Multi Select</label>
												<select id="multiSelect" style="width: 100%" data-tags="true" multiple="multiple">
													<option selected="selected">Blue</option>
													<option selected="selected">Red</option>
													<option>Green</option>
													<option>Magneto</option>
													<option>Orange</option>
													<option>Pink</option>
													<option>White</option>
												</select>
											</div>	
-->
											<!-- Templating Select -->
											<!--
											<div class="form-group">
												<label class="control-label small">Templating</label>
												<select id="templatingSelect" style="width: 100%">
													<option value="AK">Alaska</option>
													<option value="AL">Alabama</option>
													<option value="AR">Arkansas</option>
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="CA">California</option>
													<option value="DE">Delaware</option>
													<option value="FL">Florida</option>
												</select>
												
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
						-->
						<!-- #end col-right -->

						<!-- Color Picker -->
						<!--
						<div class="col-sm-12 col-md-6">
							<div class="panel panel-default panel-hovered panel-stacked mb30">
								<div class="panel-heading">Color Picker</div>
								<div class="panel-body">
									<form role="form">
										<div class="form-group">
											<input type="text"  id="colorpickerDemo" class="form-control" value="#5367ce"/>
										</div>
										<div class="form-group">
											<div class="input-group" id="colorpickerDemo1">
												<input type="text" class="form-control" value="rgba(37, 30,130,1)">
												<div class="input-group-addon">
													<i></i>
												</div>
											</div>
										</div>
									</form>
									
								</div>
							</div>
						</div>

					</div>
					-->
					<!-- 1#end row -->
					


					<!-- row -->
					<!-- checkboxes -->
					
					<!-- #end row -->


					<!-- row -->
					<!-- radio and toggles -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default panel-hovered panel-stacked mb30">
								<div class="panel-heading">Mantenimientos cuentas a cobrar</div>
								<!--      -->
								<div class="panel-body">
									<div class="col-md-12">
							<div class="panel panel-lined table-responsive panel-hovered mb20 data-table" style="padding-bottom: 20px">
								<div class="panel-heading">Tabla de Datos</div>
								<div class="panel-body">
									<div class="small text-bold left mt5">
										Mostrar&nbsp;
										<select class="lengthSelect">
											<option value="5">5</option>
											<option value="10" selected>10</option>
											<option value="20">20</option>
											<option value="50">50</option>
										</select> 
										&nbsp;Columnas
									</div>

									<form class="form-horizontal right col-lg-4" action="javascript:;">
									<div class="ui-radio ui-radio-pink" >
												<label class="ui-radio-inline">
													<input type="radio" checked name="radioEg"> 
													<span>C&oacute;digo</span>
												</label>
												<label class="ui-radio-inline">
													<input type="radio" name="radioEg"> 
													<span>Descripci&oacute;n</span>
												</label>

												<label class="ui-radio-inline">
													<input type="radio" name="radioEg"> 
													<span>Monto</span>
												</label>
												
												<div class="col-md-9" >
												<br/>
												<input type="text" class="form-control input-sm searchInput" placeholder="Ingresar Dato"><br/>
												<button type="button" class="btn btn-primary" style="margin-left:15%">Buscar</button>
											</div>
											
											</div>
										
									</form>
								</div>
							<!-- data table -->
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>
											Fecha de Cobro
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
										<th>
											C&oacute;digo
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
										<th>
											Descripci&oacute;n
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
										<th>
											Nombre Proveedor
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
										<th>
											Monto
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
									</tr>
								</thead>
								<tbody>
									<!-- data initialize via script, can also be load via ajax -->
								</tbody>
							</table>
							<!-- #end data table -->	
							
						</div>
								</div> <!-- #end panel body -->
							</div> <!-- #end panel -->
							<!-------------->
						</div>

					</div>
					<!-- #end row -->


					<!-- row -->
					<!--------------------------------------------------------->     
					
<!------------------------------------------------------------------->
				</div> <!-- #end page-wrap -->
			</div> <!-- #end page -->
		</div> <!-- #end content-container -->

	</div> <!-- #end main-container -->


	<!-- theme settings -->
	<div class="site-settings clearfix hidden-xs">
		<div class="settings clearfix">
			<div class="trigger ion ion-settings left"></div>
			<div class="wrapper left">
				<ul class="list-unstyled other-settings">
					<li class="clearfix mb10">
						<div class="left small">Nav Horizontal</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox" id="navHorizontal"> 
								<span>&nbsp;</span> 
							</label>
						</div>
						
						
					</li>
					<li class="clearfix mb10">
						<div class="left small">Fixed Header</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox"  id="fixedHeader"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
					<li class="clearfix mb10">
						<div class="left small">Nav Full</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox"  id="navFull"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
				</ul>
				<hr/>
				<ul class="themes list-unstyled" id="themeColor">
					<li data-theme="theme-zero" class="active"></li>
					<li data-theme="theme-one"></li>
					<li data-theme="theme-two"></li>
					<li data-theme="theme-three"></li>
					<li data-theme="theme-four"></li>
					<li data-theme="theme-five"></li>
					<li data-theme="theme-six"></li>
					<li data-theme="theme-seven"></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- #end theme settings -->


	

	<!-- Dev only -->
	<!-- Vendors -->
	<script src="scripts/vendors.js"></script>
	<script src="scripts/plugins/screenfull.js"></script>
	<script src="scripts/plugins/perfect-scrollbar.min.js"></script>
	<script src="scripts/plugins/waves.min.js"></script>
	<script src="scripts/plugins/select2.min.js"></script>
	<script src="scripts/plugins/bootstrap-colorpicker.min.js"></script>
	<script src="scripts/plugins/bootstrap-slider.min.js"></script>
	<script src="scripts/plugins/summernote.min.js"></script>
	<script src="scripts/plugins/bootstrap-datepicker.min.js"></script>
	<script src="scripts/app.js"></script>
	<script src="scripts/form-elements.init.js"></script>
</body>
</html>