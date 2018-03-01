<?php
//setting header to json
header('Content-Type: application/json');

include "db.php";

$query = "SELECT T.`Trés malheureux` as 'happiness' , T.percentage
FROM(
SELECT 'Trés malheureux ' ,COUNT( CASE WHEN happiness = 1 THEN 1 END) * 100.0 / COUNT(*) AS 'percentage'  
FROM person

UNION

SELECT 'Malheureux' ,COUNT( CASE WHEN happiness = 2 THEN 1 END) * 100.0 / COUNT(*) AS 'percentage'  
FROM person

UNION

SELECT 'Heureux' ,COUNT( CASE WHEN happiness = 3  THEN 1 END) * 100.0 / COUNT(*) AS 'percentage'  
FROM person

UNION

SELECT 'Trés heureux' ,COUNT( CASE WHEN happiness = 4 THEN 1 END) * 100.0 / COUNT(*) AS 'percentage'  
FROM person )  as T";

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
