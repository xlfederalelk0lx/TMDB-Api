<?php
/**
 * Created by PhpStorm.
 * User: ALEXI
 * Date: 14/01/2018
 * Time: 03:53 PM
 */

require_once "libraries/autoload.php";

$tmdb = new TMDB\Tmdb("11ac02d919c368e330060a3b2e0bb315");

echo header('Content-Type: application/json');

echo json_encode($tmdb->GetMovieDetails(346364));