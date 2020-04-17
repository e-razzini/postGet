<?php
require './Classes/Usuario.php';

use Classes\Usuario;

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$param = filter_input_array(INPUT_GET, FILTER_DEFAULT);


//$param['codigo'];
$getCod = $_GET['codigo'];

if (isset($data['editar'])) {

// $codigo =$param['codigo'] ;
   
 $usu->editar($getCod,$data['nome'],$data['email'],$data['login'],$data['senha']);     
}
if (isset($data['salvar'])) {    
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
    
        </head>
        <body>

                <div class="formulario">
                <div class="icon">
                    <img src="https://img.icons8.com/ios/100/000000/feather.png"/>
                </div>
                <h2>edit user</h2>
                <form method="post" action="editar.php">

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
                <input type="password" required name="password-Confirm" id="senha" />

                <button type="submit" name="salvar" id="salvar">save</button>

            </form>
            </div>
        </body>
    </html>
