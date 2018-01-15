<?php

/*
 * Project's Name: TMDB_Api
 * Description: Libreria para el manejo de la api TMDB
 * Programming Languages: PHP
 * Programmer: Jose Luis Coyotzi Ipatzi
 * File Created: 14/01/2018, 10:44:49 PM
 * File Name: Movies.php
 * Email: jlci811122@gmail.com
 * 
 * Copyright @2018 xlFederalElk0lx.
 */

namespace TMDB\Traits;

/**
 * Description of Movies
 *
 * @author ALEXI
 */
trait Movies {

    /**
     * Get the primary information about a movie.
     *
     * @param int $movie_id
     * Example: 550
     * @param string $language
     * Pass a ISO 639-1 value to display translated data for the fields that support it.
     * minLength: 2
     * pattern: ([a-z]{2})-([A-Z]{2})
     * default: en-US
     *
     * @return object|\stdClass|json
     */
    public function GetMovieDetails($movie_id=0,$language="en-US"){
        return $this->get("movie/".$movie_id,[
            "language"=>$language
        ]);
    }

    /**
     * Get all of the alternative titles for a movie.
     *
     * @param int $movie_id
     * Example: 550
     * @param string $country
     * if the country value is not passed, it will show all the results
     * Example= Es or FR or IT
     * @return object|\stdClass|json
     */
    public function GetMovieAlternativeTitles($movie_id=0,$country=""){
        return $this->get("movie/".$movie_id."/alternative_titles",[
            "country"=>$country
        ]);
    }

    /**
     * Get the changes for a movie. By default only the last 24 hours are returned.
     *
     * You can query up to 14 days in a single query by using the start_date and end_date query parameters.
     *
     * @param int $movie_id
     * Example: 550
     * @param string $start_date
     * Filter the results with a start date.
     * format: date
     * @param string $end_date
     * Filter the results with a end date.
     * format: date
     * @param int $page
     * Specify which page to query.
     *  minimum: 1.
     * maximum: 1000.
     * default: 1.
     * @return object|\stdClass|json
     */
    public function GetMovieChanges($movie_id=0,$start_date="",$end_date="",$page=1){
        return $this->get("movie/".$movie_id."/changes",[
            "start_date"=>$start_date,
            "end_date"=>$end_date,
            "page"=>$page
        ]);
    }

    /**
     * Get the cast for a movie.
     *
     * @param int $movie_id
     * Example: 550
     * @return object|\stdClass|json
     */
    public function GetMovieCast($movie_id=0){
        $response = $this->get("movie/".$movie_id."/credits");
        unset($response->response->crew);
        return $response;
    }

    /**
     * Get the crew for a movie.
     *
     * @param int $movie_id
     * Example: 550
     * @return object|\stdClass|json
     */
    public function GetMovieCrew($movie_id=0){
        $response = $this->get("movie/".$movie_id."/credits");
        unset($response->response->cast);
        return $response;
    }

    /**
     * Get the backdrops for a specific movie id.
     *
     * @param int $movie_id
     * Example: 550
     * @return object|\stdClass|json
     */
    public function GetMovieBackdrops($movie_id=0){
        $response = $this->get("movie/".$movie_id."/images");
        unset($response->response->posters);
        return $response;
    }

    /**
     * Get the posters for a specific movie id.
     *
     * @param int $movie_id
     * Example: 550
     * @param string $language
     * Pass a ISO 639-1 value to display translated data for the fields that support it.
     * *minLength: 2
     * pattern: ([a-z]{2})-([A-Z]{2})
     * Example: en or es or it
     * default: en
     * @return object|\stdClass|json
     */
    public function GetMoviePosters($movie_id=0,$language="es"){
        $response = $this->get("movie/".$movie_id."/images",[
            "include_image_language"=>$language
        ]);
        unset($response->response->backdrops);
        return $response;
    }

    /**
     * Get the keywords that have been added to a movie.
     *
     * @param int $movie_id
     * Example: 550
     * @return object|\stdClass|json
     */
    public function GetMovieKeywords($movie_id=0){
        return $this->get("movie/".$movie_id."/keywords");
    }

    /**
     * Get the release date along with the certification for a movie.
     *
     * Release dates support different types:
     *
     * Premiere, Theatrical (limited), Theatrical, Digital, Physical, TV
     *
     * @param int $movie_id
     * Example: 550
     * @return  object|\stdClass|json
     */
    public function GetMovieReleaseDates($movie_id=0){
        return $this->get("movie/".$movie_id."/release_dates");
    }

    /**
     * Get the videos that have been added to a movie.
     * 
     * @param int $movie_id
     * Example: 550
     * @param string $language
     * Pass a ISO 639-1 value to display translated data for the fields that support it.
     * minLength: 2
     * pattern: ([a-z]{2})-([A-Z]{2})
     * default: en-US
     *
     * @return object|\stdClass|json
     */
    public function GetMovieVideos($movie_id=0,$language="en-US"){
        return $this->get("movie/".$movie_id."/videos",[
            "language"=>$language
        ]);
    }
}
