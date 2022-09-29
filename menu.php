<!doctype html>
<html lang="en">
<?php
session_start();
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Seu Cardápio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <style>
    body {
      height: 100vh;
      display: grid
    }
    footer {
      background-color: black;
    }

    @media (max-width: 600px) {
      h5 {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>
  <header class="cima">
    <nav class="navbar navbar-expand-lg bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color:whitesmoke">Home Cardapio</a>
      </div>
      <?php
        if ($_SESSION['name']) {
          require_once('component/user.php');
        }
      ?>
    </nav>
  </header>
  <main class="meio">
    <div class="container">
      <?php include 'DB/data.php'; ?>
      <?php foreach ($database as $item) : ?>
        <ul>
          <li>
            <?= $item['id'] . $item['name'] ?>
          </li>
        </ul>
      <?php endforeach ?>
    </div>
  </main>
  <footer class="baixo">

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>