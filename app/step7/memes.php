<?php

$db = new PDO("mysql:host=localhost;dbname=mememaker", 'root', '123123');

$statement = $db->query('SELECT * FROM mememaker');

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo '<div class="meme">';
    echo '<span class="top">' . htmlspecialchars($row['top_text']) . '</span>';
    echo '<img src="img/' . htmlspecialchars($row['name']) . '.jpg">';
    echo '<span class="bottom">' . htmlspecialchars($row['bottom_text']) . '</span>';
    echo '</div>';
}

$db = null;