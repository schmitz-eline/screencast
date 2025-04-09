<?php

/**
 * Un bac à sable pour tester le fonctionnement de certaines fonctions PHP
 */

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/core/helpers/functions.php';
define('DATABASE_PATH', __DIR__.'/database.sqlite');
require __DIR__.'/core/database/dbconnection.php';

$p = \Animal\Models\Loss::first();
echo $p->pet_owner_id;