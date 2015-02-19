<!doctype html>
<?php
  include 'class-meme.php';

  $form_data = $_POST;

  if (array_key_exists('meme', $form_data)) {
    $meme = new Meme($form_data['meme'], $form_data['meme-top-text'], $form_data['meme-bottom-text']);
    $meme->generate();
  }
?>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Meme Maker</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
          </div><!--/.navbar-collapse -->
        </div>
      </nav>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1>Welcome to Meme Maker!</h1>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <form method="post" action="">

              <div class="form-group">
                <label for="meme-top-text">Top Text</label>
                <input type="text" class="form-control" name="meme-top-text" id="meme-top-text" required>
              </div>

              <div class="form-group">
                <label for="meme-bottom-text">Bottom Text</label>
                <input type="text" class="form-control" name="meme-bottom-text" id="meme-bottom-text" required>
              </div>

              <div class="form-group memes">
                <p><strong>Choose Meme:</strong></p>

                <label class="radio-inline">
                  <input type="radio" name="meme" id="conspiracy-keanu" value="conspiracy-keanu">
                  <img src="img/conspiracy-keanu.jpg">
                </label>

                <label class="radio-inline">
                  <input type="radio" name="meme" id="willy-wonka" value="willy-wonka">
                  <img src="img/willy-wonka.jpg">
                </label>

                <label class="radio-inline">
                  <input type="radio" name="meme" id="success-kid" value="success-kid">
                  <img src="img/success-kid.jpg">
                </label>

                <label class="radio-inline">
                  <input type="radio" name="meme" id="futurama-fry" value="futurama-fry">
                  <img src="img/futurama-fry.jpg">
                </label>
              </div>

              <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Generate!">
              </div>

            </form>
          </div>
          <div class="col-sm-6">
            <h3>Generated Memes:</h3>
            <?php include 'memes.php'; ?>
          </div>
        </div>
      </div> <!-- /container -->

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
    </body>
</html>
