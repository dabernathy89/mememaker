<?php

$db = new PDO("mysql:host=localhost;dbname=mememaker", 'root', '123123');

$statement = $db->query('SELECT * FROM mememaker');

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo htmlspecialchars($row['name'])
     . ' ' . htmlspecialchars($row['top_text'])
     . ' ' . htmlspecialchars($row['bottom_text'])
     . '<br>';
}

$db = null;