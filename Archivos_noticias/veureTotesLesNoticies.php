<?php
$db = new SQLite3('../diariLocal.db'); 
$result = $db->query("SELECT * FROM noticies ORDER BY not_data ASC");

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "Títol: " . $row['not_titular'] . "<br>";
    echo "Cos: " . $row['not_cos'] . "<br>";
    echo "Data: " . $row['not_data'] . "<br>";
    echo "Secció: " . $row['not_seccio'] . "<br><br>";
}
?>
