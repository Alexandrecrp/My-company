<?php
// Obtém quantidade enviada. Perceba que verifica se é um número inteiro,
// caso contrário, é usada uma quantidade padrão, 5.

		$Quantidade = (isset($_POST['quantidade']) && is_int(intval($_POST['quantidade']))) ? (int)$_POST['quantidade'] : 5;
		$tituloalbum = $_POST['tituloalbum'];
		$chamada = $_POST['chamada'];
		// Abre formulário de upload
		echo '<form action="processa_upload.php" method="POST" enctype="multipart/form-data">';
		echo '<b>Envio das fotos</b><br />';

		// Imprime os campos para upload, de acordo com a quantidade pedida
		for($i = 1; $i <= $Quantidade; ++$i)
		{
			echo 'Foto #' . $i . ': <input type="file" name="fotos[]" /><br/>';
		}
		
		echo 'O' . $tituloalbum . ': <input type="text" name="tituloalbum" /><br/>';
		echo '' . $tituloalbum . ': <input type="text" name="tituloalbum" /><br/>';
		// Fecha formulário
		echo '<br /><input type="submit" value="OK"/>';
		echo '</form>';
?>