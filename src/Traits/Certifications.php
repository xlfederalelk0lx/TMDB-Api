<?php

/*
 * Project's Name: TMDB_Api
 * Description: Libreria para el manejo de la api TMDB
 * Programming Languages: PHP
 * Programmer: Jose Luis Coyotzi Ipatzi
 * File Created: 14/01/2018, 05:58:13 PM
 * File Name: Certifications.php
 * Email: jlci811122@gmail.com
 * 
 * Copyright @2018 xlFederalElk0lx.
 */

namespace TMDB\Traits;

/**
 * Description of Certifications
 *
 * @author ALEXI
 */
trait Certifications {
    
    /**
     * Get an up to date list of the officially supported movie certifications on TMDb.
     * 
     * @return object|stdClass|json
     */
    public function GetMovieCertifications(){
        return $this->get("certification/movie/list");
    }
    
    /**
     * Get an up to date list of the officially supported TV show certifications on TMDb.
     * 
     * @return object|stdClass|json
     */
    public function GetTVCertifications(){
        return $this->get("certification/tv/list");
    }
    
}
