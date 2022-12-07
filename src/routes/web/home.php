<?php

\Tina4\Get::add('/', function (\Tina4\Response $response, \Tina4\Request $request) {

    //Setting Session Variable
    if(empty($_SESSION["user"])) {
        unset($_SESSION["userId"]);
    }

    //Load User
    $_SESSION["user"] = [
        "name" => "jonathan",
        "surname" => "Rabie"
    ];

    $homePage = [
        "carouselImgs" => [
            [
                "standard" => "/images/weddings/2/home-page-1.JPG",
                "mobile" => "images/weddings/2/home-page-1.JPG"
            ]
        ],
        "weddingTitle" => "Neline & Dewitt",
        "weddingDate" => "01.04.2023"
    ];

   return $response(\Tina4\renderTemplate('pages/home.twig', ["data"=> $homePage]), HTTP_OK, TEXT_HTML);
});
