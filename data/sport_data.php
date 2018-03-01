<?php
//setting header to json
header('Content-Type: application/json');

include "db.php";

$query = "SELECT T.`Pratiquants de sport` as 'sport' , T.percentage
FROM(
SELECT 'Pratiquants de sport' ,COUNT( CASE WHEN sport = 1 THEN 1 END) * 100.0 / COUNT(*) AS 'percentage'  
FROM person

UNION

SELECT 'non pratiquants ' ,COUNT( CASE WHEN sport = 0 THEN 1 END) * 100.0 / COUNT(*) AS 'percentage'  
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
