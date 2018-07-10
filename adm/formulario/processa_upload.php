<?php
// A) Pasta de destino das fotos
$Destino = '';
// B) Obtém dados do upload
$Fotos = $_FILES['fotos'];
// Contagem de fotos enviadas
$Conta = 0;

// C) Itera sobre as enviadas e processa as validações e upload
for($i = 0; $i < sizeof($Fotos); $i++)
{
	// D) Passa valores da iteração atual
	$Nome	= $Fotos['name'][$i];
	$Tamanho = $Fotos['size'][$i];
	$Tipo	= $Fotos['type'][$i];
	$Tmpname = $Fotos['tmp_name'][$i];

	// Verifica se tem arquivo enviado
	if($Tamanho > 0 && strlen($Nome) > 1)
	{
		// E) Verifica se é uma imagem
		if(preg_match('/^image\/(gif|jpeg|jpg|png)$/', $Tipo))
		{
			// Caminho completo de destino da foto
			$Caminho = $Destino . $Nome;

			// F) Tudo OK! Move o upload!
			if(move_uploaded_file($Tmpname, $Caminho))
			{
				echo 'Foto' . ($i+1) . ' enviada.<br/>';
				
				// Faz contagem de enviada com sucesso
				$Conta++;
					$query = "INSERT INTO promocao VALUES('','$tituloalbum','$fotos0','$fotos1','$fotos2','$chamada')";
								
									mysql_query($query,$conexao);
									
									
									$tituloalbum = "";
									$fotos0 = "";
									$fotos1 = "";
									$fotos2 = "";
									
									$chamada = "";
				
			}			
			else // Erro no envio
			{
				// $i+1 porque $i começa em zero
				echo 'Não foi possível enviar a foto #' . ($i+1) . '<br/>';
			}
		}
	}
}

if($Conta) // Imagens foram enviadas, ok!
{
	echo '<br/>Foi(am) enviada(s) ' . $Conta . ' foto(s).';
}
else // Nenhuma imagem enviada, faz alguma ação
{
	echo 'Você não enviou fotos!';
}
?>