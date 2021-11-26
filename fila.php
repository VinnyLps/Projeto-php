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
        <h1>Tela de Fila</h1>
        
    </header>

    <main class="principal">

        <div class="pesquisa">
            <ul>
                <a href="cadastro.php"><button>Cadastro</button></a>
                <a href=""><button>Fila</button></a>
                <a href=""><button>Relatorio</button></a>
                <a href="estoque.php"><button>Estoque</button></a>
                <a href="caixa.php"><button>Caixa</button></a>
            </ul>

        </div>

        <div class="conteudo">
        <table border="1">
    <h1>Ordem de Serviço</h1>
    <tr>
        <th>cod</th>
        <th>Nome</th>
        <th>placa</th>
        <th>Veiculo</th>
        <th>Entrada horario</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Denilso</td>
        <td>HGJ-5698</td>
        <td>sandeiro</td>
        <td>07:00</td>
    </tr>
    <tr>
        <td>2</td>
        <td>ronaldo</td>
        <td>GFD-5455</td>
        <td>vectra</td>
        <td>07:13</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Neto</td>
        <td>HJN-5441</td>
        <td>onix</td>
        <td>08:00</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Augusto</td>
        <td>LPK-1028</td>
        <td>hb20</td>
        <td>08:30</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Lucca</td>
        <td>ASV-8564</td>
        <td>cruze</td>
        <td>09:00</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Marcio</td>
        <td>KLM-5469</td>
        <td>santana</td>
        <td>10:08</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Marlon</td>
        <td>SPE-8741</td>
        <td>fiesta</td>
        <td>11:37</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Nathan</td>
        <td>MEE-8712</td>
        <td>city</td>
        <td>12:45</td>
    </tr>
</table>
        </div>
    </main>

    <footer class="rodape">
        <?= date('Y'); ?>
    </footer>

</body>

</html>