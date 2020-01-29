<?php
	//$link = mysqli_connect('localhost','root','');
    //if (!$link){
        //die('Could not connect to MYSQL: ' . mysqli_error());
    //}

    //$link->select_db("test");
	include("index_header.php");
?>
<header id="header">
    <div class="giantTitle">
        <h1>Checkpoint</h1>
    </div>
    <div class="subTitle">
        <h4>Guarde o Seu Progresso de Diversas Mídias!</h4>
    </div>

    <div class="botoes">
        <a href="cadastro.php" type="link" class="btnHome btn-outline-light btn-lg" aria-pressed="true" role="button">
            Criar Atividade</a>
        <a href="editar.php" type="link" class="btnHome btn-outline-light btn-lg" aria-pressed="true" role="button">
            Editar Atividades</a>
        <a href="test.php" type="link" class="btnHome btn-outline-light btn-lg" aria-pressed="true" role="button">
            Cadastrar Filmes</a>
        <a href="filmes.php" type="link" class="btnHome btn-outline-light btn-lg" aria-pressed="true" role="button">
            Filmes</a>
    </div>

</header>

<body>


</body>
<?php
	include("index_footer.php");
	//mysqli_close($link);
?>