<?php

require_once 'update_series_catalog_function.php';

$db         = (array) get_instance()->db;
$connection = mysqli_connect('localhost', $db['username'], $db['password'], $db['database']);

$status = update_series_catalog($SiteID, $VariableID, $MethodID, $SourceID, $QualityControlLevelID, $connection);
