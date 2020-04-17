<?php
use Classes\Usuario;
require './Classes/Usuario.php';
$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$param = filter_input_array(INPUT_GET, FILTER_DEFAULT);

if(isset($data['salvar'])){

  $usuario = new Usuario(); 
  $usuario->editar($param['codigo'],$data['nome'],$data['email'],$data['login'],$data['senha']);   
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
                <form method="post" action="editar.php?codigo=<?php echo $param['codigo']?>">

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

                <label for="Confirma">password Confirm</label>
                <input type="password" required name="Confirma" id="senha" />

                <button type="submit" name="salvar" id="salvar">save</button>

            </form>
            </div>
        </body>
    </html>
