<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE movies SYSTEM "movies.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 
	<head>
		<title> Movies </title>
		<style>
  		 td.img {
					border: 2px solid black;}
		.tablecenter{
					padding: 10px;
					border-spacing: 10px 0;
					margin-right: auto;
					margin-left: auto;}
		</style>
	</head>

	<body style= "background-color: #34495E" >
	
	<?php
		if (isset($_GET['next']) ){
			$filmCategoryInit = $_GET['next'];
			echo "<h1 style=\" text-align: center; color: #FDEBD0; margin-top: 20px \"> $filmCategoryInit </h1>";
			}
		else
			echo "<h1 style=\" text-align: center; color: #FDEBD0; margin-top: 20px \"> azione </h1>"; //mi trovo nella prima pagina che corrisponde alla categoria azione
	?>
		
    <table class="tablecenter">
    	<tbody>
<?php 

$turnPage = False; // se cambia categoria del film => $turnPage=True e smette di printare



$xmlString = "";
foreach ( file("movies.xml") as $node ) {
	$xmlString .= trim($node);
}

    $doc = new DOMdocument();
  	$doc->loadXML($xmlString);
    
    if (!$doc->loadXML($xmlString)) {
  		die ("Error mentre si andava parsando il documento\n");
}

    
    $movies = $doc-> documentElement-> childNodes;
    $lunghezza = $movies->length;
   	
   	// se questa pagina e' stata chiamata con "next=qualchecosa" nella
	// uri di chiamata, vuol dire che avevamo gia' stampato qualcosa e riprendiamo da lì;


   	if ( isset($_GET['next']) ) { 
		$filmCategoryInit = $_GET['next']; //prendo la categoria del film
		$i = $_GET['index']; //prendo l'index del film da stampare
} 	else {
		$filmCategoryInit = "azione"; //mi trovo nella prima pagina che corrisponde alla categoria azione
		$i=0;
} 
	

	$elenco = "";
	$counter = 0;

	//ciclo per ottenere info su tutti i film di una stessa categoria
    while ($turnPage==False) {
	
		$film = $movies->item($i); //è uno dei record
		$filmCategory = $film->getAttribute("category");
	
	
		$id = $film->firstChild; //id primo child
		$idNumber = $id->textContent;
	
		$director = $id->nextSibling;  //director secondo child
		$name= $director->firstChild;
		$nameValue = $name ->textContent;
		$surname = $director->lastChild;
		$surnameValue = $surname->textContent;
	
		$title = $director->nextSibling; //title terzo child
		$titleName = $title->textContent;
	
		$year = $title->nextSibling; //year quarto child
		$yearNumber = $year->textContent;
	
		$quantity = $year->nextSibling; //quantity quinto child
		$quantityNumber = $quantity->textContent;
	
		$price = $quantity->nextSibling; //price sesto figlio
		$priceNumber = $price->textContent;
	
		$imgPath = $film->lastChild; //price sesto figlio
		$imgPathValue = $imgPath->textContent;
	
		
		
		if ($filmCategory == $filmCategoryInit){	//stampo film 
			$elenco.="<form action=\"./filmDescrizione.php\" method=\"post\">\n";
			$elenco.="<td class=\"img\">\n  <input type=\"image\" src=\"$imgPathValue\" name=\"selection\" value=\"$titleName\" height=\"450px\"/>\n";
		
		// costruzione hidden field che ci servira' nella zona filmDescrizione per ottenere le informazioni relative al film
			$elenco.="<input type=\"hidden\" name=\"title\" value=\"$titleName\">\n";
			$elenco.="<input type=\"hidden\" name=\"dbCategoria\" value=\"$filmCategory\">\n";
			$elenco.="<input type=\"hidden\" name=\"price\" value=\"$priceNumber\">\n";
			$elenco.="<input type=\"hidden\" name=\"directorName\" value=\"$nameValue\"> \n";
			$elenco.="<input type=\"hidden\" name=\"directorSurname\" value=\"$surnameValue\">\n";
			$elenco.="<input type=\"hidden\" name=\"quantity\" value=\"$quantityNumber\">\n";
			$elenco.="<input type=\"hidden\" name=\"imgPath\" value=\"$imgPathValue\">\n";
			$elenco.="<input type=\"hidden\" name=\"year\" value=\"$yearNumber\"> </td> \n </form>\n";
			$counter++;
	
			if ($counter>=3){ //quando ci sono 3 film per riga, vai alla riga successiva
				$elenco.="</tr>\n <tr>\n";
				$counter=0;
			}
			$i++; // index per il prossimo film
		}//fine if
		
		else { // appena cambia categoria smette di printare
			$turnPage=True;
			break;
		}
		
		//serve per capire quando fermarsi altrimenti nell'ultima pagina l'if di riga 92 è sempre valido e $turnPage mai =True
		if ($i>$lunghezza-1){ 
			break;}

	}//fine while
	

	echo "$elenco";
	echo "</tbody>\n</table>";
    	
?> 	
    	
    <?php
// quando finisce di stampare film di una categoria stampa un link per andare alla categoria successiva
// il link della prossima pagina sarà del tip PHP_SELF?next=$filmCategory&index=$i
// dove $filmCategory sarà la categoria dei film da stampare e $i è l'indice da cui iniziare a stampare
// otteniamo queste informazioni con $_GET (vedi riga 50)

if ( $filmCategoryInit != "thriller" ) {
     echo "<p style=\"font-size:22px\"><a href=\"moviesPage.php?next="
     . $filmCategory
     . "&index="
     .$i
     . "\"style=\"color:#FDEBD0\">Prossima categoria di film &gt;</a></p>";
} else {
	print "<p style=\"position: absolute; font-size: 21px; color: white\">Fine</p>";
}
?>
    	
    
	</body>
</html>
