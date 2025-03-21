<?php
$db = new SQLite3('../diariLocal.db'); 
$result = $db->query("SELECT COUNT(*) as total FROM noticies WHERE not_data >= '2025-02-01' AND not_data <= '2025-02-29'");

$row = $result->fetchArray(SQLITE3_ASSOC);
echo "Nombre de notícies del mes de febrer: " . $row['total'];
?>