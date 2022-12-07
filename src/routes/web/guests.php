<?php

\Tina4\Get::add("/guests", function (\Tina4\Response $response) {
    $guests = [];
    $file = fopen("./output/output.csv", "r");

    $stats = [
        "coming" => 0,
        "notComing" => 0,
        "totalRsvps" => 0
    ];

    while(! feof($file)) {

        $line = fgetcsv($file);
        $dietary = "None";

        if(!empty($line[2])) {
            $dietary = $line[2];
        }

        if(!empty($line[3])) {
            if($line[3] == 'Yes') {
                $stats["coming"] = $stats["coming"] + 1;
            } else {
                $stats["notComing"] = $stats["notComing"] + 1;
            }
            $stats["totalRsvps"] = $stats["totalRsvps"] + 1;
        }
        if(!empty($line)) {
            $guests[] = [
                "fullNames" => $line[0] ?? 'No Name',
                "phone" => $line[1] ?? 'No Phone',
                "dietaryRestrictions" => $dietary,
                "coming" => $line[3] ?? 'No Response',
                "comingTwo" => $line[4] ?? 'No Response'
            ];
        }
    }

    fclose($file);

    return $response(\Tina4\renderTemplate("/pages/guests.twig", ["guests" => $guests, "stats"=> $stats]), HTTP_OK, TEXT_HTML);
});