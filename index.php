<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Seu Cardápio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
<header class="cima">
  <nav class="navbar bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color:whitesmoke">Home Cardapio</a>
    </div>
    <h5 class="um" style="color: white;">
      <?php
      include 'auth/auth.php'
      ?>
    </h5>
  </nav>

</header>
<main class="meio">
  <div class="container">
    <form action="#" method="POST">
      <div class="mb-3 row mx-auto">
        <input class="form-control sm text-center" name="nameUser" type="text" placeholder="digite seu nome aqui" aria-label="default input example">

      </div>

      <div class="mb-3 row mx-auto">
        <input class="form-control sm text-center" name="cellphoneUser" type="tel" MAXLENGTH="11" placeholder="digite seu telefone ex: 85988888888" aria-label="default input example">

      </div>
      <div class="d-grid gap-2">
        <button class="btn btn-primary">Button</button>
      </div>
      <span style="color: red; margin: 1vh">
        <?= $erro['todos'] ?>
      </span>
    </form>
  </div>
</main>
<footer class="baixo">
  baixo
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>