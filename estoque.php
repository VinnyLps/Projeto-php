<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF8_encode">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilos1.css">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Tela de Estoque</title>
</head>

<body>

    <header class="cabecalho">
        <h1>Tela de Estoque</h1>
        
    </header>

    <main class="principal">

        <div class="pesquisa">
            <ul>
                <a href="cadastro.php"><button>Cadastro</button></a>
                <a href="fila.php"><button>Fila</button></a>
                <a href=""><button>Relatorio</button></a>
                <a href=""><button>Estoque</button></a>
                <a href="caixa.php"><button>Caixa</button></a>
            </ul>

        </div>

        <div class="conteudo">
        <table border="1">
    <h1>Estoque</h1>
    <tr>
        <th>Código</th>
        <th>Produto</th>
        <th>Est.atual</th>
        <th>Pr.venda</th>
        <th>Pr.custo</th>
        <th>Custo Total</th>
        <th>U.D.venda</th>
        <th>U.D.compra</th>
        <th>Dias s/ venda</th>
        <th>Tot.vendas</th>
        <th>Cód.Tipo</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Cera Automotiva Pastosa</td>
        <td>60</td>
        <td>50,00</td>
        <td>30,00</td>
        <td>1.800</td>
        <td>06/11/2021</td>
        <td>26/10/2021</td>
        <td>15</td>
        <td>3</td>
        <td>0620201</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Cera Automotiva Líquida</td>
        <td>60</td>
        <td>35,00</td>
        <td>20,00</td>
        <td>1.200</td>
        <td>01/11/2021</td>
        <td>03/10/2021</td>
        <td>7</td>
        <td>9</td>
        <td>0610204</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Cera Automotiva Spray</td>
        <td>60</td>
        <td>25,00</td>
        <td>10,00</td>
        <td>600</td>
        <td>20/11/2021</td>
        <td>30/10/2021</td>
        <td>6</td>
        <td>23</td>
        <td>0220302</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Limpa vidros</td>
        <td>100</td>
        <td>30,00</td>
        <td>20,00</td>
        <td>2.000</td>
        <td>16/11/2021</td>
        <td>03/10/2021</td>
        <td>20</td>
        <td>10</td>
        <td>0354268</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Espuma multiuso</td>
        <td>50</td>
        <td>15,00</td>
        <td>5,00</td>
        <td>250,00</td>
        <td>25/11/2021</td>
        <td>03/10/2021</td>
        <td>15</td>
        <td>6</td>
        <td>0985214</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Espoja</td>
        <td>30</td>
        <td>20,00</td>
        <td>10,00</td>
        <td>300,00</td>
        <td>22/11/2021</td>
        <td>26/10/2021</td>
        <td>15</td>
        <td>12</td>
        <td>0549876</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Pano</td>
        <td>200</td>
        <td>15,00</td>
        <td>8,00</td>
        <td>1.600</td>
        <td>26/11/2021</td>
        <td>26/10/2021</td>
        <td>3</td>
        <td>86</td>
        <td>0352689</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Pretinho</td>
        <td>70</td>
        <td>25,00</td>
        <td>13,00</td>
        <td>910,00</td>
        <td>26/11/2021</td>
        <td>12/11/2021</td>
        <td>0</td>
        <td>35</td>
        <td>0147853</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Hidratante de couro</td>
        <td>45</td>
        <td>40,00</td>
        <td>20,00</td>
        <td>900,00</td>
        <td>05/11/2021</td>
        <td>03/10/2021</td>
        <td>10</td>
        <td>8</td>
        <td>0145287</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Silicone para painel</td>
        <td>50</td>
        <td>30,00</td>
        <td>18,00</td>
        <td>900,00</td>
        <td>23/11/2021</td>
        <td>26/10/2021</td>
        <td>5</td>
        <td>18</td>
        <td>0112548</td>
    </tr>
</table>
        </div>
    </main>

    <footer class="rodape">
        <?= date('Y'); ?>
    </footer>

</body>

</html>