<?php

require 'app/init.php';

/**
 * Application's Entry Point.
 */

use Ryzen\CoreLibrary\View;

echo View::load('welcome/welcome');