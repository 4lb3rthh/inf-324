<?php include "cabecerai.php"; ?>
<?php include "menucuerpoi.php"; ?>
		Bienvenido FCPN
			<?php
				echo "Hola juanito<br/>";
				echo "Hola ". 'Juanito 2<br>';
				echo 'Hola '. "Juanito 2<br>";
				$var1 = 2.2;
				echo 'Hola'.$var1."<br/>";
				echo '<a href="./quimica/iiq/inicio.htm">--IIQ</a><br>';
			?>
			<h1>Tabla PHP</h1>
			<table border="1px">
			<?php 
				for ($i=1;$i<=10;$i++)
				{
					echo "<tr>";
					echo "<td>";
					echo "c".$i;
					echo "</td>";
					echo "<td>";
					echo "c".$i;
					echo "</td>";
					echo "</tr>";
				}
			?>
			</table>
<?php include "menucuerpof.php"; ?>
<?php include "cabeceraf.php"; ?>