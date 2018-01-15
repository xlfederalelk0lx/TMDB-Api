<?php

/*
 * Project's Name: TMDB_Api
 * Description: Libreria para el manejo de la api TMDB
 * Programming Languages: PHP
 * Programmer: Jose Luis Coyotzi Ipatzi
 * File Created: 14/01/2018, 10:20:01 PM
 * File Name: Jobs.php
 * Email: jlci811122@gmail.com
 * 
 * Copyright @2018 xlFederalElk0lx.
 */

namespace TMDB\Traits;

/**
 * Description of Jobs
 *
 * @author ALEXI
 */
trait Jobs {

    /**
     * The the list of official jobs that are used on TMDb.
     *
     * @return object|\stdClass|json
     */
    public function GetJobs(){
        return $this->get("job/list");
    }
}
