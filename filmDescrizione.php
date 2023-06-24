<?php

	
	session_start();                // sempre prima di qualunque contenuto htmnl ...



// variabili per titolo e categoria del film
	$title=$_POST['title'];
	$dbCategoria=$_POST['dbCategoria'];
	$price=$_POST['price'];
	$year=$_POST['year'];
	$directorName=$_POST['directorName'];
	$directorSurname=$_POST['directorSurname'];
	$quantity=$_POST['quantity'];
	$imgPath=$_POST['imgPath'];

       

    //creo output table
    
    $output_table="<p style=\" position: absolute; font-size: 21px; color: white; margin-top:5%; left:30%\"> Gentile signore";
	$output_table.=",\n ecco alcune informazioni sul film da lei selezionato:\n <br /> <br />";
	$output_table.="$title è un film del $year diretto dal regista: $directorName\n$directorSurname.\n";
	$output_table.="<br />Costo: $price \n (&euro;)";
	$output_table.="<br />Ancora disponibili: $quantity </p>";
 	

	// mostra immagine film
	$output_table.="<table style=\" position: absolute; margin-right:auto\">\n <tr>\n";
	$output_table.="<td class=\"img\"><img src=\"$imgPath\" alt=\"$title\" height=\"450px\"/>\n </td>\n";
	$output_table.="</tr>\n";                 
	$output_table.="</table>\n";
 



?>

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>sessione con carrello della spesa: pagamento</title>
	</head>

	<body style= "background-color: #34495E" >

		<hr />

	
		<?php
			echo $output_table;
			
		?>
	<br /> <br />
	
	<p style="position: absolute; bottom:40%; left: 30%; font-size: 25px; color: white">
		 <a href="moviesPage.php" style="color:#FDEBD0">Home</a></p>

	</body>
</html>
