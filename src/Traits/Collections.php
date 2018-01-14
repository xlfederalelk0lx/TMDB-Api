<?php
/**
 * Created by PhpStorm.
 * User: ALEXI
 * Date: 14/01/2018
 * Time: 05:37 PM
 */

namespace TMDB\Traits;


trait Collections
{

    public function GetCollectionDetails($id = 0,$language = "en-US"){
        return $this->get("collection/".$id,[
            "language" => $language
        ]);
    }

    public function GetCollectionImages($id = 0,$language = "en-US"){
        return $this->get("collection/".$id."}/images",[
            "language" => $language
        ]);
    }

}