<?php

include "./conexion.php";

if(isset($_GET['msg'])){
$msg=$_GET['msg'];
}
?>
<!DOCTYPE html>
<html>
<head>

	<?php include("includes/meta.php");?>
    

	<!-- Icons -->
	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="styles/plugins/waves.css">
	<link rel="stylesheet" href="styles/plugins/perfect-scrollbar.css">
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.min.css">


	 
 	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]--> 

<style>
/*.bg{ background-image:url(images/background.jpg) !important; background-repeat: no-repeat;
 background-attachment: fixed;
 background-position: center center; }*/
</style>	
</head>
<body id="app" class="app off-canvas body-full  bg">
	

	
	<!-- main-container -->
	<div class="main-container clearfix">
		
		<!-- content-here -->
		<div class="content-container" id="content">
			<div class="page page-auth">
				<div class="auth-container">

					<div class="form-head mb20">
                                            <center><img src="images/imagen.png" width="40%" /></center>
                                            <br>
                                            <h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold"><a href="index.php"><center>UESOCC</center><center>
                                                                                                                                          Poyeccion Social</center></a></h1>
						<h5 class="text-normal h5 text-center">Iniciar Sesi&#243;n</h5>
					</div>

					<div class="form-container">
						<form class="form-horizontal" name="form-login" id="loginform" method="post" action="validateLogin.php">
                        <!-- Alert message -->
                        	<div id="error" class="alert alert-danger" style="display:none;">
                                    
                         	</div>
                          <!--/ Alert message -->
							<div class="md-input-container md-float-label">
                                                            <label>Usuario</label>
                                                            <br>
								<input type="text" name="usuario" id="input-username" class="md-input" onkeypress="if(event.keyCode==13){document.form1.pas.focus();}">
								
							</div>

							<div class="md-input-container md-float-label">
                                                            <label>Contrase&ntilde;a</label>
                                                            <br>
								<input type="password" name="pass" id="input-password"  class="md-input" onkeypress="if(event.keyCode==13){}">
								
							</div>

							
							
							<div class="btn-group btn-group-justified mb15">
								<div class="btn-group">
									<button type="submit" class="btn btn-success">Iniciar Sesi&#243;n</button>
								</div>
							</div> 
							
						</form>
					</div>

				</div> <!-- #end signin-container -->
			</div>

<hr/>
                    
                    <p class="text-muted text-center">Derechos © Reservados UESOCC | Universidad de El Salvador |  Facultad Multidisciplinaria de Occidente <br>
            Unidad de Proyeccion Social | telefonos: | Fax: 
      </p>
		</div> 
		<!-- #end content-container -->

	</div> <!-- #end main-container -->




	<!-- Dev only -->
	<script src="scripts/vendors.js"></script>
    
    <script type="text/javascript">
 $(document).ready(function(){
      $('#input-username').focus();
            $("#loginform").submit(function() {
        if (!$("#input-username").val()) {
          $("#error").text("Ingrese su Usuario").addClass("alert alert-error").fadeIn("Slow");
	  $('#input-username').focus(); 
          return false;
        } else if (!$("#input-password").val()) {
          $("#error").text("Ingrese su Contrase&ntilde;a").addClass("alert alert-error").fadeIn("Slow");
          return false;
        } else {
          return true;
        }
      });
    });
</script> 


</body>
</html>