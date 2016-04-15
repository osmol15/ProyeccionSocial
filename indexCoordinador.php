<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Proyeccion Social">
	<meta name="author" content="Giovany Rosales">
	<!-- <base href="/"> -->

	<title>Proyeccion Social</title>
	
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
			<li>
				<div class="site-logo visible-xs">
					<a href="javascript:;" class="text-uppercase h3">
						<span class="text">UES Fmocc</span>
					</a>
				</div>
			</li> <!-- #end site-logo -->

			<!-- fullscreen -->
			<li class="fullscreen hidden-xs">
                            <a href="javascript:;"><i class="step size-64 icon ion-qr-scanner"></i></a>
			</li>	<!-- #end fullscreen -->

		</ul>

		<ul class="list-unstyled right-elems">
			<!-- profile drop -->
			<li class="profile-drop hidden-xs dropdown">
				<a href="javascript:;" data-toggle="dropdown">
					<img src="images/admin2.png" alt="admin-pic">
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="javascript:;"><span class="ion ion-settings">&nbsp;&nbsp;</span>Editar Cuenta</a></li>
                                        		<li class="divider"></li>
                                                        <li><a href="logout.php"><span class="ion ion-power">&nbsp;&nbsp;</span>Logout</a></li>
				</ul>
			</li>
			<!-- #end profile-drop -->
		</ul>
	</header>
	<!-- #end header -->


	<!-- main-container -->
	<div class="main-container clearfix">
		<!-- main-navigation -->
		<aside class="nav-wrap" id="site-nav" data-perfect-scrollbar>
			<div class="nav-head">
				<!-- site logo -->
                                <a href="indexCoordinador.php" class="site-logo text-uppercase">
                                    <img src="images/imagen.png" alt="admin" style="width: 70px; height: 95px; alignment-adjust: central; margin-left: 50px">
                                    <center><span class="text" style="margin-right: 36px">UES FMOCC</span></center>
				</a>
			</div>

			<!-- Site nav (vertical) -->

			<nav class="site-nav clearfix" role="navigation">
				<div class="profile clearfix mb15">
					<img src="images/admin2.png" alt="admin">
					<div class="group">
						<h5 class="name">Giovany Rosales</h5>
						<small class="desig text-uppercase">Proyeccion Social</small>
					</div>
				</div>

				<!-- navigation -->
				<ul class="list-unstyled clearfix nav-list mb15">
					<li>
                                            <a href="indexCoordinador.php">
                                                    <i class="ion ion-monitor"></i>
							<span class="text">Inicio</span>
						</a>
					</li>
                                        <li>
						<a href="javascript:;">
							<i class="ion ion-clipboard"></i>
							<span class="text">Noticias</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
                                                    <li><a href="forms.elements.dan.html" target="frameprincipal">Listar</a></li>
							<li><a href="forms.elements.dan.html" target="frameprincipal">Crear</a></li>
							<li><a href="forms.elements.dan.html" target="frameprincipal">Editar</a></li>
						</ul>
					</li>
                                         <li>
						<a href="javascript:;">
							<i class="ion ion-document-text"></i>
							<span class="text">Poyectos</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
                                                    	<li><a href="forms.elements.dan.html" target="frameprincipal">Buscar por Estudiante</a></li>
                                                        <li><a href="forms.elements.dan.html" target="frameprincipal">Buscar por Lugar</a></li>
                                                        <li><a href="forms.elements.dan.html" target="frameprincipal">Buscar por Tutor</a></li>
                                                        <li><a href="forms.elements.dan.html" target="frameprincipal">Buscar por Nombre</a></li>
						</ul>
					</li>
                                         <li>
						<a href="javascript:;">
							<i class="ion ion-pin"></i>
							<span class="text">Peticiones</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
                                                    	<li><a href="AgregarPeticion.php"  target="frameprincipal">Banco de Proyectos</a></li>
						</ul>
					</li>
                                        <li>
						<a href="javascript:;">
							<i class="ion ion-android-people"></i>
							<span class="text">Usuarios</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
                                                    <li><a href="IngresarEstudiante.php" target="frameprincipal">Ingresar Estudiante</a>
                                                        <li><a href="forms.elements.dan.html" target="frameprincipal">Ingresar Tutor</a></li>
						</ul>
					</li>
                                         <li>
						<a href="javascript:;">
							<i class="ion ion-folder"></i>
							<span class="text">Utileria</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="forms.elements.dan.html" target="frameprincipal">Ver</a>
                                                        <li><a href="forms.elements.dan.html" target="frameprincipal">Cargar</a></li>
						</ul>
                                        </li>
                                        <li>
						<a href="index.html">
							<i class="ion ion-help-circled"></i>
							<span class="text">Ayuda</span>
						</a>
					</li>
				</ul> <!-- #end navigation -->
			</nav>

			<!-- nav-foot -->
			<footer class="nav-foot">
				<p>2016 &copy; <span>Proyeccion Social</span></p>
			</footer>

		</aside>
		<!-- #end main-navigation -->

            <div class="content-container" id="content">
                <div class="page page-forms-elements">
                    
            <iframe style="   height: 1050px; width: 100%; resize: initial; overflow: auto;" scrolling="no" frameborder="0" id="frameprincipal" src="bienvenida.php" name="frameprincipal"> 
            </iframe>
            
                </div>
	</div> <!-- #end main-container -->

	<!-- theme settings -->

	<div class="site-settings clearfix hidden-xs">

		<div class="settings clearfix">

			<div class="trigger ion ion-settings left"></div>

			<div class="wrapper left">
				<ul class="list-unstyled other-settings">
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
                                            <div class="left small" style="display: none;">Nav Full</div>
						<div class="md-switch right" style="display: none;">
							<label><input type="checkbox"  id="navFull"> 
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