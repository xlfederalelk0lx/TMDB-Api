<?php

/*
 * Project's Name: TMDB_Api
 * Description: Libreria para el manejo de la api TMDB
 * Programming Languages: PHP
 * Programmer: Jose Luis Coyotzi Ipatzi
 * File Created: 14/01/2018, 06:03:29 PM
 * File Name: Changes.php
 * Email: jlci811122@gmail.com
 * 
 * Copyright @2018 xlFederalElk0lx.
 */

namespace TMDB\Traits;

/**
 * Description of Changes
 *
 * @author ALEXI
 */
trait Changes {
    
    /**
     * Get a list of all of the movie ids that have been changed in the past 24 hours.
     * 
     * You can query it for up to 14 days worth of changed IDs at a time with the start_date and end_date query parameters. 100 items are returned per page.
     * 
     * @param string $end_date
     * @param string $start_date
     * @param int $page
     * @return object|stdClass|json
     */
    public function GetMovieChangeList($end_date = '', $start_date = '', $page = 1){
        return $this->get("movie/changes",[
            "end_date" => $end_date,
            "start_date" => $start_date,
            "page" => $page
        ]);
    }

    /**
     * Get a list of all of the TV show ids that have been changed in the past 24 hours.
     *
     * You can query it for up to 14 days worth of changed IDs at a time with the start_date and end_date query parameters. 100 items are returned per page.
     *
     * @param string $end_date
     * @param string $start_date
     * @param int $page
     * @return object|stdClass|json
     */
    public function GetTVChangeList($end_date = '', $start_date = '', $page = 1){
        return $this->get("tv/changes",[
            "end_date" => $end_date,
            "start_date" => $start_date,
            "page" => $page
        ]);
    }

    /**
     * Get a list of all of the person ids that have been changed in the past 24 hours.
     *
     * You can query it for up to 14 days worth of changed IDs at a time with the start_date and end_date query parameters. 100 items are returned per page.
     *
     * @param string $end_date
     * @param string $start_date
     * @param int $page
     * @return object|stdClass|json
     */
    public function GetPersonChangeList($end_date = '', $start_date = '', $page = 1){
        return $this->get("person/changes",[
            "end_date" => $end_date,
            "start_date" => $start_date,
            "page" => $page
        ]);
    }
    
}
