<?php

  require_once('../Modelo/CriaConexao.php');
  require_once('../Modelo/TabelaUsuários.php');

  $id = $_REQUEST['id'];
  Excluir($id);

  header('Location: Listagem_Usuarios.php');

?>
