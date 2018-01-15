<?php

/*
 * Project's Name: TMDB_Api
 * Description: Libreria para el manejo de la api TMDB
 * Programming Languages: PHP
 * Programmer: Jose Luis Coyotzi Ipatzi
 * File Created: 14/01/2018, 08:30:14 PM
 * File Name: Credits.php
 * Email: jlci811122@gmail.com
 * 
 * Copyright @2018 xlFederalElk0lx.
 */

namespace TMDB\Traits;

/**
 * Description of Credits
 *
 * @author ALEXI
 */
trait Credits {

    /**
     * Get a movie or TV credit details by id.
     *
     * @param string $id
     * Movie id or Show TV id credit
     * @return object|\stdClass|json
     */
    public function GetCreditDetails($id=""){
        return $this->get("credit/".$id);
    }
}
