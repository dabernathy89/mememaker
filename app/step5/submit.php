<?php

$form_data = $_POST;

$meme = new Meme($form_data['meme'], $form_data['meme-top-text'], $form_data['meme-bottom-text']);
// $meme->generate();
// echo "Done creating meme!";

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

//
// For MySQL:
// first:
// mysql -u root
//
// then:
// SET PASSWORD = PASSWORD('123123');
//

?>