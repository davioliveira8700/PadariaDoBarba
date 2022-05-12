<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form method="POST", action="/index.php/produto/salvaralteracao">
    
    <input type="hidden" name="id" value="<?php echo $produto->id; ?>"/> 
        <br/>

    <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $produto->nome; ?>"/> 
        <br/>

       <label>Tipo de Produto</label>
       <input type="text" name="tipo_produto"  value="<?php echo $produto->tipo_produto; ?>"/>
       <br/>

       <label>Valor</label>
       <input type="text" name="valor" value="<?php echo $produto->valor; ?>"/>
       <br/>
       <label>Imagem</label>
       <input type="text" name="imagem" value="<?php echo $produto->imagem; ?>"/>
       <br/>

       <br/>
       <input type="submit" value="Salvar"/>
       <a href='/index.php/produto'>Voltar/Cancelar></a>

    </form>

</body>
</html>