<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require("conexion.php");

if(isset($_POST["submit"]))//con isset no necesito dos paginas para la consulta sino q redirige para llenar en la misma pagina
{
$tipousuario		= $_POST["tipousuario"];
$pass                   = $_POST["pass"];
$usuario		= $_POST["usuario"];
$carnet 		= $_POST["carnetalumno"];


$q="select * from usuarios where carnetalumno ='$carnet'";
$r=mysql_query($q,$conn) or die("Error: ".mysql_error());


if(mysql_num_rows($r) > 0){
    
    echo "<header>";
   echo "<script language='javascript'>"; 
    echo "alert('Error: El carnet ingresado ya esta registrado, por favor ingrese otro numero de carnet. Intentelo de Nuevo')"; 
    echo "</script>";  
    echo "</header>";
   echo "<body>";
    echo "<table ><tr><td>";
echo "<a title='Atras'  href='javascript: history.go(-1)'><img align=left  WIDTH=50% HEIGHT=40% src='../images/back.png' alt='Atras'/></a>";
echo "</td></tr><tr><td align=center style='padding-right: 100px; color:white;'>";
echo "<label >Volver</label></td></tr></table>";
echo "</a>";
echo "</body> ";
                
                exit();
                
               
}

else{

$inser = "insert into usuarios(idtipousuario, clave, usuario, carnetalumno)values('$tipousuario','$pass','$usuario','$carnet')";
//inserta la informacion de los alumnos en los campos de la tabla usuario


if(mysql_query($inser))
{
                  echo "<header>";
                 echo "<script language='javascript'>"; 
                echo "alert(':) Estudiante Registrado Exitosamente.')"; 
                echo "</script>";  
                echo "</header>";
                 
	exit;
}
else
{
	echo mysql_error();
}

//aqui termina la condicion de si presiono el boton de agregar el usuario
}

}
else
{
	
?>
<html>
    <head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Proyeccion Social Admin">
	<meta name="author" content="Giovany Rosales">
	<!-- <base href="/"> -->
	<title>Proyeccion Social Coordinador</title>
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
<script language="javascript"> 
function comprobarClave(){ 
   clave1 = document.form1.pass.value;
   	clave2 = document.form1.repass.value;

        if (clave1.length < 6 ){
                alert("Error: la clave debe contener por lo menos 6 caracteres!");
        document.form1.pass.focus();    
        return false;
        }
         re = /[A-Z]/;
      if(!re.test(clave1)) {
        alert("Error: la clave debe contener por lo menos una letra mayuscula (A-Z)!");
       document.form1.pass.focus();
        return false;
        
        }
        re = /[0-9]/;
      if(!re.test(clave1)) {
        alert("Error: la clave debe contener por lo menos un numero (0-9)!");
        document.form1.pass.focus();
        return false;
        
        }
        if (clave1 !== clave2) {
        alert(':( Las claves no coinciden por favor vuelva a ingresarlos')
      	return false;
    }
    else {
        
        return true;
    }

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
					<li>Usuarios</li>
					<li class="active"><a>Ingreso de Nuevo Estudiante</a></li>
				</ol>
				<div class="page-wrap">
					<!-- row -->
					<div class="row">						
                                                        <div class="col-sm-12 col-md-6">
							<div class="panel panel-default panel-hovered panel-stacked mb30">
								<div class="panel-heading">Asignar usuario a Estudiante</div>
                                                                <div class="panel-body" style="padding-right: 30%;">
                                                                    <br><br>
                                                                    <form role="form" name="form1" class="form-horizontal" method="post" action="IngresarEstudiante.php" onsubmit="return comprobarClave();"> <!-- form horizontal acts as a row -->
									
										<div class="form-group">
											<label class="col-md-3 control-label" for="tipousuario">Tipo de Usuario: </label>
                                                                                        <div class="col-md-9">
                                                                                            <span>
                                                                                               <select name="tipousuario" required="true" class="form-control">
                                                                                                   <option value="2">ESTUDIANTE</option>
                                                                                               </select>
                                                                                            </span> 
                                                                                        </div>
										</div>
                                                                                <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Carnet de Estudiante:</label>
                                                                                        <div class="col-md-9">
                                                                                            <input id="carnetalumno" name="carnetalumno" class="form-control" type="text"  maxlength="7"  title="Se necesita el Carnet del Estudiante. Ingrese un formato de carnet valido ej. RH08017"  required="true"  pattern="[a-zA-Z][a-zA-Z]+[0-9][0-9][0-9][0-9][0-9]"> 
                                                                                        </div>
                                                                                </div> 
                                                                                <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Asignar ID de Usuario:</label>
                                                                                        <div class="col-md-9">
                                                                                            <input id="usuario" name="usuario" class="form-control" type="text"  required="true"> 
                                                                                        </div>
                                                                                </div> 
                                                                                 <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Asignar una clave:</label>
                                                                                        <div class="col-md-9">
                                                                                            <input id="pass" name="pass" class="form-control" type="password" > 
                                                                                        </div>
                                                                                </div> 
                                                                                <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Repetir clave:</label>
                                                                                        <div class="col-md-9">
                                                                                            <input id="repass" name="repass" class="form-control" type="password" > 
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