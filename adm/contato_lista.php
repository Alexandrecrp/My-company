<?php
	include("header.php");
?>

		<!-- Begin page content -->
		
		<div class="container">
			<div class="page-header">
				<h1>Contatos do Site</h1>
			</div>
			
			<!-- Painel -->
			
			<div class="row">
			
			<?php
						//fazendo delete
					
						if(isset($_GET["id_excluir"]))
						{
							$id_contato=$_GET["id_excluir"];
							
							$query = "	DELETE FROM contato
										WHERE id_contato='$id_contato'";
						
							$resultado = mysql_query($query,$conexao);	
						}

						//fazendo uma consulta SQL e retornando os resultados

														
						$query = "  SELECT * 
									FROM contato
									ORDER BY id_contato DESC";
						
						$resultado = mysql_query($query,$conexao);

						
						while ($linha = mysql_fetch_array($resultado))
						{
					?>
							<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading"><strong><?php echo $linha["nome"]; ?></strong><span class="badge pull-right"><?php echo $linha["id_contato"]; ?></span></div>
						<div class="panel-body">
						
							<p>
								<strong>Nome:</strong><br>
								<?php echo $linha["nome"]; ?>
							</p>
							
							<p>
								<strong>Email:</strong><br>
								<?php echo $linha["email"]; ?>
							</p>
							
							<p>
								<strong>Telefone:</strong><br>
								<?php echo $linha["Telefone"]; ?>
							</p>
							
							
							<p>
								<strong>Celular:</strong><br>
								<?php echo $linha["celular"]; ?>
							</p>
							
							
							<p>
								<strong>Cidade:</strong><br>
								<?php echo $linha["cidade"]; ?>
							</p>
						
							<p>
								<strong>Assunto:</strong><br>
								<?php echo $linha["assunto"]; ?>
							</p>
							
							<p>
								<strong>Mensagem:</strong><br>
								<?php echo $linha["mensagem"]; ?> 
							</p>
							
							<a href="contato_lista.php?id_excluir=<?php echo $linha["id_contato"]; ?>" class="btn btn-danger btn-md" role="button">Excluir</a>
							
						</div>
					</div>
				</div>
							<?php
						}
						?>
			
			
		</div>

<?php
	include("footer.php");
?>