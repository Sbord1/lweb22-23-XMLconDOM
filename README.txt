Terzo Homework: XML con DOM
---------------------------------------------------
Componenti del gruppo:
- Francesco Sbordone
- Riccardo Tuzzolino
---------------------------------------------------
Indirizzo delle repository su Github:
https://github.com/sbord1/lweb22-23-XMLconDOM.git (Sbordone Francesco)
https://github.com/tuzzo18/lweb22-23-XMLconDOM.git (Tuzzolino Riccardo)
------------------------------------------------------------------------------------------------------------------------------------------
Funzionamento dell'applicazione

L'applicazione php che gestisce una base di dati è stata realizzata prendendo ispirazione dagli esercizi "temperature.2.php"

------------------------------------------------------------------------------------------------------------------------------------------
Tecniche impiegate

- Definizione di una DTD e di uno Schema per un documento XML

- Associazione di un documento XML ad una DTD / ad uno Schema

- Produzione di un documento XML tramite accesso ai dati in un database My SQL e creazione del documento tramite le funzionalità DOM per XML, disponibili in PHP.

- Presentazione di un documento XML tramite lettura dei dati in esso presenti attraverso le funzionalità DOM

- Verifica della correttezza della forma (well-formed) e della validità del documento XML sia relativamente alla DTD che allo schema tramite l'applicazione XML Copy Editor.

------------------------------------------------------------------------------------------------------------------------------------------
Spiegazione file e directory

- Cartella "locandine": contiene le varie locandine dei film suddivise per categoria

- Cartella "movies-with-schema": presenta due file: "movies.xsd" e "movies.xml" (per la descrizione vedi dopo)

- "install.php": script che crea il database ed effettua gli inserimenti
N.B. Il file "connection.php" non è incluso perchè il database ancora non è stato creato

- "connection.php": script che effettua la connessione al database (è incluso nei vari script che si collegano al database)

- "movies.php": script che si collega al database e crea un file xml chiamato "movies.xml"

- "movies.xml": generato automaticamente dallo script precedente, presenta la struttura utilizzata e referenzia un file chiamato "movies.dtd" 

- "movies.validate.php": script che controlla la validità del file xml

- "movies.dtd": presenta la grammatica rispettata dal file "movies.xml"

- "moviesPage.php": legge il file xml e stampa in tabelle le locandine dei film di una stessa categoria.
                    Si accede alla prossima categoria di film tramite un link a fine pagina. Quando si clicca su una locandina si avvia lo script "filmDescrizione.php".

- "filmDescrizione.php": script che stampa locandina del film cliccato e stampa alcune informazioni relative alla pellicola: prezzo, anno, titolo, regista e quantità di film disponibili.

- "movies.xsd": file xsd che presenta lo schema definition, è stato creato per esercizio ma non viene effettivamente usato.
