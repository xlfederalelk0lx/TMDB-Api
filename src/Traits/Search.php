<?php

/*
 * Project's Name: TMDB_Api
 * Description: Libreria para el manejo de la api TMDB
 * Programming Languages: PHP
 * Programmer: Jose Luis Coyotzi Ipatzi
 * File Created: 15/01/2018, 12:42:19 AM
 * File Name: Search.php
 * Email: jlci811122@gmail.com
 * 
 * Copyright @2018 xlFederalElk0lx.
 */

namespace TMDB\Traits;

/**
 * Description of Search
 *
 * @author ALEXI
 */
trait Search {

    /**
     * @param string $query
     * Pass a text query to search. This value should be URI encoded.
     * minLength: 1
     * @param string $language
     * Pass a ISO 639-1 value to display translated data for the fields that support it.
     * minLength: 2
     * pattern: ([a-z]{2})-([A-Z]{2})
     * default: en-US
     * @param int $page
     *Specify which page to query.
     * minimum: 1
     * maximum: 1000
     * default: 1
     * @param bool $include_adult
     * Choose whether to inlcude adult (pornography) content in the results.
     * default: false
     * @param string $region
     * Specify a ISO 3166-1 code to filter release dates. Must be uppercase.
     * pattern: ^[A-Z]{2}$
     * @param int $year
     * @param int $primary_release_year
     *
     * @return object|\stdClass|json
     */
    public function SearchMovies($query="",$language="en-US",$page=1,$include_adult=false,$region="",$year="",$primary_release_year=""){
        return $this->_get("search/movie",[
            "query"=>$query,
            "language"=>$language,
            "page"=>$page,
            "include_adult"=>$include_adult,
            "region"=>$region,
            "year"=>$year,
            "primary_release_year"=>$primary_release_year
        ]);
    }

}
