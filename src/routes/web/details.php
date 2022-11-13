<?php

\Tina4\Get::add('/details/friday', function (\Tina4\Response $response) {
    return $response(\Tina4\renderTemplate('/pages/details.twig'), HTTP_OK, TEXT_HTML);
});

\Tina4\Get::add('/details/saturday', function (\Tina4\Response $response) {
    return $response(\Tina4\renderTemplate('/pages/details.twig'), HTTP_OK, TEXT_HTML);
});