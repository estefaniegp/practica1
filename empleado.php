<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>¡Bienvenido a la sección de empleados!</h1>
			</div>

			<div class="articulo">
				<article>
					<p>
					<h1>Registro de empleados</h1><br>
					<label for="nombre">Nombre(s):</label>
  					<input type="text" id="nombre" name="nombre"><br><br>
  					<label for="apellidos">Apellidos:</label>
  					<input type="text" id="apellidos" name="apellidos"><br><br>
					<label for="rfc">RFC:</label>
  					<input type="text" id="rfc" name="rfc"><br><br>
					<label for="lugar">Cinépolis donde trabaja:</label><br/>
  					<select name="lugar" id="lugar">
    				<option>Cinépolis Gran Patio Zaragoza</option>
    				<option>Cinépolis Juárez Centro Mall</option>
    				<option>Cinépolis La Monumental</option>
    				<option>Cinépolis Las Américas</option>
    				<option>Cinépolis Plaza Sendero Las Torres</option>
    				<option>Cinépolis Las Misiones</option>
    				<option>Cinépolis Pinocelli</option>
					</select>
					</p>
					<br/>
					<a href="registro.php"><input type="button" value="Submit"></a>
				</article>
				<br/><br/><br/><br/><br/><br/><br/>
			</div>
    <?php include('sidebar.php'); ?>
		</div>
	</section>
    <?php include('footer.php'); ?>
</body>
</html>