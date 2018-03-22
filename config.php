<?php
date_default_timezone_set('America/La_Paz');
Flight::set('flight.log_errors', true);
$db_address = getenv("DB_ADDRESS") ? getenv("DB_ADDRESS") : "mongodb://127.0.0.1/";
