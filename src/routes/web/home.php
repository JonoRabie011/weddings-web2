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
//    "images/rabie-wedding/J&K-07.jpg"
    $homePage["carousel_imgs"] = [
        [
            "standard" => "https://jrwebdesigns-sa.s3.af-south-1.amazonaws.com/weddings/J%26K-07.jpg",
            "mobile" => "https://jrwebdesigns-sa.s3.af-south-1.amazonaws.com/weddings/homePage3.jpeg"
        ]
    ];
    $homePage["wedding_title"] = "Keara & Jonathan";
    $homePage["wedding_date"] = "20.03.2023";
//    , "images/rabie-wedding/homePage2.jpeg"

   return $response(\Tina4\renderTemplate('pages/home.twig', ["data"=> $homePage]), HTTP_OK, TEXT_HTML);
});
