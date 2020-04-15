
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">             
        <link rel="stylesheet" href="css/style.css">
        <title>cadastro</title>
    </head>
    <body>
        <div class="container">
 <div class="formulario">
          <div class="icon">
                 <img src="https://img.icons8.com/ios/100/000000/feather.png"/>         
            </div>
            <form method="post" action="cadastrar-usuario.php">
             
            <label for="name">name</label>            
            <input type="text" required name="name" id="name"/>
            <br/><br/>

            <label for="E-mail">E-mail</label>
            <input type="text" required name="E-mail" id="E-mail" />
            <br/><br/>

            <label for="Login">login</label>
            <input type="text" required name="login" id="login"  />
            <br/><br/>

            <label for="password">password</label>
            <input type="password" required name="password" id="password" />

            <label for="password-Confirm">password Confirm</label>
            <input type="password" required name="Confirm" id="Confirm" />

            <button type="submit" name="salvar" id="salvar">save</button>

        </form>
        </div>
        </div>
    </body>
</html>
