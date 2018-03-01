<?php
//setting header to json
header('Content-Type: application/json');

include "db.php";

$query = "SELECT T.`1` as 'chronic_disease_number' , T.percentage
FROM(
SELECT '1' ,COUNT( CASE WHEN chronic_disease_number = 1 THEN 1 END) * 100.0 / COUNT(*) AS 'percentage'  
FROM person

UNION

SELECT '2' ,COUNT( CASE WHEN chronic_disease_number = 2 THEN 1 END) * 100.0 / COUNT(*) AS 'percentage'  
FROM person

UNION

SELECT '3' ,COUNT( CASE WHEN chronic_disease_number = 3  THEN 1 END) * 100.0 / COUNT(*) AS 'percentage'  
FROM person

UNION

SELECT '4 et +' ,COUNT( CASE WHEN chronic_disease_number >= 4 THEN 1 END) * 100.0 / COUNT(*) AS 'percentage'  
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
