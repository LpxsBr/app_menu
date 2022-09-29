<?php

if(isset($_POST['postalcode']) and $_POST['postalcode'] != '') {
  $vcep = $_POST['postalcode'];
  $cep = $vcep;
  $url = file_get_contents("https://viacep.com.br/ws/".$cep."/json/");
  $json = json_decode($url);
  $adress = $json->logradouro;
  $city = $json->localidade;
  $state = $json->uf;
  $neighborhood = $json->bairro;
}else{
  $vcep = 'cep';
  $adress = 'endereço / logradouro';
  $city = 'cidade';
  $state = 'estado';
  $neighborhood = 'bairro';
}
?>
