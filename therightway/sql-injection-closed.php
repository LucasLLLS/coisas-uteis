<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div>Formulário de Login</div>
        <div>
            <form method="post" action="modelo.php">
                <label>Nome:</label><br/>
                <input type="text" name="nome" value=""  /><br />
                <label>Senha:</label><br/>
                <input type="text" name="senha" value=""  /><br />
                <input type="submit" value="submit" name="enviar" />                
                <input type="reset" value="limpar" name="limpar" />                
            </form>
        </div>
    </body>
</html>