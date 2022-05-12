<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar novo usuario</title>
</head>
<body>
    <form method="POST" action="/index.php/login/salvarregistro"> 
        <label>Email</label>
        <input type="text" name="email" requirid/>
        <br/>
        <label>Nome</label>
        <input type="text" name="nome" requirid/>
        <br/>     
        <input type="submit" value="Criar"/>   
    </form>
</body>
</html>