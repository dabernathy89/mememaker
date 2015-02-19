<?php
class Meme {

    protected $name = '';

    protected $top_text = '';

    protected $bottom_text = '';

    function __construct($name, $top_text, $bottom_text) {
        $this->name = $name;
        $this->top_text = $top_text;
        $this->bottom_text = $bottom_text;
    }

    public function generate() {
        $db = new PDO("mysql:host=localhost;dbname=mememaker", 'root', '123123');

        $statement = $db->prepare("INSERT INTO mememaker(name,top_text,bottom_text,meme_id) VALUES(:name,:top_text,:bottom_text,:meme_id)");
        $statement->execute(array(
            ':name' => $this->name,
            ':top_text' => $this->top_text,
            ':bottom_text' => $this->bottom_text,
            ':meme_id' => $this->name . '_' . time()
        ));

        $db = null;
    }
}