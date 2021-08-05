<?php 
namespace src;

function slimConfiguration() : \Slim\Container
{
    $configuration = [
        'settings'=>[
            'displayErrorDails'=>getenv("DISPLAY_ERRORS_DETAILS"),
        ],
    ];
    return new \Slim\Container($configuration);
}
;?>