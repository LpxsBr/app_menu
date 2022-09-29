<?php ob_start(); ?>

<?php
include __DIR__.'/../config/db/create.php';

if(isset($_POST['nameUser']) and isset($_POST['cellphoneUser'])  and $_POST['nameUser'] != "" and $_POST['cellphoneUser'] != ""){
    
    if($_POST['nameUser'] == 'admin' and $_POST['cellphoneUser'] == '12345678910'){
        //create();
        header('location: admin.php');
    }elseif(session_status() == PHP_SESSION_NONE){
        //session_start();
        $_SESSION['name'] = $_POST['nameUser'];
      
        header('location: menu.php');
    }
}else{
    $erro = array('nameUser' => 'insira um nome de usuario', 'cellphoneUser' => 'insira um telefone valido', 'todos' => 'Preencha todos dos campos');
}
?>

<?php ob_end_flush(); ?>