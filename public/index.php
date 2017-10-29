<?php

require_once '../vendor/autoload.php';

\Config\Config::init();

\OLOG\Auth\RegisterRoutes::registerRoutes();

\OLOG\Router::action(\App\HomeAction::class, 0);
