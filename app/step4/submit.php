<?php

$meme = new Meme('My Awesome Meme Name');
var_dump($meme);

class Meme {

    protected $name = '';

    function __construct($name) {
        $this->name = $name;
    }
}

?>