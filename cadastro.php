<?php
	include("cadastro_header.php");
?>

<body>
	<form>
		<div class="nomeAtividade form-group">
			<label for="exampleFormControlNome">Nome da Atividade</label>
			<input class="form-control" type="text" placeholder="Ex:Stranger Things" required>
		</div><!--Final da DIV NOME DE ATIVIDADE-->
		
		<div class="descricaoAtividade form-group">
			<label for="exampleFormControlDescricao">Insira a Descrição da Atividade</label>
			<textarea name="descricao" class="form-control textbox" rows="3" placeholder="Ex:Não dá pra entender Kingdom Hearts!" ></textarea>
		</div>

		<div class="row">
			<div class="tipoAtividade form-group">
				<!--<select class="js-example-basic-single" name="tipo">
					<option value="filme">Filme</option>
					<option value="anime">Anime</option>
					<option value="serie">Série</option>
					<option value="jogo">Jogo</option>
					<option value="livro">Livro</option>
					<option value="hq">HQ/Mangá</option>
					<option value="tarefa">Tarefa</option>
					<option value="outros">Outros</option>
				</select>-->	
			<select class="custom-select form-control" id="formControlSelectTipo" required>
					<option selected>Selecione o Tipo de Atividade</option>
					<option value="filme">Filme</option>
					<option value="anime">Anime</option>
					<option value="serie">Série</option>
					<option value="jogo">Jogo</option>
					<option value="livro">Livro</option>
					<option value="hq">HQ/Mangá</option>
					<option value="tarefa">Tarefa</option>
					<option value="outros">Outros</option>
				</select>
			</div><!--Final da DIV TIPO DE ATIVIDADE-->
				
			<div class="statusAtividade form-group">
				<select class="custom-select form-control" id="formControlSelectStatus" required>
					<option selected>Defina um Status</option>
					<option>Fazendo</option>
					<option>Completo</option>
					<option>Em Pausa</option>
					<option>Dropado</option>
					<option>Ainda a Fazer</option>
					<option>Lista de Desejos</option>
				</select>
			</div><!--Final da DIV TIPO DE ATIVIDADE-->
			
			<div class="serieAtividade form-group col-xs-12 col-md-6">
				<label for="exampleFormControlDescricao">Insira a Temporada da Série</label>
				<input class="form-control" type="text" placeholder="Ex:Terceira Temporada de LOST">
			</div>
			

		</div><!--Final da DIV ROW-->

		<div class="form-group botoes">
			<button href="index.php" type="submit" class="btn btn-primary"role="button" onclick="alert('Nova Atividade Registrada com Sucesso!')">Salvar</button>
			<input class="btn btn-primary" type="reset" onclick="alert('Preencha Novamente!')" value="Limpar">
			<a href="index.php" type="link" class="btn btn-primary" role="button">
                Voltar
            </a>		
		</div>

	</form>
</body>
<?php
	include("cadastro_footer.php");
?>