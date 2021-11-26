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
        <h1>Tela de Caixa</h1>
        
    </header>

    <main class="principal">

        <div class="pesquisa">
            <ul>
                <a href=""><button>Cadastro</button></a>
                <a href="fila.php"><button>Fila</button></a>
                <a href=""><button>Relatorio</button></a>
                <a href="estoque.php"><button>Estoque</button></a>
                <a href=""><button>Caixa</button></a>
            </ul>

        </div>

        <div class="conteudo">
            <form action="recebe.php" method="post">

            <h1>CAIXA</h1>

<pre>
<label for="codigo">Código</label>                                    
<input type="text" name="Código" id="Código" placeholder="Digite o Código"> 

<label for="quantidade">Quantidade</label>
<input type="text" name="Quantidade" id="Quantidade" placeholder="Digite a quantidade">

<label for="nome">Total</label>                    
<input type="text" name="Total" id="Total" placeholder="">

  <table class="w3-table">
  <table border="8">
    <tr>
      <th>item</th>
      <th>descrição do Produto</th>
      <th>Qtd</th>
      <th>Valor Unitario</th>
      <th>Total Item</th>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    
  </table>

<label for="nome">sub Total</label>                    
<input type="text" name="endereco" id="endereco" placeholder="">

</pre>
            </form>
        </div>
    </main>

    <footer class="rodape">
        <?= date('Y'); ?>
    </footer>

</body>

</html>