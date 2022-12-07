<?php

\Tina4\Get::add('/details/friday', function (\Tina4\Response $response) {
    $weddingDate = (new DateTime())->setDate(2023, 03, 31);

    $dateObject = [
        "dayLong" => $weddingDate->format("l"),
        "day" => $weddingDate->format("d"),
        "daySuperScript" => "ste",
        "monthLong" => $weddingDate->format("F"),
        "yearLong" => $weddingDate->format("Y")
    ];

    $pageData = [
        "weddingDate" => $dateObject,
        "venueName" => "Morganvlei Landgoed",
        "venueLocation" => "Tulbagh, Western Cape",
        "dressCode" => "",
        "reminderMessage" => "PS. ONS gaan lekker braai!",
        "guestArrival" => "VUUR WORD 5:00 pm AAN GESTEEK ",
//        "ceremonyStart" => "Guests to arive at 3:30pm",
        "backgroundSideBanners" => "https://img1.wsimg.com/isteam/ip/16a87ee6-1553-4069-8928-8867cce4c840/301586101_609260287469782_7392122527826918181_.jpg/:/rs=w:1280,h:853",
    ];
    return $response(\Tina4\renderTemplate('/pages/details.twig', $pageData), HTTP_OK, TEXT_HTML);
});

\Tina4\Get::add('/details/saturday', function (\Tina4\Response $response) {
    $weddingDate = (new DateTime())->setDate(2023, 04, 01 );

    $dateObject = [
        "dayLong" => $weddingDate->format("l"),
        "day" => $weddingDate->format("d"),
        "daySuperScript" => "ste",
        "monthLong" => $weddingDate->format("F"),
        "extraInfo" => "",
        "yearLong" => $weddingDate->format("Y")
    ];

    $pageData = [
        "weddingDate" => $dateObject,
        "venueName" => "Morganvlei Landgoed",
        "venueLocation" => "Tulbagh, Western Cape",
        "dressCode" => "SEMI FORMEEL",
        "reminderMessage" => "PS. ons gaan lekker dance",
//        "guestArrival" => "Guests to arive at 3:30pm",
        "ceremonyStart" => "SEREMONIE TYD 3:30 pm",
        "extraInfo" => "",
        "backgroundSideBanners" => "https://img1.wsimg.com/isteam/ip/16a87ee6-1553-4069-8928-8867cce4c840/301586101_609260287469782_7392122527826918181_.jpg/:/rs=w:1280,h:853"
    ];

    return $response(\Tina4\renderTemplate('/pages/details.twig', $pageData), HTTP_OK, TEXT_HTML);
});