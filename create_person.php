<?php
include "data/db.php";
$name = $_POST["name"];
$age = $_POST["age"];
$happiness = $_POST["happiness"];
$sex = $_POST["sex"];
$disease = $_POST["disease"];
$sport = $_POST["sport"];
$country = "FR";
?>

<?php
$query = "
INSERT INTO `person` (`name`, `gender`, `happiness`, `sport`, `age`, `chronic_disease_number`,`country`) 
VALUES (\"$name\",\"$sex\",$happiness,$sport,$age,$disease,\"$country\");
";

if ($db->query($query) === TRUE) {
    echo "Vos Informations ont été ajouté avec succées!! <a href='\sante'>Me rediriger Vers L'Accueil</a>";
} else {
    echo "Error: " . $query . "<br>" . $db->error;
}
?>


<?php
//close connection
$db->close();
?>
