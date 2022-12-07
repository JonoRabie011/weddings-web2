<?php

\Tina4\Post::add('/api/rsvp', function (\Tina4\Response $response, \Tina4\Request $request) {
//    $inputSaving = [$request->params["fullNames"], $request->params["phone"], ];
    $responseMessage = [ "error"=> false, "message"=> "Thanks you for your response"];

    if(empty($request->data->fullNames) && empty($request->data->phone)) {

        $responseMessage["message"] = "Fields may not be empty!";
        $responseMessage["error"] = true;
    } else {

        $rowSav = ["{$request->data->fullNames}", "{$request->data->phone}", "{$request->data->dietaryRestrictions}", "{$request->data->coming}", "{$request->data->coming1}"];
        $fileWriter = fopen("./output/output.csv", "a");
        if(is_bool($fileWriter)) {
            $responseMessage["message"] = "Failed to save response!";
            $responseMessage["error"] = true;
        } else {
            fputcsv($fileWriter, $rowSav);
            fclose($fileWriter);
        }
    }
    return $response($responseMessage, $responseMessage["error"]? HTTP_BAD_REQUEST : HTTP_OK, TEXT_HTML);
});