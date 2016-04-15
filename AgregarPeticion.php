<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require("conexion.php");
//$nombreusuario =$_POST["nombreusuario"];
//$apellidousuario =$_POST["apellidousuario"];
    
//$q="select carnetalumno from usuarios where nombreusuario='$nombreusuario' AND apellidousuario='$apellidousuario' AND idtipousuario=2";
//$r=mysql_query($q,$conn) or die("Error: ".mysql_error());
    
  //  $Rs=mysql_fetch_array($r);

if(isset($_POST["submit"]))//con isset no necesito dos paginas para la consulta sino q rediirge para llenar en la misma pagina
{


$idtipoproyecto 		= $_POST["idtipoproyecto"];
$numerobeneficiados                  = $_POST["numerobeneficiados"];
$lugarejecucion                     = $_POST["lugarejecucion"];
$direccioninstitucion		= $_POST["direccioninstitucion"];
$telefono                  = $_POST["telefono"];
$horasasignadas = $_POST["horasasignadas"];
$fecha	= $_POST["fecha"];
$nombreproyecto		= $_POST["nombreproyecto"];

//$query="SELECT a.nombreusuario, a.apellidousuario, a.telefono, a.carrera, a.carnetalumno, c.nombretipo FROM usuarios a, tipousuario c WHERE  a.idtipousuario=c.idtipousuario AND a.carnetalumno LIKE '$carnetalumno'";
//	$result=mysql_query($query,$conn) or die("Error: ".mysql_error());
	// Si se encuentran los datos desplegamos los resultados
	// Si no, avisamos que no se hallaron
//        $query2="SELECT a.nombreusuario, b.nombretipo, a.apellidousuario, a.usuario, a.clave, a.telefono, b.idtipousuario, a.iddepartamento FROM usuarios a,tipousuario b WHERE a.idtipousuario=b.idtipousuario AND a.idtipousuario = 4 AND a.apellidousuario LIKE '$apellidotutor%'  AND a.nombreusuario LIKE '$nombretutor%'";
//	$result2=mysql_query($query2,$conn) or die("Error: ".mysql_error());
	// Si se encuentran los datos desplegamos los resultados
	// Si no, avisamos que no se hallaron
        
//	if(mysql_num_rows($result ) > 0){
$inser = "insert into proyecto(idtipoproyecto, numerobeneficiados, lugarejecucion, direccioninstitucion, telefono,"
        . "  horasasignadas, nombreproyecto, fecha)values('$idtipoproyecto','$numerobeneficiados','$lugarejecucion','$direccioninstitucion','$telefono','$horasasignadas','$nombreproyecto','$fecha')";
//inserta la info en  los campos de la tabla inscripcion

        

if(mysql_query($inser))
{
                  echo "<header>";
                 echo "<script language='javascript'>"; 
                echo "alert(':) Proyecto Inscrito Exitosamente.')"; 
                echo "</script>";  
                echo "</header>";
                 
	exit;
}
else
{
	echo mysql_error();
}
}
else {
    
	
?>
<html>
    <head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Proyeccion Social Admin">
	<meta name="author" content="Giovany Rosales">
	<!-- <base href="/"> -->
	<title>Proyeccion Social Admin</title>
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
         <script language="javascript">
    
    function validar_texto(e) 
{
tecla = (document.all) ? e.keyCode : e.which;

//Tecla de retroceso para borrar, siempre la permite
if (tecla===8) return true; 

// Patron de entrada, en este caso solo acepta letras
//patron =/[A-Za-z]/; 
//solo numeros
patron = /\d/;
//no acepta numeros
//patron = /\D/; 

tecla_final = String.fromCharCode(tecla);
return patron.test(tecla_final); 
}
function validar_texto2(e) 
{
tecla = (document.all) ? e.keyCode : e.which;

//Tecla de retroceso para borrar, siempre la permite
if (tecla===8) return true; 

// Patron de entrada, en este caso solo acepta letras
patron =/[A-Za-z]/; 
//solo numeros
//patron = /\d/;
//no acepta numeros
//patron = /\D/; 

tecla_final = String.fromCharCode(tecla);
return patron.test(tecla_final); 
} 
</script> 
       
    </head>
    <body id="app" class="app off-canvas">
        <?php
        // put your code here
        ?>
    	<!-- <div class="content-container" id="content"> -->
	<!--<div class="page page-forms-elements"> --> 
        
			<ol class="breadcrumb breadcrumb-small">
					<li>Peticiones</li>
					<li class="active"><a>Registrar peticiones de proyecto</a></li>
				</ol>
				<div class="page-wrap">
					<!-- row -->
					<div class="row">						
                                                        <div class="col-sm-12 col-md-6">
							<div class="panel panel-default panel-hovered panel-stacked mb30">
								<div class="panel-heading">Agregar Proyectos a la base de Datos</div>
                                                                <div class="panel-body" style="padding-right: 30%;">
                                                                    <br><br>
                                                                    <form role="form" name="form1" class="form-horizontal" method="post" action="AgregarPeticion.php"> <!-- form horizontal acts as a row -->
									
										<div class="form-group">
											<label class="col-md-3 control-label" for="idtipoproyecto">Tipo de Servicio Social: </label>
                                                                                        <div class="col-md-9">
                                                                                            <span>
                                                                                               <select name="idtipoproyecto" required="true" class="form-control">
                                                                                                   <option value="1">INTERNO</option>
                                                                                                   <option value="2">EXTERNO</option>
                                                                                                   <option value="3">INSTRUCTOR</option>
                                                                                               </select>
                                                                                            </span> 
                                                                                        </div>
										</div>
                                                                                <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Nombre del Proyecto:</label>
                                                                                        <div class="col-md-9">
                                                                                            <input id="nombreproyecto" name="nombreproyecto" class="form-control" type="text" > 
                                                                                        </div>
                                                                                </div> 
                                                                                <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Lugar de Ejecucion:</label>
                                                                                        <div class="col-md-9">
                                                                                            <input id="lugarejecucion" name="lugarejecucion" class="form-control" type="text" > 
                                                                                        </div>
                                                                                </div> 
                                                                                 <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Numero de Personas Beneficiadas:</label>
                                                                                        <div class="col-md-9">
                                                                                            <input id="numerobeneficiados" name="numerobeneficiados" onkeypress="return validar_texto(event)" class="form-control" type="text" > 
                                                                                        </div>
                                                                                </div> 
                                                                                <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Numero de horas asignadas(min=1 y max=500):</label>
                                                                                        <div class="col-md-9">
                                                                                            <br>
                                                                                            <input id="horasasignadas" name="horasasignadas" onkeypress="return validar_texto(event)" min="1" max="500" class="form-control" type="number" > 
                                                                                        </div>
                                                                                </div> 
                                                                                <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Direccion:</label>
                                                                                        <div class="col-md-9">
                                                                                            <input id="direccioninstitucion" name="direccioninstitucion" class="form-control" type="text" > 
                                                                                        </div>
                                                                                </div> 
                                                                                <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Telefono:</label>
                                                                                        <div class="col-md-9">
                                                                                            <input id="telefono" name="telefono" onkeypress="return validar_texto(event)" class="form-control" maxlength="8" type="text" > 
                                                                                        </div>
                                                                                </div> 
                                              
                                                                                <div class="form-group">

										<label class="col-md-3 control-label">Fecha:</label>
                                                                                    <div class="col-md-9" id="datepickerDemo">
                                                                                        <input type="date" name="fecha" class="form-control" step="1" min="<?php echo date("Y-m-d");?>"  value="<?php echo date("Y-m-d");?>">
                                                                                    </div>
                                                                                </div>
                                                                        
                                                                                <br><br>
                                                                                
										<div class="clearfix right">
											<button class="btn btn-primary mr5" name="submit" id="saveForm" type="submit">Guardar</button>
											<button class="btn btn-default">Cancelar</button>
										</div>
									</form>
						</div> <!-- #end panel body -->
                                                
							</div> <!-- #end panel -->
							</div><!-------------->
				</div><!-- row -->
                                
                             </div><!-- #end page-wrap -->

	<!--</div> <!-- #end content-container======= Cierre de los 2 divs comentados al inicio --> 

	<!--    </div> <!-- #end main-container -->
        
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
<?php
}