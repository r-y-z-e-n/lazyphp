<?php

/**
 * Application Loader -- Starts all library.
 * Change the Application Link To Your application's root link [E.G http://localhost/myapp/];
 * Change Application Config According To Your Need Here.
 */


$application_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$application    =  new Ryzen\CoreLibrary\Ry_Zen($application_link);
