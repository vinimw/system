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
				<h5>Formulários</h5>
			</div>

			<div class="alinhaCem">
				<div class="col-one">
					<div class="alinhaCem">
						<div class="uncol-one">
							<h3>Preencha os campos do formulário</h3>
						</div>
					</div>
					

					<form class="form" name="form" action="" method="get" onsubmit="return validar(this);">

						<div class="alinhaCem">
							<div class="uncol-one">
								<label class="form-label">CK Editor: <span class="label-required">*</span></label>
								<div class="alinhaCem">
								 	<textarea class="" name="noticia" id="noticia"></textarea>
								</div>
							</div>
						</div>


						<div class="alinhaCem">
							<div class="uncol-two">
								<label class="form-label">CK Editor: <span class="label-required">*</span></label>
								<div class="alinhaCem">
								 	<textarea name="noticia2" ></textarea>
								</div>
							</div>

							<div class="uncol-two">
								<label class="form-label">CK Editor: <span class="label-required">*</span></label>
								<div class="alinhaCem">
								 	<textarea name="noticia3"></textarea>
								</div>
							</div>

						</div>


						<div class="alinhaCem">
							<div class="uncol-one">
								<button type="submit" class="button-green">salvar</button>
								
							</div>
						</div>

						

						

					</form>
				</div>
				
			</div>

			
		</div>
	</div> <!-- container -->
</div>

<script type="text/javascript">
			//<![CDATA[

				CKEDITOR.replace( 'noticia',
					{
						skin : 'kama',
						

					});
					CKEDITOR.config.toolbar = [
   ["Source"],
 ["Bold","Italic","Underline","StrikeThrough","-","Undo","Redo","-","Cut",
"Copy","Paste","PasteText","PasteFromWord","Find","Replace","-",
"Outdent","Indent","NumberedList","BulletedList"],
   ["-","JustifyLeft","JustifyCenter","JustifyRight","JustifyBlock"],
   ["Image","Table","-","Link","TextColor","FontSize"],
 ];


 CKEDITOR.replace( 'noticia2',
					{
						skin : 'kama',
						

					});
					CKEDITOR.config.toolbar = [
   ["Source"],
 ["Bold","Italic","Underline","StrikeThrough","-","Undo","Redo","-","Cut",
"Copy","Paste","PasteText","PasteFromWord","Find","Replace","-",
"Outdent","Indent","NumberedList","BulletedList"],
   ["-","JustifyLeft","JustifyCenter","JustifyRight","JustifyBlock"],
   ["Image","Table","-","Link","TextColor","FontSize"],
 ];


CKEDITOR.replace( 'noticia3',
					{
						skin : 'kama',
						

					});
					CKEDITOR.config.toolbar = [
   ["Source"],
 ["Bold","Italic","Underline","StrikeThrough","-","Undo","Redo","-","Cut",
"Copy","Paste","PasteText","PasteFromWord","Find","Replace","-",
"Outdent","Indent","NumberedList","BulletedList"],
   ["-","JustifyLeft","JustifyCenter","JustifyRight","JustifyBlock"],
   ["Image","Table","-","Link","TextColor","FontSize"],
 ];

			//]]>
			</script>

<?php include ("includes/script-footer.php");?>

</body>
</html>