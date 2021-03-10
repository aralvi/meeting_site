<?php
if(!function_exists('getTime'))
{
    function getTimeZoneTime($ftz,$time)
    {
        date_default_timezone_set($ftz);
        $datetime = new DateTime($time);
        $la_time = new DateTimeZone(getCurrentUserTimeZone());
        $datetime->setTimezone($la_time);
        return date("g:i A", strtotime($datetime->format('H:i')));
    }
}

if(!function_exists('getCurrentUserTimeZone'))
{
    function getCurrentUserTimeZone(){
  
        $ip = file_get_contents("http://ipecho.net/plain");
        $url = 'http://ip-api.com/json/'.$ip;
        $tz = file_get_contents($url);
        $tz = json_decode($tz,true)['timezone'];
        return $tz;
    }
}