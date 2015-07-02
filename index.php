<?php include('dll/config.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $site_name; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<h1><?php echo $site_name; ?></h1>
	</header>
	<nav>
		<a href="../" title="">Home</a>
		<a href="/" title="">Formulario</a>
		<a href="inscritos.php" title="">Inscritos</a>
	</nav>
	<section id="contenedor">
		<h2>Formulario de Registro</h2>
		<form action="include/registrar.php" method="post" accept-charset="utf-8">
			<div class="row">
			  <div class="col-md-6">
					<div class="form-group">
					    <label for="inputnombres" class="col-sm-2 control-label">Nombres</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputnombres" placeholder="Nombres/First Name" name="nombres" required>
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputcedula" class="col-sm-2 control-label">Cédula/DNI</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputcedula" placeholder="Cédula/DNI" name="ceduladni" required>
					    </div>
					</div>

					<div class="span5 well">
					    <label for="id_cedula">PARTICIPACION/PARTICIPATION</label>
						<div class="form-group">
							<div class="form-inline">
								<div class="form-group">
								    <label for="exampleInputName2">Tandem</label>
								    <select class="form-control"  name="tandem">
									  <option>--</option>
									  <option>Si</option>
									  <option>No</option>
									</select>
								</div>
								<div class="form-group">
								    <label for="exampleInputEmail2">Accuracy</label>
								    <select class="form-control"  name="presicion">
									  <option>--</option>
									  <option>Si</option>
									  <option>No</option>
									</select>
								</div>
								<div class="form-group">
								    <label for="exampleInputEmail2">Cross</label>
								    <select class="form-control"  name="distancia">
									  <option>--</option>
									  <option>Si</option>
									  <option>No</option>
									</select>
								</div>
							</div>
						</div>
				 	</div>
					<div class="form-group">
					    <label for="inputemail" class="col-sm-2 control-label">Celular</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputemail" placeholder="Celular/Phone" name="celular" required>
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputemail" class="col-sm-2 control-label">Tipo de sangre</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputemail" placeholder="Tipo de sangre/Blood type" name="sangre" required>
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputemail" class="col-sm-2 control-label">Club Perteneciente</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputemail" placeholder="Club Perteneciente/Paraglider club"  name="club">
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputemail" class="col-sm-2 control-label">Parapente</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputemail" placeholder="Parapente/Paraglider" name="parapente" required>
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputemail" class="col-sm-2 control-label">Homologación / Approval</label>
					    <div class="col-sm-10">
					      <select class="form-control"  name="homologacion">
									  <option>--</option>
									  <option>A</option>
									  <option>B</option>
									  <option>C</option>
									  <option>D</option>
									</select>
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputemail" class="col-sm-2 control-label">Colores</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputemail" placeholder="Colores/Colors" name="colores" required>
					    </div>
					</div>
			  	
			  </div>
			  <div class="col-md-6">
					<div class="form-group">
					    <label for="inputapellidos" class="col-sm-2 control-label">Apellidos</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputapellidos" placeholder="Apellidos/Second Name" name="apellidos" required>
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputemail" class="col-sm-2 control-label">Email</label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email" required>
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputpais" class="col-sm-2 control-label">País/Country</label>
					    <div class="col-sm-10">
					      <select name="pais" id="inputpais"  class="form-control">
							<option value="" selected="selected">---------</option>
							<option >Afganistán</option>
							<option >Albania</option>
							<option >Alemania</option>
							<option >Algeria</option>
							<option >Andorra</option>
							<option >Angola</option>
							<option >Anguilla</option>
							<option >Antigua y Barbuda</option>
							<option >Antillas Holandesas</option>
							<option >Arabia Saudita</option>
							<option >Argentina</option>
							<option >Armenia</option>
							<option >Aruba</option>
							<option >Australia</option>
							<option >Austria</option>
							<option >Azerbaiyán</option>
							<option >Bahamas</option>
							<option >Bahrein</option>
							<option >Bangladesh</option>
							<option >Barbados</option>
							<option >Bélgica</option>
							<option >Belice</option>
							<option >Benín</option>
							<option >Bermudas</option>
							<option >Bielorrusia</option>
							<option >Bolivia</option>
							<option >Bosnia y Herzegovina</option>
							<option >Botsuana</option>
							<option >Brasil</option>
							<option >Brunéi</option>
							<option >Bulgaria</option>
							<option >Burkina Faso</option>
							<option >Burundi</option>
							<option >Bután</option>
							<option >Cabo Verde</option>
							<option >Camboya</option>
							<option >Camerún</option>
							<option >Canadá</option>
							<option >Chad</option>
							<option >Chile</option>
							<option >China</option>
							<option >Chipre</option>
							<option >Colombia</option>
							<option >Comores</option>
							<option >Congo (Brazzaville)</option>
							<option >Congo (Kinshasa)</option>
							<option >Cook, Islas</option>
							<option >Corea del Norte</option>
							<option >Corea del Sur</option>
							<option >Costa de Marfil</option>
							<option >Costa Rica</option>
							<option >Croacia</option>
							<option >Cuba</option>
							<option >Dinamarca</option>
							<option >Djibouti, Yibuti</option>
							<option >Ecuador</option>
							<option >Egipto</option>
							<option >El Salvador</option>
							<option >Emiratos árabes Unidos</option>
							<option >Eritrea</option>
							<option >Eslovaquia</option>
							<option >Eslovenia</option>
							<option >España</option>
							<option >Estados Unidos</option>
							<option >Estonia</option>
							<option >Etiopía</option>
							<option >Feroe, Islas</option>
							<option >Filipinas</option>
							<option >Finlandia</option>
							<option >Fiyi</option>
							<option >Francia</option>
							<option >Gabón</option>
							<option >Gambia</option>
							<option >Georgia</option>
							<option >Ghana</option>
							<option >Gibraltar</option>
							<option >Granada</option>
							<option >Grecia</option>
							<option >Groenlandia</option>
							<option >Guadalupe</option>
							<option >Guatemala</option>
							<option >Guernsey</option>
							<option >Guinea</option>
							<option >Guinea Ecuatorial</option>
							<option >Guinea-Bissau</option>
							<option >Guyana</option>
							<option >Haiti</option>
							<option >Honduras</option>
							<option >Hong Kong</option>
							<option >Hungría</option>
							<option >India</option>
							<option >Indonesia</option>
							<option >Irak</option>
							<option >Irán</option>
							<option >Irlanda</option>
							<option >Isla Pitcairn</option>
							<option >Islandia</option>
							<option >Islas Salomón</option>
							<option >Islas Turcas y Caicos</option>
							<option >Islas Virgenes Británicas</option>
							<option >Israel</option>
							<option >Italia</option>
							<option >Jamaica</option>
							<option >Japón</option>
							<option >Jersey</option>
							<option >Jordania</option>
							<option >Kazajstán</option>
							<option >Kenia</option>
							<option >Kirguistán</option>
							<option >Kiribati</option>
							<option >Kuwait</option>
							<option >Laos</option>
							<option >Lesotho</option>
							<option >Letonia</option>
							<option >Líbano</option>
							<option >Liberia</option>
							<option >Libia</option>
							<option >Liechtenstein</option>
							<option >Lituania</option>
							<option >Luxemburgo</option>
							<option >Macedonia</option>
							<option >Madagascar</option>
							<option >Malasia</option>
							<option >Malawi</option>
							<option >Maldivas</option>
							<option >Malí</option>
							<option >Malta</option>
							<option >Man, Isla de</option>
							<option >Marruecos</option>
							<option >Martinica</option>
							<option >Mauricio</option>
							<option >Mauritania</option>
							<option >México</option>
							<option >Moldavia</option>
							<option >Mónaco</option>
							<option >Mongolia</option>
							<option >Mozambique</option>
							<option >Myanmar</option>
							<option >Namibia</option>
							<option >Nauru</option>
							<option >Nepal</option>
							<option >Nicaragua</option>
							<option >Níger</option>
							<option >Nigeria</option>
							<option >Norfolk Island</option>
							<option >Noruega</option>
							<option >Nueva Caledonia</option>
							<option >Nueva Zelanda</option>
							<option >Omán</option>
							<option >Países Bajos, Holanda</option>
							<option >Pakistán</option>
							<option >Panamá</option>
							<option >Papúa-Nueva Guinea</option>
							<option >Paraguay</option>
							<option >Perú</option>
							<option >Polinesia Francesa</option>
							<option >Polonia</option>
							<option >Portugal</option>
							<option >Puerto Rico</option>
							<option >Qatar</option>
							<option >Reino Unido</option>
							<option >República Checa</option>
							<option >República Dominicana</option>
							<option >Reunión</option>
							<option >Ruanda</option>
							<option >Rumanía</option>
							<option >Rusia</option>
							<option >Sáhara Occidental</option>
							<option >Samoa</option>
							<option >San Cristobal y Nevis</option>
							<option >San Marino</option>
							<option >San Pedro y Miquelón</option>
							<option >San Tomé y Príncipe</option>
							<option >San Vincente y Granadinas</option>
							<option >Santa Elena</option>
							<option >Santa Lucía</option>
							<option >Senegal</option>
							<option >Serbia y Montenegro</option>
							<option >Seychelles</option>
							<option >Sierra Leona</option>
							<option >Singapur</option>
							<option >Siria</option>
							<option >Somalia</option>
							<option >Sri Lanka</option>
							<option >Sudáfrica</option>
							<option >Sudán</option>
							<option >Suecia</option>
							<option >Suiza</option>
							<option >Surinam</option>
							<option >Swazilandia</option>
							<option >Tadjikistan</option>
							<option >Tailandia</option>
							<option >Taiwan</option>
							<option >Tanzania</option>
							<option >Timor Oriental</option>
							<option >Togo</option>
							<option >Tokelau</option>
							<option >Tonga</option>
							<option >Trinidad y Tobago</option>
							<option >Túnez</option>
							<option >Turkmenistan</option>
							<option >Turquía</option>
							<option >Tuvalu</option>
							<option >Ucrania</option>
							<option >Uganda</option>
							<option >Uruguay</option>
							<option >Uzbekistán</option>
							<option >Vanuatu</option>
							<option >Venezuela</option>
							<option >Vietnam</option>
							<option >Wallis y Futuna</option>
							<option >Yemen</option>
							<option >Zambia</option>
							<option >Zimbabwe</option>
							</select>
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputemail" class="col-sm-2 control-label">Ciudad</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputemail" placeholder="Ciudad/City"  name="ciudad">
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputemail" class="col-sm-2 control-label">Dirección</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputemail" placeholder="Dirección/Address"  name="direccion">
					    </div>
					</div>
					<div class="form-group">
						<div class="form-inline">
							<div class="form-group">
							    <label for="exampleInputEmail2">Seguro médico</label>
							    <select class="form-control"  name="seguro">
								  <option>--</option>
								  <option>Si</option>
								  <option>No</option>
								</select>
							</div>
							<div class="form-group">
							    <label for="inputemail" class="col-sm-2 control-label">Alergia</label>
							    <div class="col-sm-10">
							      <textarea class="form-control" rows="3"  name="alergia" placeholder="Alergia algún medicamento/Allergy"></textarea>
							    </div>
							</div>
						</div>
					</div>
					<div class="span5 well">
					    <label for="id_cedula">EN CASO DE EMERGENCIA LLAMAR</label>
						<div class="form-group">
						    <label for="inputemail" class="col-sm-2 control-label">Teléfono 1</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputemail" placeholder="Teléfono de emergencia 1/Emergency number" name="telef1" required>
						    </div>
						</div>
						<div class="form-group">
						    <label for="inputemail" class="col-sm-2 control-label">Teléfono 2</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputemail" placeholder="Teléfono de emergencia 2/Emergency number" name="telef2">
						    </div>
						</div>
						<div class="form-group">
						    <label for="inputemail" class="col-sm-2 control-label">Teléfono 3</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputemail" placeholder="Teléfono de emergencia 3/Emergency number" name="telef3">
						    </div>
						</div>
				 	</div>
			  	
					<button type="submit" class="btn btn-primary">Guardar datos</button>
			  </div>
			</div>
			
			

		</form>
	</section>
	<hr>
	<footer id="pie">
		Desarrollado por: <a href="http://www.loxatec.com">Loxatec</a> 	
	</footer>
</body>
</html>