<?php session_start("5530"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema Administrativo</title>

<?php include ("includes/style.php");?>


</head>

<body>



<?php include ("includes/top-logado.php");?>

<div class="enquadraAlinha">
	<?php include ("includes/menu.php"); ?>

	<div class="container">
		<div class="enquadraAlinhascroll">
			<div class="col-first">
				<h1>Painel administrativo</h1>
				<h5>Tabelas</h5>
			</div>

			<div class="alinhaCem">
				<div class="col-one">
					
					
					<table cellpadding="0" cellspacing="0" border="0" class="table-list" id="example" width="100%">
		<thead>
			<tr>
				<th align="center" width="5%">&nbsp;</th>
				<th align="left" width="50%">Nome</th>
				<th class="no-mobile" align="left" width="30%">Email</th>
				<th align="center" width="15%">Ações</th>
			</tr>
		</thead>
		<tbody>
			
			<tr>
				<td align="center"><input type="checkbox" id="excluir" name="excluir[]" value=""></td>
				<td>Nome da pessoa</td>
				<td class="no-mobile">email@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>
			

			<tr>
				<td align="center"><input type="checkbox" name="excluir[]" value=""></td>
				<td>Thabata</td>
				<td class="no-mobile">Thabata@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>

			<tr>
				<td align="center"><input type="checkbox" name="excluir[]" value=""></td>
				<td>Pedro</td>
				<td class="no-mobile">Pedro@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>

			<tr>
				<td align="center"><input type="checkbox" name="excluir[]" value=""></td>
				<td>Marcele</td>
				<td class="no-mobile">Marcele@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>

			<tr>
				<td align="center"><input type="checkbox" name="excluir[]" value=""></td>
				<td>Marcele</td>
				<td class="no-mobile">Marcele@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>

			<tr>
				<td align="center"><input type="checkbox" name="excluir[]" value=""></td>
				<td>Marcele</td>
				<td class="no-mobile">Marcele@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>

			<tr>
				<td align="center"><input type="checkbox" name="excluir[]" value=""></td>
				<td>Marcele</td>
				<td class="no-mobile">Marcele@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>

			<tr>
				<td align="center"><input type="checkbox" name="excluir[]" value=""></td>
				<td>Marcele</td>
				<td class="no-mobile">Marcele@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>

			<tr>
				<td align="center"><input type="checkbox" name="excluir[]" value=""></td>
				<td>Marcele</td>
				<td class="no-mobile">Marcele@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>

			<tr>
				<td align="center"><input type="checkbox" name="excluir[]" value=""></td>
				<td>Marcele</td>
				<td class="no-mobile">Marcele@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>

			<tr>
				<td align="center"><input type="checkbox" name="excluir[]" value=""></td>
				<td>Marcele</td>
				<td class="no-mobile">Marcele@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>

			<tr>
				<td align="center"><input type="checkbox" name="excluir[]" value=""></td>
				<td>Marcele</td>
				<td class="no-mobile">Marcele@dominio.com.br</td>
				<td align="center"><a href="#" class="icon-edit"><img src="images/edit.png"></a><a href="#" class="icon-delete"><img src="images/delete.png"></a></td>
			</tr>
		</tbody>
		
	</table>
					
				</div>
				
			</div>

		
		</div>
	</div> <!-- container -->
</div>

<?php include ("includes/script-footer.php");?>

</body>
</html>
