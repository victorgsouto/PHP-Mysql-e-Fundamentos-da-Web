<?php include("cabecalho.php");
	include("conecta.php");
	include("banco-categoria.php");
	include("logica-usuario.php");
verificaUsuario();

	$categorias = listaCategoria($conexao);
	
	?>

 	<h1>Formulário de cadastro</h1>
 	
	<form action="adiciona-produto.php" method="post">
		<table class="table">
			<tr>
				<td> Nome: </td>
				<td><input type="text" name="nome" class="form-control" /><br/></td>
			</tr>

			<tr>
				<td>Preço:</td>
				<td><input type="number" name="preco" class="form-control" /><br/></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="checkbox" name="usado" value="true">
					Usado
				</td>
			</tr>
			<tr>
				
			    <td>Categoria</td>
			    <td>
			    <select name="categoria_id" class="form-control">
			    	 <?php foreach($categorias as $categoria) : ?>
			        <option name="categoria_id" value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
			        <?php endforeach ?>

       			 </select>
			    </td>
			</tr>
			<tr>
				<td> Descricao: </td>
				<td>
					<textarea name="descricao"  class="form-control"></textarea>

				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" class="btn btn-primary" />
					Cadastra
					</button>
				</td>
			</tr>


		</table>
	</form>

<?php include("rodape.php"); ?>
