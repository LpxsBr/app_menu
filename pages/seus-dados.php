<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cardápio - Seus Dados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form action="#" method="get"enctype="multipart/form-data">
      <div class="row">
        <div class="form-group col-lg-4">
          <input type="file" class="form-control" name="" id="" placeholder="email">
        </div>
      </div>
    <hr class="divider">
    <span> PERFIL </span>
      <div class="row">
        <div class="form-group col-lg-5">
          <label for="nameUser">Nome</label>
          <input type="text" class="form-control" name="nameUser" id="nameUser" placeholder="nome">
        </div>
        <div class="form-group col-lg-5">
          <label for="lastnameUser">Sobrenome</label>
          <input type="text" class="form-control" name="lastnameUser" id="nameUser" placeholder="sobrenome">
        </div>
        <div class="form-group col-lg-2">
          <label for="birthdateUser">Número do celular</label>
          <input type="text" class="form-control" name="birthdateUser" id="birthdateUser" placeholder="data de nascimento">
        </div>
      </div>
      <hr class="divider">
      <span> CONTATO </span>
      <div class="row">
        <div class="form-group col-lg-3">
          <label for="">E-mail</label>
          <input type="email" class="form-control" name="" id="" placeholder="email">
        </div>
        <div class="form-group col-lg-3">
          <label for="">Celular</label>
          <input type="text" class="form-control" name="" id="" placeholder="núm celular">
        </div>
        <div class="form-group col-lg-3">
          <label for="birthdateUser">Facebook</label>
          <input type="text" class="form-control" name="" id="" placeholder="facebook">
        </div>
        <div class="form-group col-lg-3">
          <label for="">Instagram</label>
          <input type="text" class="form-control" name="" id="" placeholder="instagram">
        </div>
      </div>
      <hr class="divider">
    </form>
    
    <?php
      include __DIR__.'/../config/api/cep.php';
    ?>

    <form method="post" action="#">
      <span> ENDEREÇO </span>
      <div class="row">
          <div class="form-group col-lg-3">
            <label for="postalcode">CEP</label>
            <input type="number" class="form-control" name="postalcode" id="" MAXLENGTH="8" placeholder="CEP" value="<?= $vcep ?>">
          </div>
          <div class="form-group col-lg-2">
          <label for="postalcode"></label>
          <button class="btn btn-primary ">Buscar cep</button>
          </div>
          <div class="form-group col-lg-4">
            <label for="adress">Endereço</label>
            <input type="text" class="form-control" name="adress" id="" placeholder="" value="<?= $adress ?>">
          </div>
          <div class="form-group col-lg-3">
            <label for="homenumber">Número</label>
            <input type="number" class="form-control" name="homenumber" id="" placeholder="Home number" value="">
          </div>
      </div>
      <div class="row">
          <div class="form-group col-lg-3">
              <label for="homenumber">Complemento</label>
              <input type="text" class="form-control" name="" id="" placeholder="complemento" value="">
            </div>
          <div class="form-group col-lg-3">
              <label for="">Bairro</label>
              <input type="text" class="form-control" name="" id="" placeholder="" value="<?= $neighborhood ?>">
            </div>
          <div class="form-group col-lg-3">
              <label for="">Cidade</label>
              <input type="text" class="form-control" name="" id="" placeholder="" value="<?= $city ?>">
            </div>
          <div class="form-group col-lg-3">
              <label for="">Estado</label>
              <input type="text" class="form-control" name="" id="" placeholder="" value="<?= $state ?>">
            </div>
      </div>
    </form>
  </div>
  <!-- <div class=dados-pessoais>
    
  </div> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>