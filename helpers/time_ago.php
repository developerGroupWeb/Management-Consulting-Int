<?php

function time_ago($timestamp)
{
    date_default_timezone_set('Benin/Cotonou');

    $time_ago = strtotime($timestamp);
    $current_time = time();

    $time_difference = $current_time - $time_ago;
    $seconds = $time_difference;

    $minutes = round($seconds / 60); // value 60 is seconds
    $hours = round($seconds / 3600); // value 3600 is 60 minutes * 60 seconds
    $days = round($seconds / 86400); // value 86400 is 60 minutes * 60 seconds * 24
    $weeks = round($seconds / 604800); // value 86400 is 60 minutes * 60 seconds * 24 * 7
    $months = round($seconds / 2629440);
    $years = round($seconds / 31553280);

    $out = '';

    if ($seconds <= 60) {
        return "A l'instant";
    } elseif ($minutes <= 60) {

        switch ($minutes){
            case 1:
                $out = "Une minute déjà";
                break;
            default:
                $out = "$minutes minutes déjà";
                break;
        }
    } elseif ($hours <= 24) {

        switch ($hours){
            case 1:
                $out = "Une minute déjà";
                break;
            default:
                $out = "$hours heures déjà";
                break;
        }

    } elseif ($days <= 7) {

        switch ($days){
            case 1:
                $out = "Hier";
                break;
            default:
                $out = "$days jours déjà";
                break;
        }

    } elseif ($weeks <= 4.3)// 4.3 = 52/12
    {
        switch ($weeks){
            case 1:
                $out = "Une semaine déjà";
                break;
            default:
                $out = "$weeks semaines déjà";
                break;
        }
    } elseif ($months <= 12) {

        switch ($months){
            case 1:
                $out = "Un mois déjà";
                break;
            default:
                $out = "$months mois déjà";
                break;
        }
    } else {
        switch ($years){
            case 1:
                $out = "Un an déjà";
                break;
            default:
                $out = "$years ans déjà";
                break;
        }
    }
    return $out;
}


