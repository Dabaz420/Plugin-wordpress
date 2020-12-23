<?php

/*
Plugin Name: Wordpress CPT 
Description: Le Wordpress il est claqué au sol
Version: Pre early alpha v.0.0.0.0001
*/
 
function meteo()
{
    $videoList = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=48800&lang=fr&appid=52514e11b294bfdfc76744f4b015b623"),true);
    print_r("Actuellement il fait ".$videoList["weather"][0]["description"]);
}

add_action("wp_footer", "meteoQuiFaitBeau");