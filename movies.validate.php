<?php

$xmlString = "";
foreach ( file("movies.xml") as $node ) {
	$xmlString .= trim($node);
}

$doc = new DOMDocument();
if (!$doc->loadXML($xmlString)) {
   die ("Errore mentre si andava parsando il documento\n");
}

/* 
Validazione del documento: validate() e' una funzione del domdocument che valida 
il documento rispetto alla DTD specificata nel documento stesso 
*/

if ($doc->validate()) {
   echo "<p>This document is valid</p>\n";
} else {
   echo "<p>This document is not valid</p>\n";
}

//////////////////////////////////////////////////////////////////////////////////



?>