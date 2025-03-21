<?php
$db = new SQLite3('../diariLocal.db'); 
$result = $db->query("SELECT * FROM noticies WHERE not_data >= '2025-02-01' AND not_data <= '2025-02-28' ORDER BY not_data DESC");

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "Títol: " . $row['not_titular'] . "<br>";
    echo "Cos: " . $row['not_cos'] . "<br>";
    echo "Data: " . $row['not_data'] . "<br>";
    echo "Secció: " . $row['not_seccio'] . "<br><br>";
}
?>