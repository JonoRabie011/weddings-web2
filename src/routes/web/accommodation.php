<?php

\Tina4\Get::add("/accommodation", function (\Tina4\Response $response) {
    $accommodation = [
        [
            "url" => "salene.co.za" ,
            "title" => "The Salene Boutique Hotel",
            "description"=> "A quite place near a lake",
            "distance"=> "Within 2km",
            "imgs"=>[
                "https://salene.co.za/wp-content/uploads/2022/04/Optimized-hotel-5.jpg",
                "https://salene.co.za/wp-content/uploads/2022/03/home-3.jpeg",
                "https://salene.co.za/wp-content/uploads/2022/03/Optimized-9.jpg",
                "https://salene.co.za/wp-content/uploads/2022/03/rooms-08.jpg",
                "https://salene.co.za/wp-content/uploads/2022/04/Optimized-7-13-1-1.jpg"
            ]
        ],
        [
            "url" => "www.booking.com/hotel/za/mulberry-cottage.en-gb.html?aid=311984&label=mulberry-cottage-p8CnLq9zUSroT7bVeWjMogS275181811367%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-441758414095%3Alp1028745%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YcGt_tphEo8pAE6BwGOTZ3E&sid=799c0822249ee1486de5e0edd77c064d&dest_id=-1287082;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1657817787;srpvid=3397771d5da70295;type=total;ucfs=1&#hotelTmpl" ,
            "title" => "Gemoedsrus Farm",
            "description"=> "A quite place near a lake",
            "distance"=> "Within 2km",
            "imgs"=>[
                "https://cf.bstatic.com/xdata/images/hotel/max1024x768/137034029.jpg?k=3d0c12c68b691180f860e6562408598c4b00b0f2a09ddc119bc0fd6e21003a8e&o=&hp=1",
                "https://cf.bstatic.com/xdata/images/hotel/max1024x768/137346298.jpg?k=8491baa13a6eae8bdb47964e4e1fe2ddaaa8b393fcc50adc43af1a73332793ac&o=&hp=1",
                "https://cf.bstatic.com/xdata/images/hotel/max1024x768/351754238.jpg?k=b0eb3500b8681e5c21906de5d158d09c03fed487d11d58f87f06c3c66a1967a6&o=&hp=1",
                "https://cf.bstatic.com/xdata/images/hotel/max1024x768/357448994.jpg?k=5e131cc70060daf9327e43d2d9afb21dbd003ebb8ec18fa8c05d85d11b0477b4&o=&hp=1",
                "https://cf.bstatic.com/xdata/images/hotel/max1024x768/137358507.jpg?k=7a164b22d627e1526ebd94091eb03566ae0adc24203d4f63dc84e3d8f76193d0&o=&hp=1"
            ]
        ],
        [
            "url" => "closmalverne.co.za" ,
            "title" => "Clos Malverne Wine Farm",
            "description"=> "A quite place near a lake",
            "distance"=> "Within 2km",
            "imgs"=>[
                "https://closmalverne.co.za/wp-content/uploads/2020/02/Clos-Malverne-Small_42-1024x509.jpg",
                "https://closmalverne.co.za/wp-content/uploads/2020/02/Clos-Malverne-Small_53-1024x684.jpg",
                "https://closmalverne.co.za/wp-content/uploads/2020/02/Clos-Malverne-Small_50-1024x684.jpg",
                "https://closmalverne.co.za/wp-content/uploads/2020/02/Clos-Malverne-Small_59-711x1024.jpg",
                "https://closmalverne.co.za/wp-content/uploads/2016/04/61198860.jpg"
            ]
        ],
        [
            "url" => "devonvalleyhotel.com" ,
            "title" => "Devon Valley Hotel",
            "description"=> "A quite place near a lake",
            "distance"=> "Within 3km",
            "imgs"=> [
                "https://devonvalleyhotel.com/wp-content/uploads/2019/08/vineyard_largelarge20120531130655.jpg",
                "https://devonvalleyhotel.com/wp-content/uploads/2021/11/dvh-gallery-71-683x1024.jpg",
                "https://devonvalleyhotel.com/wp-content/uploads/2021/11/dvh-gallery-64-1024x683.jpg",
                "https://devonvalleyhotel.com/wp-content/uploads/2021/11/dvhgallery-58-683x1024.jpg",
                "https://devonvalleyhotel.com/wp-content/uploads/2021/11/dvh-gallery-79-1024x683.jpg"
                ]

        ],
        [
            "url" => "thelogcabin.co.za" ,
            "title" => "The Log Cabin",
            "description"=> "A quite place near a lake",
            "distance"=> "Within 3km",
            "imgs"=> [
                "https://e687s5tydew.exactdn.com/wp-content/uploads/2022/01/SA-Carstens-Photography-6.jpg?strip=all&lossy=1&ssl=1",
                "https://e687s5tydew.exactdn.com/wp-content/uploads/2022/01/SA-Carstens-Photography-16.jpg?strip=all&lossy=1&ssl=1",
                "https://e687s5tydew.exactdn.com/wp-content/uploads/2022/01/SA-Carstens-Photography-6-2.jpg?strip=all&lossy=1&ssl=1",
                "https://e687s5tydew.exactdn.com/wp-content/uploads/2022/01/SA-Carstens-Photography-Log-Apartment-8.jpg?strip=all&lossy=1&ssl=1",
                "https://e687s5tydew.exactdn.com/wp-content/uploads/2022/01/SA-Carstens-Photography-Log-Apartment-5.jpg?strip=all&lossy=1&ssl=1"
            ]
        ],
        [
            "url" => "www.sugarbirdmanor.co.za" ,
            "title" => "Sugar Bird Manor",
            "description"=> "A quite place near a lake",
            "distance"=> "Within 3km",
            "imgs"=> [
                "https://www.sugarbirdmanor.co.za/wp-content/uploads/2020/07/DC302C58-A9AF-2A40-74FC-1735C2B8B5ED.jpg",
                "https://www.sugarbirdmanor.co.za/wp-content/uploads/2020/07/3C2056B6-EE65-9ABE-FCF0-55C77E6506A4.jpg",
                "https://www.sugarbirdmanor.co.za/wp-content/uploads/2020/07/52277231-5FFD-1EDC-5471-05E4C76022A3.jpg",
                "https://www.sugarbirdmanor.co.za/wp-content/uploads/2020/07/0BEA24D5-D407-61B2-96C8-5F6024230370.jpg",
                "https://www.sugarbirdmanor.co.za/wp-content/uploads/2020/07/DBC051D8-C198-9748-D4B1-F36085FF11DA.jpg"
            ]
        ],
        [
            "url" => "www.airbnb.co.za/rooms/614819313156322651?guests=1&amp;adults=1&amp;s=66&amp;source=embed_widget" ,
            "title" => "Tortelduif Cottage",
            "description"=> "A quite place near a lake",
            "distance"=> "Within 3km",
            "imgs"=>[
                "https://a0.muscache.com/im/pictures/miso/Hosting-614819313156322651/original/d897bd41-9ecc-48fa-8556-ee9fd3fc81cd.jpeg?im_w=720",
                "https://a0.muscache.com/im/pictures/miso/Hosting-614819313156322651/original/ae1eeda3-60cb-4285-9f98-134803855bfc.jpeg?im_w=1200",
                "https://a0.muscache.com/im/pictures/miso/Hosting-614819313156322651/original/23f7de48-ebc8-4db4-88cf-7dd656d7e8aa.jpeg?im_w=720",
                "https://a0.muscache.com/im/pictures/miso/Hosting-614819313156322651/original/073bf3af-3308-4bbc-8b6e-c676dccd3571.jpeg?im_w=720",
                "https://a0.muscache.com/im/pictures/miso/Hosting-614819313156322651/original/e6a512eb-d02d-4958-aa77-1da62f822063.jpeg?im_w=1200"
            ]
        ],
        [
            "url" => "fransmanshuijs.co.za" ,
            "title" => "Fransmanshuijs",
            "description"=> "A quite place near a lake",
            "distance"=> "Within 4km",
            "imgs"=>[
                "https://fransmanshuijs.co.za/wp-content/uploads/2019/11/Fransmanshuijs-guesthouse-stellenbosch-bathroom-4-rooms-9.jpg",
                "https://fransmanshuijs.co.za/wp-content/uploads/2019/08/Fransmanshuijs-guesthouse-farm-Stellenbosch-22.jpg",
                "https://fransmanshuijs.co.za/wp-content/uploads/2019/11/Fransmanshuijs-guesthouse-stellenbosch-bathroom-4-rooms-11.jpg",
                "https://fransmanshuijs.co.za/wp-content/uploads/2019/11/Fransmanshuijs-guesthouse-stellenbosch-bathroom-4-rooms-4.jpg",
                "https://fransmanshuijs.co.za/wp-content/uploads/2020/08/hot-tub-stellenbosch-winelands-scaled.jpg"
            ]
        ],
        [
            "url" => "www.airbnb.com/rooms/35422902?guests=1&amp;adults=1&amp;s=66&amp;source=embed_widget" ,
            "title" => "Arch Window",
            "description"=> "A quite place near a lake",
            "distance"=> "Within 5km",
            "imgs"=>[
                "https://a0.muscache.com/im/pictures/miso/Hosting-35422902/original/90f487d3-b614-48dd-8824-c3065fc1ddce.jpeg?im_w=720",
                "https://a0.muscache.com/im/pictures/6674eca5-ccc2-41aa-ac9e-d2824ae29601.jpg?im_w=1200",
                "https://a0.muscache.com/im/pictures/miso/Hosting-35422902/original/8898f69e-fc35-42c6-a4b9-8f199d58172e.jpeg?im_w=720",
                "https://a0.muscache.com/im/pictures/9659d0c4-1889-4688-b649-1a0cbf85bf0a.jpg?im_w=720",
                "https://a0.muscache.com/im/pictures/07adbfb5-d6c5-4bac-9ae4-386d89fd31f8.jpg?im_w=720"
            ]
        ]
    ];

    return $response(\Tina4\renderTemplate("/pages/accommodation.twig", ["accommodation"=>$accommodation]),HTTP_OK, TEXT_HTML);
});