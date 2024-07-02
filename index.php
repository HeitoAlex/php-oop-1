<?php 
require_once __DIR__ . '/classes/movie.php';

$movie1 = new Movie('https://m.media-amazon.com/images/I/71c05lTE03L._AC_UF894,1000_QL80_.jpg', 'Pulp Fiction', 'Quattro storie di violenza s\'intersecano in una struttura apparentemente circolare che va avanti e indietro nel tempo.');
$movie1 -> setContent(18);
$contentMovie1 = $movie1 -> getContent();

$movie2 = new Movie('https://pad.mymovies.it/filmclub/2006/12/171/locandinapg1.jpg', 'Hook - Capitan uncino', 'Un film di Walt Disney, ma fatto con persone vere e non cartoni animati. Ecco una possibile descrizione della pellicola di Spielberg ispirata a Peter Pan.');
$movie2 -> setContent(10);
$contentMovie2 = $movie2 -> getContent();

var_dump ($movie1, $movie2);

?>