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
				<h5>Botões</h5>
			</div>

			<div class="alinhaCem">
				
				<div class="col-one">
					<div class="uncol-one-pad"><h2>Submit</h2></div>
					<div class="alinhaCem">
						<div class="uncol-one-pad">
							<button type="submit" class="button-green">salvar</button>
							<button type="button" class="button-blue">azul</button>
							<button type="button" class="button-red">excluir</button>
							<button type="button" class="button-grey">cinza</button>
							<button type="button" class="button-yellow">aviso</button>
							<button type="button" class="button-white">salvar</button>
						</div>
					</div>
				</div>
			</div>

			<div class="alinhaCem">
				
				<div class="col-one">
					<div class="uncol-one-pad"><h2>link</h2></div>

					<div class="alinhaCem">
						<div class="uncol-two-pad">
							<a herf="#" class="button-fit-green float-left">salvar</a>
							<a herf="#" class="button-fit-blue float-left">azul</a>
							<a herf="#" class="button-fit-red float-left">excluir</a>
							<a herf="#" class="button-fit-grey float-left">cinza</a>
							<a herf="#" class="button-fit-yellow float-left">aviso</a>
							<a herf="#" class="button-fit-white float-left">salvar</a>
						</div>

						<div class="uncol-two-pad">
							<a herf="#" class="button-green">salvar</a>
							<a herf="#" class="button-blue">azul</a>
							<a herf="#" class="button-red">excluir</a>
							<a herf="#" class="button-grey">cinza</a>
							<a herf="#" class="button-yellow">aviso</a>
							<a herf="#" class="button-white">salvar</a>
						</div>
					</div>
				</div>
			</div>


			<div class="alinhaCem">
				
				<div class="col-one">
					<div class="uncol-one-pad"><h2>Paginação</h2></div>

					<div class="alinhaCem">
						<div class="uncol-one-pad">
							<div class="dataTables_paginate">
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">5</a>
								<a href="#">6</a>
								<a href="#">7</a>
							</div>
						</div>
					</div>
				</div>
			</div>
								
				
			

		
		</div>
	</div> <!-- container -->
</div>

<?php include ("includes/script-footer.php");?>

</body>
</html>
