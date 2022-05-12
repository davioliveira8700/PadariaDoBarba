<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
</head>

    <h1>Listagem de Produtos da Padaria</h1>
    
      <a href="/index.php/produto/formnovo" 
     class="btn btn-primary"> Incluir Produto </a>
    <br></br>
    <table class='table table-striped">
         <tr>
            <th></th> 
            <th>Nome</th>
             <th>Perecivel</th>
             <th>Valor</th>
             <th>Tipo de Produto</th>
             
         </tr>
         <?php echo $tabela; ?>
     </table>

</html>