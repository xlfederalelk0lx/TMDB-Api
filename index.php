<?php
/**
 * Created by PhpStorm.
 * User: ALEXI
 * Date: 14/01/2018
 * Time: 03:53 PM
 */

require_once "libraries/autoload.php";

echo header('Content-Type: application/json');

$tmdb = new \TMDB\Tmdb("11ac02d919c368e330060a3b2e0bb315");

echo json_encode($tmdb->GetMovieDetails(268));