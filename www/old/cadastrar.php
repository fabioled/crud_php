<?php

?>
<meta charset="UTF-8">
<form name="dadosPessoa" action="conexao.php" method="POST">
	<table border="1">		
		<tbody>
			<tr>
				<td>Identificador:</td>				
				<td> <input type="text" name="id"></ins></td>
			</tr>	
			<tr>
				<td> Nome </td>
				<td> <input type="text" name="Nome"></td>
			</tr>	
			<tr>
				<td><input type="hidden" name="acao" value="cadastrar" /></td>
				<td><input type="submit" name="enviar" value="enviar" /></td>
			</tr>
		</tbody>
	</table>

</form>	