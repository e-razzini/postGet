<?php
use Classes\Usuario;
require './Classes/Usuario.php';

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (isset($data['salvar'])) {
    $usu = new Usuario();   
    $usu->inserir($data['nome'], $data['email'], $data['login'], $data['senha']);
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="import" href="">
        <title>cadastro</title>

        	 <?php if (isset($data['salvar'])) {?>
          <script>
      alert("usuario inserido com sucesso!");
      </script>
    <?php }?>
    </head>
    <body>

 <div class="formulario">
            <div class="icon">
                 <img src="https://img.icons8.com/ios/100/000000/feather.png"/>
            </div>

            <form method="post" action="adicionar.php">

            <label for="nome">name</label>
            <input type="text" required name="nome" id="nome"/>
            <br/><br/>

            <label for="email">E-mail</label>
            <input type="email" required name="email" id="email" />
            <br/><br/>

            <label for="login">login</label>
            <input type="text" required name="login" id="login"  />
            <br/><br/>

            <label for="senha">password</label>
            <input type="password" required name="senha" id="senha" />

            <label for="password-Confirm">password Confirm</label>
            <input type="password" required name="password-Confirm" id="password-Confirm" />

            <button type="submit" name="salvar" id="salvar">save</button>

        </form>
        </div>
    </body>
</html>
