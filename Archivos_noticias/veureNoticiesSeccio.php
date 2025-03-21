<?php
if (isset($_GET['seccio'])) {
    $seccio = htmlspecialchars($_GET['seccio']); 
    $db = new SQLite3('../diariLocal.db'); 

    // Consulta SQL per obtenir les notícies de la secció especificada
    $stmt = $db->prepare("SELECT * FROM noticies WHERE not_seccio = :seccio ORDER BY not_data DESC");
    $stmt->bindValue(':seccio', $seccio, SQLITE3_TEXT);
    $result = $stmt->execute();

    echo "<h1>Notícies de la secció: " . htmlspecialchars($seccio) . "</h1><br>";

    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo "Títol: " . htmlspecialchars($row['not_titular']) . "<br>";
        echo "Cos: " . htmlspecialchars($row['not_cos']) . "<br>";
        echo "Data: " . htmlspecialchars($row['not_data']) . "<br>";
        echo "Secció: " . htmlspecialchars($row['not_seccio']) . "<br><br>";
    }

    // Si no hi ha notícies
    if ($result->fetchArray(SQLITE3_ASSOC) === false) {
        echo "No hi ha notícies disponibles per a aquesta secció.";
    }
} else {
    echo "No s'ha especificat cap secció.";
}
?>