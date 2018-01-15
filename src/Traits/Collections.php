<?php

/*
 * Project's Name: TMDB_Api
 * Description: Libreria para el manejo de la api TMDB
 * Programming Languages: PHP
 * Programmer: Jose Luis Coyotzi Ipatzi
 * File Created: 14/01/2018, 06:09:21 PM
 * File Name: Collections.php
 * Email: jlci811122@gmail.com
 * 
 * Copyright @2018 xlFederalElk0lx.
 */

namespace TMDB\Traits;

/**
 * Description of Collections
 *
 * @author ALEXI
 */
trait Collections {

    /**
     * Get collection details by id, if there are no values ​​for the request made, return the error "The resource you requested could not be found".
     *
     * @param int $id
     * @param string $language
     * @return object|stdClass|json
     */
    public function GetCollectionDetails($id = 0,$language = "en-US"){
        return $this->get("collection/".$id,[
            "language" => $language
        ]);
    }

    /**
     * Get the images for a collection by id, if there are no values ​​for the request made, return the error "The resource you requested could not be found".
     *
     * @param int $id
     * @param string $language
     * @return object|stdClass|json
     */
    public function GetCollectionImages($id = 0,$language = "en-US"){
        return $this->get("collection/".$id."}/images",[
            "language" => $language
        ]);
    }
    
}
