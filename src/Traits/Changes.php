<?php
/**
 * Created by PhpStorm.
 * User: ALEXI
 * Date: 14/01/2018
 * Time: 05:28 PM
 */

namespace TMDB\Traits;


trait Changes
{

    public function GetMovieChangeList($end_date = '', $start_date = '', $page = 1){
        return $this->get("movie/changes",[
            "end_date" => $end_date,
            "start_date" => $start_date,
            "page" => $page
        ]);
    }

    public function GetTVChangeList($end_date = '', $start_date = '', $page = 1){
        return $this->get("tv/changes",[
            "end_date" => $end_date,
            "start_date" => $start_date,
            "page" => $page
        ]);
    }

    public function GetPersonChangeList(){
        return $this->get("person/changes",[
            "end_date" => $end_date,
            "start_date" => $start_date,
            "page" => $page
        ]);
    }

}