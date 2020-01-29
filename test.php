<?php
    $link = mysqli_connect('localhost','root','');
    if (!$link){
        die('Could not connect to MYSQL: ' . mysqli_error());
    }

    $link->select_db("test");

    if(isset($_POST['novo_filme'])){

        if(isset($_POST['nome'])){
            $nome = $link->escape_string($_POST['nome']);

            if(isset($_POST['ano']) and is_numeric($_POST['ano'])){
                $ano = $link->escape_string($_POST['ano']);

                $query = "INSERT INTO `filmes` (`id`, `nome`, `ano`) VALUES (NULL, '$nome', '$ano')";
                $result = $link->query($query);

                if($link->affected_rows == 1){
                    echo("Filme Inserido com Sucesso!");
                } else {
                    echo("Falha ao Inserir o Filme no Banco de Dados!");
                }
            }
        }
    }

    include("test_header.php");
?>
    <body>
        <h1>Minha Lista de Filmes</h1>
        <ul>
            <?php
               if(isset($_GET['ano_inicial']) and is_numeric($_GET['ano_inicial'])){
                  $ano = $_GET['ano_inicial'];
               } else {
                   $ano = 0;
               }

               $query = $link->escape_string("SELECT * FROM `filmes` WHERE `ano` >" . (string) $ano);
               $result = $link->query($query);

               while($filme = $result->fetch_object()){
                   echo("<li>".$filme->nome." (".$filme->ano.")</li>");
               }
            ?>
            <li>
                <div class="row">
                    <form class="row" action="test.php" method="post">
                        <input class="form-control nome" type="text" placeholder="Nome" name="nome">
                        <input class="form-control ano" type="number" min="1900" max="2099" step="1" placeholder="Ano" name="ano" size="4" maxlength="4" >
                        <input class="btn btn-primary" role="button" type="submit" name="novo_filme" value = "Criar" onclick="alert('Nova Atividade Registrada com Sucesso!')">
                    </form>
                </div>
            </li>
        </ul>

        <form action="test.php" method="get">
            <input class="form-control" type="text" name="ano_inicial" placeholder="Busque pelo ano!" >
            <input class="btn btn-primary" role="button" type="submit" name="buscar" value="Buscar">
        </form>

        <?php
            if(isset($_GET['buscar'])){
               echo('<a href="test.php">Limpar busca</a>'); 
            }
        ?>

        <div class="botoes ">
            <a href="index.php" type="link" class="btn btn-primary" role="button">
                Voltar
            </a>
        </div>

    </body>
<?php
    include("test_footer.php");
    mysqli_close($link);
?>