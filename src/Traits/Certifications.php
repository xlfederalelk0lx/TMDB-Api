<?php
/**
 * Created by PhpStorm.
 * User: ALEXI
 * Date: 14/01/2018
 * Time: 05:23 PM
 */

namespace TMDB\Traits;


trait Certifications
{

    public function GetMovieCertifications(){
        return $this->get("certification/movie/list");
    }

    public function GetTVCertifications(){
        return $this->get("certification/tv/list");
    }

}