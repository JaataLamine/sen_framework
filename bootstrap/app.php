<?php

use App\Core\App;
use Spatie\Ignition\Ignition;

error_reporting(0);

require "../vendor/autoload.php";

Ignition::make()->register();

// Setup

$app = new App();

// Register routes

$app->run();