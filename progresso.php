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
				<h5>Ícones</h5>
			</div>

			<div class="alinhaCem">
				<div class="col-one">
					<div data-value="60" class="progress-Bar"><div></div></div>
					<div data-value="80" class="progress-Bar progress-back-red"><div></div></div>
					<div data-value="20" class="progress-Bar progress-back-blue"><div></div></div>
					<div data-value="40" class="progress-Bar progress-back-gray"><div></div></div>
					<div data-value="70" class="progress-Bar progress-back-green"><div></div></div>
				</div>

								
				
			</div>

		
		</div>
	</div> <!-- container -->
</div>

<?php include ("includes/script-footer.php");?>
<script type="text/javascript">

	$(".progress-Bar").each(function(){
		
		var valorBar = $(this).attr('data-value');
		progressBar(valorBar, $(this));

	});
	
	
	
</script>
</body>
</html>
