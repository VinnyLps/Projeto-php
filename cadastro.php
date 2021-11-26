<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF8_encode">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilos1.css">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Tela de Cadastro</title>
</head>

<body>

    <header class="cabecalho">
        <h1>Tela de Cadastro</h1>
        
    </header>

    <main class="principal">

        <div class="pesquisa">
            <ul>
                <a href=""><button>Cadastro</button></a>
                <a href="fila.php"><button>Fila</button></a>
                <a href=""><button>Relatorio</button></a>
                <a href="estoque.php"><button>Estoque</button></a>
                <a href="caixa.php"><button>Caixa</button></a>
            </ul>

        </div>

        <div class="conteudo">
            <form action="recebe.php" method="post">

            <h1>Dados do Cliente</h1>

<pre>
<label for="nome">Nome</label>                                       <label for="cpf/rg">CPF/RG</label>                                    <label for="endereco">Endereço</label>
<input type="text" name="nome" id="nome" placeholder="Digite o nome">                 <input type="text" name="cpf/rg" id="cpf/rg" placeholder="Digite o CPF">                 <input type="text" name="Endere?o" id="Endere?o" placeholder="Digite o Endereço">


<label for="nome">Data Nacimento</label>                       <label for="celular">Celular</label>
<input type="text" name="endereco" id="endereco" placeholder="Digite a Data">                 <input type="text" name="celular" id="celular" placeholder="Digite o celular">

<hr>
<h1>Dados do Veiculo</h1>
<label for="placa">Placa</label>                                        <label for="nome">Marca</label>                                      <label for="cor">Cor</label>                                           <label for="modelo">Modelo</label>
<input type="text" name="Placa" id="Placa" placeholder="Digite a Placa do veiculo">                 <input type="text" name="Marca" id="Marca" placeholder="Digite a Marca">                 <input type="text" name="cor" id="cor" placeholder="Digite a Cor">                 <input type="text" name="modelo" id="modelo" placeholder="Digite o Modelo">

observação 
<textarea name="obs" placeholder="digite"></textarea>

 <input type="submit">  <input type="reset">
</pre>
            </form>
        </div>
    </main>

    <footer class="rodape">
        <?= date('Y'); ?>
    </footer>

</body>

</html>