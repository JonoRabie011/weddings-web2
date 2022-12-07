<?php

use \Tina4\Response;
use \Tina4\Request;
use \Tina4\Get;

Get::add("/song-requests", function (Response $response) {

    $songs = [];

    $file = fopen("./output/song-requests.csv", "r");

    /*
     * [HeaderHey Name,Default Value ]
     */
    $headers = ["songName,No Name Given", "artistName,Unknown", "requestedBy,Not Specified"];

    $song = [];

    while(! feof($file))
    {
        $line = fgetcsv($file);

        if(!empty($line))
        {
            foreach($headers as $key => $header)
            {
                $header = explode(",", $header);
                if(!empty($line[$key]))
                {
                    $song["{$header[0]}"] = $line[$key];
                }
                else
                {
                    $song["{$header[0]}"] = $header[1];
                }
            }
            $songs[] = $song;
        }
    };

    echo "<pre>";
    print_r($songs);

    die("Okay");

    return $response(\Tina4\renderTemplate("/pages/song-requests.twig"), HTTP_OK, TEXT_HTML);
});
