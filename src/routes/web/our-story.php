<?php

\Tina4\Get::add("/our-story", function (\Tina4\Response $response) {

//    $ourStoryPage["ourStoryImg"] = AWS_BUCKET_PUBLIC_URL."/weddings/J%26K-25.jpg";
    $ourStoryPage["ourStoryImg"] = "https://via.placeholder.com/600x900.png";
    $ourStoryPage["ourStory"] = "
        <span class=\"montserrat text-uppercase our-story-text-span\">
        Spicy jalapeno bacon ipsum dolor amet in sed tri-tip ut jowl deserunt pariatur velit minim biltong. Pork chop alcatra 
        sed prosciutto spare ribs in. Alcatra magna biltong, aute kevin nisi cillum burgdoggen in. Deserunt capicola 
        cow shoulder boudin chislic kevin pancetta leberkas corned beef culpa consectetur tail pork belly est.
        <br><br>
         Eiusmod cupim in mollit, aliquip tongue flank. Strip steak turkey reprehenderit drumstick capicola sint qui
         consequat tenderloin shank jowl. Chicken ham hock ham bacon velit laboris. Leberkas corned beef cupim bresaola 
         pariatur, cow tongue jerky minim. Lorem strip steak picanha tri-tip, aliqua elit capicola swine. Boudin 
         pork chop aliqua minim, shank consequat sunt salami capicola frankfurter adipisicing bacon in excepteur est. 
         Magna ut shankle alcatra.
        <br><br>
        Nisi officia nulla ea chicken labore ham hock proident in pork loin dolore strip steak qui sed. Consequat 
        ribeye culpa pork belly bresaola dolor labore beef swine et. Buffalo alcatra do, ad ham reprehenderit labore 
        excepteur meatloaf in. Corned beef qui prosciutto, capicola lorem ipsum aute aliqua aliquip landjaeger leberkas 
        strip steak eiusmod pork loin velit.
        <br><br>
        Beef ground round reprehenderit fugiat pastrami, shoulder shankle et in aute id. Drumstick biltong consequat 
        aliqua pig, est lorem ball tip consectetur shoulder deserunt. Corned beef burgdoggen ribeye salami laboris, 
        ut turkey tail minim velit beef short loin sausage chislic exercitation. Laboris strip steak pancetta short 
        loin rump venison filet mignon pork belly consectetur. Chuck chislic jowl, drumstick turkey landjaeger jerky 
        commodo venison. Shank do andouille buffalo id corned beef. Shankle cupidatat dolor laboris ham biltong lorem 
        tempor meatball est irure excepteur jerky jowl enim.
        <br><br>
        Velit capicola venison non ipsum mollit. Nulla brisket pork belly strip steak short loin fatback et, sunt 
        nisi boudin t-bone pig laboris. Sed meatloaf do est ham esse ut sausage prosciutto. Turkey non enim eiusmod 
        swine sunt, anim shank. Frankfurter adipisicing short loin leberkas, consectetur kielbasa deserunt ut andouille 
        eiusmod beef doner id aliqua. Sunt chuck consequat fatback. Filet mignon dolore bacon reprehenderit andouille 
        cupidatat tenderloin excepteur, pastrami drumstick in.
        <br><br>
        Dolor consectetur nulla andouille ut, meatloaf salami. Culpa id shankle, chuck brisket velit leberkas. 
        Sunt esse shoulder lorem turkey dolore frankfurter leberkas sirloin ribeye ut chislic. Flank burgdoggen 
        incididunt cupim frankfurter ipsum spare ribs jerky consectetur chicken nostrud leberkas.
        <br><br>
        </span>
        <span class=\"fancy-font\" style=\"font-size: 70px; color: #363434\">
            Keara x Jonathan
        </span>.";
    return $response(\Tina4\renderTemplate("/pages/our-story.twig", ["data"=>$ourStoryPage]), HTTP_OK, TEXT_HTML);
});