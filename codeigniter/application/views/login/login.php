<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="/index.php/login/validalogin"> 
        <label>Email</label>
        <input type="text" name="email" requirid/>
        <br/>
        <label>Senha</label>
        <input type="password" name="senha" requirid/>
        <br/>     
        <input type="submit" value="Efetuar login"/>   
    </form>
</body>
</html>