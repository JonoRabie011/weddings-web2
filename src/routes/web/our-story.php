<?php

\Tina4\Get::add("/our-story", function (\Tina4\Response $response) {

//    $ourStoryPage["ourStoryImg"] = AWS_BUCKET_PUBLIC_URL."/weddings/J%26K-25.jpg";
    $ourStoryPage["ourStoryImg"] = "/images/weddings/2/ourstory.JPG";
    $ourStoryPage["ourStory"] = "
        <span class=\"montserrat text-uppercase our-story-text-span\">
        Telkemale dink ‘n mens terug aan ‘n spesiale tyd in jou lewe en wens jy, jy kan teruggaan na daardie eerste ontmoeting. 
        (Ons het wel as vierjariges saam gebaljaar.) Die emosies wat jy daardie tyd gevoel het, raak vae herinneringe wat slegs 
        terugkom as jy jou oё styf toeknyp en die oomblik probeer herleef. Ons het in 2018 ontmoet in Hartenbos en die 
        somersvakansie van ‘n leeftyd gehad, met sonskyn en baie roomys. Voordat ons oё kon uitvee, was die vakansie 
        verby en realitiet het ingeskop, wat beteken het, dat ons 800km weg van mekaar af sou wees. 
        <br><br>
        Al was dit moeilik as gevolg van die afstand, het ons toe besluit om beste vriende te bly en mekaar beter te leer ken. 
        Ons het bly glo soos die Bybel sȇ in Jeremia 29:11: “Ek weet wat ek vir julle beplan, voorspoed en nie teenspoed”. 
        Ons het geweet alles sal uitwerk soos dit moet. Ons moet net aanhou glo!
        <br><br>
        Ons het kontak behou en elke Desember weer begin waar ons dinge gelos het. Ons het soveel wonderlike herinneringe 
        gemaak, tot die Here dit so beplan het dat ons albei twee jaar later in die Paarl sal bly. So het ons paaie weer gekruis. 
        <br><br>
        Dit was te goed om waar te wees en in Desember 2020, met die Hartenbos sonskyn en weer baie roomyse later, het ons 
        besluit om ons vriendskap verder te neem. Deur die genade en liefde van ons Hemelse Vader, in die hartjie van Pretoria waar die 
        beste rugbyspan gespeel het, het Dewitt die groot vraag gevra. Neline was baie opgewonde oor die mooi ring en wou dit dadelik 
        aansit, waarna Dewitt gesȇ het: “Jy het nog nie “ja” gesȇ nie.”
        <br><br>
        Ons is vandag baie dankbaar en gereed om voor God en ons wonderlike ouers, susters, vriende en familie ons huweliksbelofte af te lȇ. 
        <br><br>
        Kan nie wag om julle te sien op 1 April 2023 nie!! 
        <br><br>
        </span>
        <span class=\"fancy-font\" style=\"font-size: 70px; color: #363434\">
            Neline x Dewitt
        </span>";
    return $response(\Tina4\renderTemplate("/pages/our-story.twig", ["data"=>$ourStoryPage]), HTTP_OK, TEXT_HTML);
});