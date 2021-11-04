<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>¡Bienvenido a la sección de cartelera!</h1>
			</div>

			<div class="articulo">
				<article>
					<h1>Películas en cartelera</h1>
					<br/>
					<form action="/action_page.php">
					<p>
 					<label for="peliculafav">Selecciona la película que deseas mirar:</label><br/>
  					<select name="peliculafav" id="peliculafav">
    				<option>Venom: Carnage liberado</option>
    				<option>Cuando el demonio llama</option>
    				<option>Espíritus oscuros</option>
    				<option>El misterio de Soho</option>
    				<option>Halloween Kills</option>
    				<option>Duna</option>
    				<option>Eternals</option>
					<option>Fuego en el Cielo</option>
  					</select></p>
					<br/>

					<p>
 					<label for="lugar">Selecciona el Cinépolis donde deseas mirarla:</label><br/>
  					<select name="lugar" id="lugar">
    				<option>Cinépolis Gran Patio Zaragoza</option>
    				<option>Cinépolis Juárez Centro Mall</option>
    				<option>Cinépolis La Monumental</option>
    				<option>Cinépolis Las Américas</option>
    				<option>Cinépolis Plaza Sendero Las Torres</option>
    				<option>Cinépolis Las Misiones</option>
    				<option>Cinépolis Pinocelli</option>
  					</select></p>
					  <br/>

					<p>
 					<label for="hora">Selecciona el horario:</label><br/>
  					<select name="hora" id="hora">
    				<option>13:40 p.m</option>
    				<option>14:20 p.m</option>
    				<option>15:00 p.m</option>
    				<option>15:50 p.m</option>
    				<option>16:30 p.m</option>
    				<option>17:20 p.m</option>
    				<option>18:10 p.m</option>
					<option>18:40 p.m</option>
					<option>19:30 p.m</option>
					<option>21:00 p.m</option>
					<option>21:40 p.m</option>
  					</select></p>	
					<br/>

					<p>
 					<label for="lugar">Selecciona los boletos:<br/>Puedes comprar 10 boletos máximo por transacción.</label><br/>
  					<select name="lugar" id="lugar">
					<option>1</option>
    				<option>2</option>
    				<option>3</option>
    				<option>4</option>
    				<option>5</option>
    				<option>6</option>
    				<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
  					</select></p><br/>

					<label for="num">Número de tarjeta:</label>
  					<input type="text" id="num" name="num"><br><br>
  					<label for="cvc">CVC:</label>
  					<input type="text" id="cvc" name="cvc"><br><br>
					<label for="exp">Fecha de expiración:</label>
  					<input style="width:50px; display:inlie-block" type="text" id="exp" name="exp">
					<input style="width:50px; display:inlie-block" type="text" id="exp" name="exp"><br><br>
					<br/>
					<a href="boletos.php"><input type="button" value="Submit"></a>
					</form>
					</a>
				</article>
			</div>
    <?php include('sidebar.php'); ?>
		</div>
	</section>
    <?php include('footer.php'); ?>
</body>
</html>