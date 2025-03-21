<?php
$db = new SQLite3('../diariLocal.db'); 
$result = $db->query("SELECT DISTINCT not_seccio FROM noticies ORDER BY not_seccio ASC");

echo "Seccions disponibles:<br><br>";
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $seccio = urlencode($row['not_seccio']); 
    echo "<a href='veureNoticiesSeccio.php?seccio=$seccio'>" . htmlspecialchars($row['not_seccio']) . "</a><br>";
}
?>