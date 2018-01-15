<?php

/*
 * Project's Name: TMDB_Api
 * Description: Libreria para el manejo de la api TMDB
 * Programming Languages: PHP
 * Programmer: Jose Luis Coyotzi Ipatzi
 * File Created: 14/01/2018, 08:22:15 PM
 * File Name: Configuration.php
 * Email: jlci811122@gmail.com
 * 
 * Copyright @2018 xlFederalElk0lx.
 */

namespace TMDB\Traits;

/**
 * Description of Configuration
 *
 * @author ALEXI
 */
trait Configuration {

    /**
     * Get the system wide configuration information. Some elements of the API require some knowledge of this configuration data. The purpose of this is to try and keep the actual API responses as light as possible. It is recommended you cache this data within your application and check for updates every few days.
     * 
     * This method currently holds the data relevant to building image URLs as well as the change key map.
     * 
     * To build an image URL, you will need 3 pieces of data. The base_url, size and file_path. Simply combine them all and you will have a fully qualified URL. Here’s an example URL:
     * 
     * https://image.tmdb.org/t/p/w500/8uO0gUM8aNqYLs1OsTBQiXu0fEv.jpg
     *
     * The configuration method also contains the list of change keys which can be useful if you are building an app that consumes data from the change feed.
     * 
     * @return object|\stdClass
     */
    public function GetAPIConfiguration(){
        return $this->get("configuration");
    }
}
