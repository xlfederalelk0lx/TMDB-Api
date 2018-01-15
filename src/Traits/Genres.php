<?php

/*
 * Project's Name: TMDB_Api
 * Description: Libreria para el manejo de la api TMDB
 * Programming Languages: PHP
 * Programmer: Jose Luis Coyotzi Ipatzi
 * File Created: 14/01/2018, 10:09:51 PM
 * File Name: Genres.php
 * Email: jlci811122@gmail.com
 * 
 * Copyright @2018 xlFederalElk0lx.
 */

namespace TMDB\Traits;

/**
 * Description of Genres
 *
 * @author ALEXI
 */
trait Genres {

    /**
     * Get the list of official genres for movies.
     *
     * @param string $language
     * Pass a ISO 639-1 value to display translated data for the fields that support it.
     * minLength: 2
     * pattern: ([a-z]{2})-([A-Z]{2})
     * default: en-US
     *
     * @return object|\stdClass|json
     */
    public function GetGenresMovieList($language="en-US"){
        return $this->_get("genre/movie/list",[
            "language"=>$language
        ]);
    }

    /**
     * Get the list of official genres for TV shows.
     *
     * @param string $language
     * Pass a ISO 639-1 value to display translated data for the fields that support it.
     * minLength: 2
     * pattern: ([a-z]{2})-([A-Z]{2})
     * default: en-US
     *
     * @return object|\stdClass|json
     */
    public function GetGenresTVList($language="en-US"){
        return $this->_get("genre/tv/list",[
            "language"=>$language
        ]);
    }
}
