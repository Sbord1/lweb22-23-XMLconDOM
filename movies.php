<?php

    /* PHP script che genera un documento XML prendendo i dati da un database MySQL e che associa il documento XML ad una DTD specificata */

    # Name of the output file
    $xml_file_name = 'movies.xml';

    /////////////////////////////////////////////////////////////////////////

    /* Create an XML document with an attached DTD */

    # $doc = new DOMDocument('1.0', 'utf-8');

    // Creates an instance of the DOMImplementation class
    $imp = new DOMImplementation;

    // Creates a DOMDocumentType instance
    $dtd = $imp->createDocumentType('movies', '', 'movies.dtd');
    // <!DOCTYPE movies SYSTEM "movies.dtd">

    // Creates a DOMDocument instance
    $doc = $imp->createDocument("", "", $dtd);

    // Set other properties
    $doc->version = '1.0';
    $doc->encoding = 'UTF-8';

    /////////////////////////////////////////////////////////////////////////

    # Radice del documento XML (l'elemento 'movies' e' costituito da una sequenza di elementi chiamati 'film')
    $root = $doc->createElement('movies');

    /////////////////////////////////////////////////////////////////////////

    /* Connessione al db ed estrazione dei dati dalle tabelle*/

    require_once("./connection.php");

    $movie_tables_array = array($VOmovie_azione_table, $VOmovie_avventura_table, $VOmovie_fantascienza_table, 
                                $VOmovie_poliziesco_table, $VOmovie_storico_table, $VOmovie_thriller_table);

    # Eseguiamo una query su ogni tabella relativa alla categoria dei film
    for($i=0; $i<count($movie_tables_array); $i++) {

        $sqlQuery = "SELECT * FROM $movie_tables_array[$i]";

        # Esecuzione della query sul db
        # Il risultato e' un array php, contenente le righe della tabella che sono state selezionate
        $resultQ = mysqli_query($mysqliConnection, $sqlQuery);

        # Controllo della query
        if (!$resultQ) {
            printf("Oops! La query inviata non ha avuto successo!\n");
        exit();
        }

        $category = "";

        switch($movie_tables_array[$i]) {

            case "VOmovieAvventura":
                $category = "avventura";
                break;
    
            case "VOmovieAzione":
                $category = "azione";
                break;
    
            case "VOmovieFantascienza":
                $category = "fantascienza";
                break;
    
            case "VOmoviePoliziesco":
                $category = "poliziesco";
                break;
    
            case "VOmovieStorico":
                $category = "storico";
                break;
    
            case "VOmovieThriller":
                $category = "thriller";
                break;
        }

        # mysqli_fetch_array() estrae una riga dal risultato e restituisce un array associativo con i valori della riga selezionata
        while ($row = mysqli_fetch_array($resultQ)) {

            $filmId = $row['movieId'];
            $filmDname  = $row['directorName'];
            $filmDsurname  = $row['directorSurname'];
            $filmTitle  = $row['title'];
            $filmYear  = $row['year'];
            $filmQuantity  = $row['quantity'];
            $filmPrice  = $row['costoMovie'];
            $imgPath = $row['imgPath'];

            # Il DOM fornisce una interpretazione del documento XML come albero di oggetti

            $film = $doc->createElement('film');
            $film->setAttribute('category', $category);

            $id = $doc->createElement('id', $filmId);
            $film->appendChild($id);

            $director = $doc->createElement('director');
            $film->appendChild($director);

            $dName = $doc->createElement('name', $filmDname);
            $director->appendChild($dName);

            $dSurname = $doc->createElement('surname', $filmDsurname);
            $director->appendChild($dSurname);

            $title = $doc->createElement('title', $filmTitle);
            $film->appendChild($title);

            $year = $doc->createElement('year', $filmYear);
            $film->appendChild($year);

            $quantity = $doc->createElement('quantity', $filmQuantity);
            $film->appendChild($quantity);

            $price = $doc->createElement('price', $filmPrice);
            $film->appendChild($price);
            
            $imgPath = $doc->createElement('imgPath', $imgPath);
            $film->appendChild($imgPath);

            $root->appendChild($film);

        } // fine while

    } // fine for

    $doc->appendChild($root);

    # Salvataggio del file XML
    $doc->save($xml_file_name);
    echo "\"<a href=".$xml_file_name.">".$xml_file_name."</a>\" has been successfully created.";

?>