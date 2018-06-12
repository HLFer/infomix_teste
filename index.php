<?php
include_once('db/Database.php');
$db = new Database();
$db->cadastro();
?>

<html>
<head>
    <link rel="icon" href="https://www.lojainfomix.com.br/media/favicon/default/favicon.png" type="image/x-icon">
    <title> Sistema de Cadastro - Infomix</title>

</head>

<body>
  <header>
    <?php include_once('views/header.php');?>
  </header>
<div class="container" align="center-align">
  <div id="corpo" class="row">
    <form class="col s12" action="" method="POST">

      <div class="input-field">

        <i class="material-icons prefix">account_circle</i>
        <input name="nome" placeholder="Digite seu nome" id="nome" type="text" class="validate">
        <label for="icon_prefix">Nome</label>

      </div>

      <div class="input-field">
        <i class="material-icons prefix">subdirectory_arrow_right</i>
        <input name="sobre_nome" placeholder="Digite seu sobrenome" id="sobre_nome" type="text" class="validate">
        <label for="last_name">Sobrenome</label>

      </div>

      <div class="input-field">
        <i class="material-icons prefix">email</i>
        <input name="email" placeholder="Digite seu e-mail" id="email" type="email" class="validate">
        <label for="icon_prefix">Email</label>
      </div>

      <div class="input-field">
        <i class="material-icons prefix">phone</i>
      <input name="telefone" placeholder="Ex.: (xx) x xxxx-xxxx" id="telefone" type="tel" class="telefone">
        <label for="icon_telephone">Telefone</label>
      </div>

      <div class="input-field">
        <i class="material-icons prefix">date_range</i>
        <input name="nascimento" id="nascimento" type="date" class="validate">
        <label for="icon_date_range">Data de Nascimento</label>
      </div>

      <div class="input-field center-align">
      <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
        <i class="material-icons right">send</i>
      </button>
    </div>
  </form>
  </div>
</div>
<footer class="page-footer blue darken-2">
  <?php include_once('views/footer.php'); ?>
</footer>

</body>

</html>
