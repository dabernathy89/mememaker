<?php

include 'class-meme.php';

$form_data = $_POST;

$meme = new Meme($form_data['meme'], $form_data['meme-top-text'], $form_data['meme-bottom-text']);
$meme->generate();
echo "Done creating meme!";

?>