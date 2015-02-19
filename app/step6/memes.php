<?php

$db = new PDO("mysql:host=localhost;dbname=mememaker", 'root', '123123');

$statement = $db->query('SELECT * FROM mememaker');

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo $row['name'].' '.$row['top_text'].' '.$row['bottom_text'] . '<br>';
}

$db = null;