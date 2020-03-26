<?php
$film_id =  1639;
    

    $url = 'https://api.themoviedb.org/3/tv/' . $id . '?api_key=' . $_ENV['TMDB_API_KEY'] . '&language=en-US';
    $rawData = file_get_contents($url);
    
    $rawData =  json_decode($rawData);
    
    var_dump( $rawData) ;
