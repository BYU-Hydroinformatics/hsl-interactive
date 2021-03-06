<?php

require_once 'update_series_catalog_function.php';

function get_mysqli() {
	$db = (array) get_instance()->db;
	return mysqli_connect('localhost', $db['username'], $db['password'], $db['database']);
}

db_UpdateSeriesCatalog_All(get_mysqli());

function get_table_name($uppercase_table_name) {
	return '`' . strtolower($uppercase_table_name) . '`';
}

// This function updates all entries in the
// SeriesCatalog by extracting the aggregate values
// from the dataValues table and from related tables.
function db_UpdateSeriesCatalog_All($db) {

	$result_status = array("inserted" => 0, "updated" => 0);

	$query = 'SELECT MAX(SiteID), MAX(VariableID), MAX(MethodID), MAX(SourceID), MAX(QualityControlLevelID)
            FROM ' . get_table_name('DataValues') .
		' GROUP BY SiteID, VariableID, SourceID, MethodID, QualityControlLevelID';

	$result = mysqli_query($db, $query);

	if (!$result) {
		die("<p>Error in executing the SQL query " . $query . ": " .
			mysqli_error() . "</p>");
	}

	$result_array = mysql_fetch_rowsarr($result, MYSQLI_NUM);
	foreach ($result_array as $r) {

		$status = update_series_catalog($r[0], $r[1], $r[2], $r[3], $r[4], $db);
	}

}

function mysql_fetch_rowsarr($result, $numass = MYSQLI_BOTH) {
	$i    = 0;
	$keys = array_keys(mysqli_fetch_array($result, $numass));
	mysqli_data_seek($result, 0);
	while ($row = mysqli_fetch_array($result, $numass)) {
		foreach ($keys as $speckey) {
			$got[$i][$speckey] = $row[$speckey];
		}
		$i++;
	}
	return $got;
}
