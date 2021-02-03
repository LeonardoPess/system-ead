<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EAD</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= INCLUDE_PATH ?>css/style.css">
</head>
<body>
<base base="<?= INCLUDE_PATH ?>">

<header>
  <div class="container">
    <div class="logo"><a href="<?= INCLUDE_PATH ?>">EAD</a></div>
    <div class="desktop">
      <ul>
        <li><a href="">Conheça o curso</a></li>
        <li><a href="">Sobre</a></li>
        <li><a href="">Contato</a></li>
        <?php
          if(isset($_SESSION['login_aluno'])){
            echo '<li><a href="'.INCLUDE_PATH.'?logout">Logout</a></li>';
          };
        ?>
      </ul>
    </div><!--desktop-->
  </div><!--container-->
</header>

  