<?php $uf=array("lavagem simples","lavagem completa","lavagem + polimento","lavagem a vapor","purifica��o de ar","higieniza��o");
sort($uf);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF8_encode">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilos1.css">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Curso PHP</title>
</head>

<body>

    <header class="cabecalho">
        <h1>Tela de Principal</h1>
        <h2></h2>
    </header>

    <main class="principal">

        <div class="pesquisa">
            <ul>
                <a href="cadastro.php"><button>Cadastro</button></a>
                <a href="fila.php"><button>Fila</button></a>
                <a href=""><button>Relatorio</button></a>
                <a href="estoque.php"><button>Estoque</button></a>
                <a href="caixa.php"><button>Caixa</button></a>
            </ul>

        </div>

        <div class="conteudo">
        <form action="recebe.php" method="post">

        <label for="toggle-1">
        <input type="text" name="buscar" id="topo-buscar" />
    <button>Buscar</button>
</label>
<input type="checkbox" id="toggle-1">
<div id="mostra">
<h1>Dados do Cliente</h1>

<pre>
<label for="nome">Nome</label>                                          <label for="cpf/rg">CPF/RG</label>                                    <label for="endereco">Endere�o</label>
<input type="text" name="nome" id="nome" placeholder="Digite seu nome">                    <input type="text" name="cpf/rg" id="cpf/rg" placeholder="Digite seu nome">                 <input type="text" name="Endere�o" id="Endere�o" placeholder="Digite seu Endere�o">

<label for="nome">Data Nacimento</label>                          <label for="celular">Celular</label>
<input type="text" name="endereco" id="endereco" placeholder="Digite seu Endere�o">                     <input type="text" name="celular" id="celular" placeholder="Digite seu celular">


<label for="placa">Placa</label>                                           <label for="nome">Marca</label>                                       <label for="cor">Cor</label>
<input type="text" name="Placa" id="Placa" placeholder="Digite a Placa do veiculo">                     <input type="text" name="Marca" id="Marca" placeholder="Digite seu Endere�o">                 <input type="text" name="cor" id="cor" placeholder="Digite seu Endere�o">

<label for="modelo">Modelo</label>
<input type="text" name="modelo" id="modelo" placeholder="Digite seu Endere�o">


observa��o 
<textarea name="obs" placeholder="digite">digite</textarea>
<hr>
tipos de lavagens 
<select name="uf">   
        <?php
          foreach($uf as $pos=>$valor)
            echo "<option value='$valor'>$valor</option>";
        ?>
        </select> 

<input type="submit">  <input type="reset">
</pre>
</div>


</form>
        </div>
    </main>

    <footer class="rodape">
        <?= date('Y'); ?>
    </footer>

</body>

</html>