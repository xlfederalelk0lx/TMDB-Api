<?php

/*
 * Project's Name: TMDB_Api
 * Description: Libreria para el manejo de la api TMDB
 * Programming Languages: PHP
 * Programmer: Jose Luis Coyotzi Ipatzi
 * File Created: 14/01/2018, 06:14:55 PM
 * File Name: Companies.php
 * Email: jlci811122@gmail.com
 * 
 * Copyright @2018 xlFederalElk0lx.
 */

namespace TMDB\Traits;

/**
 * Description of Companies
 *
 * @author ALEXI
 */
trait Companies {

    /**
     * Get a companies details by id.
     *
     * @param int $id
     * Number id of company
     * @return object|\stdClass|json
     */
    public function GetCompanyDetails($id = 0) {
        return $this->get("company/".$id);
    }

    /**
     * Get the movies of a company by id.
     *
     * @param int $id
     * Number id of company
     * @param string $language
     * Pass a ISO 639-1 value to display translated data for the fields that support it. default: en-US
     * @return object|\stdClass|json
     */
    public function GetCompanyMovies($id=0,$language="en-US"){
        return $this->get("company/".$id."/movies",[
            "language"=>$language
        ]);
    }
}
