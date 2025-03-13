<?php

function is_empty($var, $text, $location, $ms, $data)
{
    if (empty($var)) {
        $em = "Votre " . $text . " est requis";
        header(header: "Location: $location?$ms=$em&$data");
        exit;
    }
    return 0;
}
