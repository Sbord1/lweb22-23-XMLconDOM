<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><title>Creazione e Popolamento VideotecaOnlinedb</title></head>

<body>
<h3>Creazione e Popolamento VideotecaOnlinedb</h3>

<?php			
error_reporting(E_ALL &~E_NOTICE);

 // dati sul database e le tabelle (magari messi in un file a parte ...)
 $db_name = "VideotecaOnlinedb";
 $VOmovie_avventura_table = "VOmovieAvventura";
 $VOmovie_azione_table = "VOmovieAzione";
 $VOmovie_fantascienza_table = "VOmovieFantascienza";
 $VOmovie_poliziesco_table = "VOmoviePoliziesco";
 $VOmovie_storico_table = "VOmovieStorico";
 $VOmovie_thriller_table = "VOmovieThriller";

///////////////////////////////////////////////////////////////////////////////
// effettuazione della connessione al database

$mysqliConnection = new mysqli("localhost", "riccardo", "password");

// controllo della connessione
if (mysqli_connect_errno()) {
    printf("Oops! Problemi con la connessione al db: %s\n", mysqli_connect_error());
    exit();
}
///////////////////////////////////////////////////////////////////////////////
// creazione del database

$queryCreazioneDatabase = "CREATE DATABASE IF NOT EXISTS $db_name";
// il risultato della query va in $resultQ
$resultQ = mysqli_query($mysqliConnection, $queryCreazioneDatabase);
if ($resultQ) {
    printf("Database %s creato!\n", $db_name);
}
else {
    printf("Whoops! Niente creazione del db!\n");
    exit();
}

// Adesso chiudiamo la connessione
$mysqliConnection->close();
///////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////
// e la riapriamo con il collegamento alla base di dati

/*
$mysqliConnection = new mysqli("localhost", "riccardo", "password", $db_name);

  // Controllo della connessione
  // mysqli_errno() and mysqli_error() restituiscono codici e messaggi relativi all'ultimo errore
  if (mysqli_connect_errno()) {
      printf("Errore! Problemi con la connessione al db: %s\n", mysqli_connect_error());
      exit();
  }
*/

require_once("./connection.php");


// Creazione tabella movie categoria Avventura
$sqlQuery = "CREATE TABLE if not exists $VOmovie_avventura_table (";
$sqlQuery.= "movieId int NOT NULL auto_increment, primary key (movieId), ";
$sqlQuery.= "directorName varchar(50) NOT NULL, ";
$sqlQuery.= "directorSurname varchar(50) NOT NULL, ";
$sqlQuery.= "title varchar (100) NOT NULL, ";
$sqlQuery.= "year int NOT NULL, " ;
$sqlQuery.= "quantity int NOT NULL, ";
$sqlQuery.= "costoMovie float, ";
$sqlQuery.= "imgPath varchar(150)";
$sqlQuery.= ");";

echo "<P>$sqlQuery</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sqlQuery))
    printf("Tabella Movie Avventura creata!\n");
else {
    printf("Whoops! Niente creazione Tabella Movie!\n");
  exit();
}

// Creazione tabella movie categoria Azione
$sqlQuery = "CREATE TABLE if not exists $VOmovie_azione_table (";
$sqlQuery.= "movieId int NOT NULL auto_increment, primary key (movieId), ";
$sqlQuery.= "directorName varchar(50) NOT NULL, ";
$sqlQuery.= "directorSurname varchar(50) NOT NULL, ";
$sqlQuery.= "title varchar (100) NOT NULL, ";
$sqlQuery.= "year int NOT NULL, ";
$sqlQuery.= "quantity int NOT NULL, ";
$sqlQuery.= "costoMovie float, ";
$sqlQuery.= "imgPath varchar(150)";
$sqlQuery.= ");";

echo "<P>$sqlQuery</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sqlQuery))
    printf("Tabella Movie Azione creata!\n");
else {
    printf("Whoops! Niente creazione Tabella Movie!\n");
  exit();
}

// Creazione tabella movie categoria Fantascienza
$sqlQuery = "CREATE TABLE if not exists $VOmovie_fantascienza_table (";
$sqlQuery.= "movieId int NOT NULL auto_increment, primary key (movieId), ";
$sqlQuery.= "directorName varchar(50) NOT NULL, ";
$sqlQuery.= "directorSurname varchar(50) NOT NULL, ";
$sqlQuery.= "title varchar (100) NOT NULL, ";
$sqlQuery.= "year int NOT NULL, ";
$sqlQuery.= "quantity int NOT NULL, ";
$sqlQuery.= "costoMovie float, ";
$sqlQuery.= "imgPath varchar(150)";
$sqlQuery.= ");";

echo "<P>$sqlQuery</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sqlQuery))
    printf("Tabella Movie Fantascienza creata!\n");
else {
    printf("Whoops! Niente creazione Tabella Movie!\n");
  exit();
}

// Creazione tabella movie categoria Poliziesco
$sqlQuery = "CREATE TABLE if not exists $VOmovie_poliziesco_table (";
$sqlQuery.= "movieId int NOT NULL auto_increment, primary key (movieId), ";
$sqlQuery.= "directorName varchar(50) NOT NULL, ";
$sqlQuery.= "directorSurname varchar(50) NOT NULL, ";
$sqlQuery.= "title varchar (100) NOT NULL, ";
$sqlQuery.= "year int NOT NULL, ";
$sqlQuery.= "quantity int NOT NULL, ";
$sqlQuery.= "costoMovie float, ";
$sqlQuery.= "imgPath varchar(150)";
$sqlQuery.= ");";

echo "<P>$sqlQuery</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sqlQuery))
    printf("Tabella Movie Poliziesco creata!\n");
else {
    printf("Whoops! Niente creazione Tabella Movie!\n");
  exit();
}

// Creazione tabella movie categoria Storico
$sqlQuery = "CREATE TABLE if not exists $VOmovie_storico_table (";
$sqlQuery.= "movieId int NOT NULL auto_increment, primary key (movieId), ";
$sqlQuery.= "directorName varchar(50) NOT NULL, ";
$sqlQuery.= "directorSurname varchar(50) NOT NULL, ";
$sqlQuery.= "title varchar (100) NOT NULL, ";
$sqlQuery.= "year int NOT NULL, ";
$sqlQuery.= "quantity int NOT NULL, ";
$sqlQuery.= "costoMovie float, ";
$sqlQuery.= "imgPath varchar(150)";
$sqlQuery.= ");";

echo "<P>$sqlQuery</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sqlQuery))
    printf("Tabella Movie Storico creata!\n");
else {
    printf("Whoops! Niente creazione Tabella Movie!\n");
  exit();
}

// Creazione tabella movie categoria Thriller
$sqlQuery = "CREATE TABLE if not exists $VOmovie_thriller_table (";
$sqlQuery.= "movieId int NOT NULL auto_increment, primary key (movieId), ";
$sqlQuery.= "directorName varchar(50) NOT NULL, ";
$sqlQuery.= "directorSurname varchar(50) NOT NULL, ";
$sqlQuery.= "title varchar (100) NOT NULL, ";
$sqlQuery.= "year int NOT NULL, ";
$sqlQuery.= "quantity int NOT NULL, ";
$sqlQuery.= "costoMovie float, ";
$sqlQuery.= "imgPath varchar(150)";
$sqlQuery.= ");";

echo "<P>$sqlQuery</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sqlQuery))
    printf("Tabella Movie Thriller creata!\n");
else {
    printf("Whoops! Niente creazione Tabella Movie!\n");
  exit();
}


///////////////////////////////////////////////////////////////////////////////

// popolamento Tabella VOmovieAvventura (NB tre campi: movieId gestito automaticamente)

// Inserimento movie
$sql = "INSERT INTO $VOmovie_avventura_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Alejandro\", \"Inarritu\", \"Revenant\", \"2016\", \"3\", \"120\", \"locandine/avventura/revenant.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_avventura_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Joe\", \"Johnston\", \"Jumanji\", \"1995\", \"5\", '130.00', \"locandine/avventura/jumanji.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_avventura_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"James\", \"Cameron\", \"Avatar\", \"2009\", \"2\", '90.00', \"locandine/avventura/avatar.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate STMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_avventura_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Colin\", \"Trevorrow\", \"Jurassic World\", \"2015\", \"6\", '100.00', \"locandine/avventura/jurassic world.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate STMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_avventura_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Baltasar\", \"Kormakur\", \"Everest\", \"2015\", \"1\", '80.00', \"locandine/avventura/everest.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate STMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_avventura_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Ruben\", \"Fleischer\", \"Uncharted\", \"2022\", \"5\", \"125.00\", \"locandine/avventura/uncharted.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate STMovie table.\n");
  exit();
}


///////////////////////////////////////////////////////////////////////////////
// popolamento Tabella VOmovieAzione (NB tre campi: movieId gestito automaticamente)

// Inserimento movie
$sql = "INSERT INTO $VOmovie_azione_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Christopher\", \"McQuarrie\", \"Mission Impossible\", \"2018\", \"9\", \"120\", \"locandine/azione/MissionImpossible.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_azione_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Quentin\", \"Tarantino\", \"KillBill\", \"2003\", \"6\", \"120\", \"locandine/azione/KillBill.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_azione_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Chad\", \"Stahelski\", \"John Wick\", \"2014\", \"1\", \"120\", \"locandine/azione/JohnWick.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_azione_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Park\", \"Chan-wook\", \"Old Boy\", \"2005\", \"2\", \"120\", \"locandine/azione/OldBoy.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_azione_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Olivier\", \"Megaton\", \"Taken\", \"2014\", \"10\", \"120\", \"locandine/azione/Taken.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_azione_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Brett\", \"Bratner\", \"Tower Heist\", \"2011\", \"2\", \"120\", \"locandine/azione/TowerHeist.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_azione_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Quentin\", \"Tarantino\", \"Bastardi Senza Gloria\", \"2009\", \"1\", \"150\", \"locandine/azione/BastardiSenzaGloria.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_azione_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Joe\", \"Carnahan\", \"A-Team\", \"2010\", \"8\", \"120\", \"locandine/azione/ATeam.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

///////////////////////////////////////////////////////////////////////////////
// popolamento Tabella VOmovieFantascienza (NB tre campi: movieId gestito automaticamente)

// Inserimento movie
$sql = "INSERT INTO $VOmovie_fantascienza_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Denis\", \"Villeneuve\", \"Dune\", \"2021\", \"9\", \"120\", \"locandine/fantascienza/Dune.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_fantascienza_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"George\", \"Lucas\", \"Star Wars\", \"1999\", \"5\", \"120\", \"locandine/fantascienza/starwars.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_fantascienza_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"David\", \"Yates\", \"Harry Potter\", \"2011\", \"3\", \"120\", \"locandine/fantascienza/HarryPotter.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_fantascienza_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Tim\", \"Burton\", \"La fabbrica di cioccolato\", \"2005\", \"8\", \"120\", \"locandine/fantascienza/LaFabbricadiCioccolato.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_fantascienza_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Chris\", \"Buck\", \"Frozen\", \"2013\", \"4\", \"120\", \"locandine/fantascienza/frozen.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_fantascienza_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Peter\", \"Jackson\", \"Lo Hobbit\", \"2012\", \"4\", \"120\", \"locandine/fantascienza/Hobbit.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_fantascienza_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Anthony\", \"Russo\", \"Avengers\", \"2019\", \"7\", \"120\", \"locandine/fantascienza/Avengers.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_fantascienza_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Dennis\", \"Villeneuve\", \"Blade runner\", \"2017\", \"12\", \"120\", \"locandine/fantascienza/bladerunner.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_fantascienza_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Alex\", \"Proyas\", \"Segnali dal futuro\", \"2009\", \"2\", \"120\", \"locandine/fantascienza/segnalifuturo.jpeg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}


///////////////////////////////////////////////////////////////////////////////
// popolamento Tabella VOmoviePoliziesco (NB tre campi: movieId gestito automaticamente)

// Inserimento movie
$sql = "INSERT INTO $VOmovie_poliziesco_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Martin\", \"Scorsese\", \"The Departed\", \"2006\", \"4\", \"120\", \"locandine/poliziesco/thedeparted.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_poliziesco_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Brian\", \"Helgeland\", \"Legend\", \"2015\", \"7\", \"120\", \"locandine/poliziesco/legend.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_poliziesco_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Guy\", \"Ritchie\", \"Sherlock Holmes\", \"2009\", \"2\", \"120\", \"locandine/poliziesco/sherlockholmes.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_poliziesco_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Doug\", \"Liman\", \"Barry Seal\", \"2017\", \"3\", \"120\", \"locandine/poliziesco/barryseal.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_poliziesco_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Antonio\", \"Manetti\", \"Diabolik\", \"2022\", \"1\", \"120\", \"locandine/poliziesco/diabolik.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_poliziesco_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Ben\", \"Affleck\", \"Gone Baby Gone\", \"2007\", \"5\", \"120\", \"locandine/poliziesco/gonebabygone.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_poliziesco_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Marco\", \"Bellocchio\", \"Il traditore\", \"2019\", \"14\", \"120\", \"locandine/poliziesco/iltraditore.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_poliziesco_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Spike\", \"Lee\", \"Inside Man\", \"2006\", \"2\", \"120\", \"locandine/poliziesco/insideman.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_poliziesco_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Antoine\", \"Fuqua\", \"Training day\", \"2001\", \"5\", \"120\", \"locandine/poliziesco/trainingday.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

///////////////////////////////////////////////////////////////////////////////
// popolamento Tabella VOmovieStorico (NB tre campi: movieId gestito automaticamente)

// Inserimento movie
$sql = "INSERT INTO $VOmovie_storico_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Christopher\", \"Nolan\", \"Dunkirk\", \"2017\", \"11\", \"120\", \"locandine/storico/dunkirk.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_storico_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Alfonso\", \"Gomez-Rejon\", \"Edison\", \"2017\", \"9\", \"120\", \"locandine/storico/edison.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_storico_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Ridley\", \"Scott\", \"Il Gladiatore\", \"2000\", \"12\", \"120\", \"locandine/storico/ilgladiatore.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_storico_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Matteo\", \"Rovere\", \"Il primo Re\", \"2019\", \"7\", \"120\", \"locandine/storico/ilprimore.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_storico_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Aaron\", \"Sorkin\", \"Il Processo ai Chicago 7\", \"2020\", \"4\", \"120\", \"locandine/storico/ilprocessoai7.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_storico_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Maximiliano\", \"Bruno\", \"Red Land\", \"2018\", \"15\", \"120\", \"locandine/storico/redland.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_storico_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Ava\", \"DuVernay\", \"Selma\", \"2014\", \"1\", \"120\", \"locandine/storico/selma.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_storico_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Paul\", \"Williams\", \"The Eichmann Show\", \"2015\", \"3\", \"120\", \"locandine/storico/theeichmannshow.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_storico_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Mortem\", \"Tyldum\", \"The Imitation Game\", \"2014\", \"11\", \"120\", \"locandine/storico/theimitationgame.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

///////////////////////////////////////////////////////////////////////////////
// popolamento Tabella VOmovieThriller (NB tre campi: movieId gestito automaticamente)

// Inserimento movie
$sql = "INSERT INTO $VOmovie_thriller_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Michael\", \"Mann\", \"Collateral\", \"2004\", \"6\", \"120\", \"locandine/thriller/collateral.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_thriller_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Antonio\", \"Campos\", \"Le Strade del Male\", \"2020\", \"5\", \"120\", \"locandine/thriller/lestradedelmale.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_thriller_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Joel\", \"Coen\", \"Non e' un paese per vecchi\", \"2007\", \"8\", \"120\", \"locandine/thriller/noneunpaesepervecchi.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_thriller_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Jordan\", \"Peele\", \"Scappa-GetOut\", \"2017\", \"3\", \"120\", \"locandine/thriller/scappa-getout.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_thriller_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Brian\", \"De Palma\", \"Scarface\", \"1983\", \"2\", \"120\", \"locandine/thriller/scarface.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_thriller_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Martin\", \"Scorsese\", \"Shutter Island\", \"2010\", \"10\", \"120\", \"locandine/thriller/shutterisland.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_thriller_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Night\", \"Shyamalan\", \"Split\", \"2016\", \"10\", \"120\", \"locandine/thriller/split.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_thriller_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Martin\", \"Scorsese\", \"Shutter Island\", \"2010\", \"10\", \"120\", \"locandine/thriller/shutterisland.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_thriller_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"Quentin\", \"Tarantino\", \"The Hateful Eight\", \"2015\", \"1\", \"120\", \"locandine/thriller/thehatefuleight.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

// Inserimento movie
$sql = "INSERT INTO $VOmovie_thriller_table
	(directorName, directorSurname, title, year, quantity, costoMovie, imgPath)
	VALUES
	(\"David\", \"Fincher\", \"Zodiac\", \"2007\", \"10\", \"120\", \"locandine/thriller/zodiac.jpg\")
	";
echo "<P>$sql</P>";

if ($resultQ = mysqli_query($mysqliConnection, $sql))
    printf("Movie inserito con successo!\n");
else {
    printf("Whoops! Couldn't populate VOMovie table.\n");
  exit();
}

/////////////////////////////////////////////////////////////////////

// altro modo di chiudere la connessione al db
mysqli_close($mysqliConnection);


?>

</body>
</html>
