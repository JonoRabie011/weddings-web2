<?php

\Tina4\Get::add("/gifts-registry", function (\Tina4\Response $response) {

    $giftsPage["carousel_imgs"] = [
        [
            "standard" => "src/public/images/weddings/2/gifts.jpeg",
            "mobile" => "src/public/images/weddings/2/gifts-1-mobile.jpeg"
        ]
    ];

//    $giftsPage["carousel_imgs"] = [
//        [
//            "standard" => $_ENV["AWS_BUCKET_PUBLIC_URL"] ."/weddings/J%26K-03.jpg",
//            "mobile" => $_ENV["AWS_BUCKET_PUBLIC_URL"] ."/weddings/J&K-46.jpg"
//        ]
//    ];

    return $response(\Tina4\renderTemplate("/pages/gifts.twig", ["data"=> $giftsPage]), HTTP_OK, TEXT_HTML);
});
