<?php

\Tina4\Get::add("/accommodation", function (\Tina4\Response $response) {
    $accommodation = [
        [
            "url" => "www.kloofzichtestate.co.za" ,
            "title" => "Kloofzicht Estate",
            "description"=> "A quite place near a lake",
//            "distance"=> "Within 2km",
            "imgs"=>[
                "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/05/98/9c/69/kloofzicht-estate.jpg?w=700&h=-1&s=1",
                "http://www.kloofzichtestate.co.za/wp-content/uploads/2015/12/loft_home4-681x454.jpg"
            ]
        ],
        [
            "url" => "wittedriftmanor.com/accommodation/" ,
            "title" => "Wittedrift Manor",
            "description"=> "A quite place near a lake",
//            "distance"=> "Within 2km",
            "imgs"=>[
                "https://wittedriftmanor.com/wp-content/uploads/2019/08/Twin2.jpg",
                "https://wittedriftmanor.com/wp-content/uploads/2019/08/Tara2A-1-1080x675.jpg"
            ]
        ],
        [
            "url" => "duikersdrift.com" ,
            "title" => "Duikersdrift Winelands Country Escape",
            "description"=> "A quite place near a lake",
//            "distance"=> "Within 2km",
            "imgs"=>[
                "https://cf.bstatic.com/xdata/images/hotel/max1280x900/273711865.jpg?k=c209b3a34535d54f06d334ee28be2d9f2c44f6f987a8050006730a35fbc5003e&o=&hp=1",
                "https://duikersdrift.com/wp-content/uploads/2020/08/Duikersdrift-Slider-1-copy-2-1500x630.jpg"
            ]
        ],
        [
            "url" => "www.raptorrise.co.za" ,
            "title" => "Raptor Rise",
            "description"=> "A quite place near a lake",
//            "distance"=> "Within 3km",
            "imgs"=> [
                "https://static.wixstatic.com/media/02fb05_0ea4b086111a4e5db842f81024a9177c~mv2.jpg/v1/fill/w_1960,h_1150,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/02fb05_0ea4b086111a4e5db842f81024a9177c~mv2.jpg",
                "https://static.wixstatic.com/media/02fb05_d7a5b002ab894fdda43221feb6d784e5~mv2.jpg/v1/fill/w_1960,h_1150,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/02fb05_d7a5b002ab894fdda43221feb6d784e5~mv2.jpg"
                ]

        ]
    ];

    return $response(\Tina4\renderTemplate("/pages/accommodation.twig", ["accommodation"=>$accommodation]),HTTP_OK, TEXT_HTML);
});