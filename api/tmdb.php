<?php

const MY_TV_SHOWS = [
    1639,   // Heroes
    43058,  // Real Humans
    57243,  // Doctor Who
    61339,  // Sailor Moon Crystal
    71912  // The Witcher
];

function getTvShow($name) {
    $url = 'https://api.themoviedb.org/3/tv/' . $id . '?api_key=' . $_ENV['TMDB_API_KEY'] . '&language=en-US';
    $rawData = file_get_contents($url);
    var_dump($tvShow->name); die();
   // var_dump($url) ;
    
        
        $rawData =  json_decode($rawData);
    
        var_dump( $rawData) ;
}


    




