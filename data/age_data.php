<?php
//setting header to json
header('Content-Type: application/json');

include "db.php";

$query = "SELECT COUNT( CASE WHEN age BETWEEN 6 AND 14 THEN 1 END ) * 100.0 / COUNT(*) AS 'percentage' 
FROM person UNION ALL SELECT COUNT( CASE WHEN age BETWEEN 15 AND 24 THEN 1 END ) * 100.0 / COUNT(*) FROM 
person UNION ALL SELECT  COUNT( CASE WHEN age BETWEEN 25 AND 44 THEN 1 END ) * 100.0 / COUNT(*) FROM person
 UNION ALL SELECT COUNT( CASE WHEN age BETWEEN 45 AND 64 THEN 1 END ) * 100.0 / COUNT(*) 
 FROM person UNION ALL SELECT  COUNT( CASE WHEN age BETWEEN 65 AND 76 THEN 1 END ) * 100.0 / COUNT(*)  FROM person";

//execute query
$result = $db->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$db->close();

//now print the data
print json_encode($data);
?>
