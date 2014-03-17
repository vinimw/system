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
				<div class="col-one scroll-margin">
					<div class="alinhaCem">
						<div class="uncol-one">
							<h3>Preencha os campos do formulário</h3>
						</div>
					</div>
					

					<form class="form" name="form" action="" method="get" onsubmit="return validar(this);">

						<div class="alinhaCem">
							<div class="uncol-one">
								<label class="form-label">Nome Completo: <span class="label-required">*</span></label>
								<input class="form-input-one required" type="text" name="nome" placeholder="Digite seu nome">
							</div>
						</div>

						<div class="alinhaCem">
							<div class="uncol-two">
								<label class="form-label">Telefone: <span class="label-required">*</span></label>
								<input class="form-input-two required telVal" type="text" name="nome">
							</div>

							<div class="uncol-two">
								<label class="form-label">Email: <span class="label-required">*</span></label>
								<input class="form-input-two required" type="text" name="email">
							</div>

						</div>

						<div class="alinhaCem">
							<div class="uncol-three">
								<label class="form-label">Nome: <span class="label-required">*</span></label>
								<input class="form-input-three required" type="text" name="nome">
							</div>

							<div class="uncol-three">
								<label class="form-label">Email:</label>
								<input class="form-input-three" type="text" name="aaa">
							</div>

							<div class="uncol-three">
								<label class="form-label">Senha:</label>
								<input class="form-input-three" type="text" name="aa">
							</div>

						</div>



						<div class="alinhaCem">
							<div class="uncol-one">
								<label class="form-label">Nome:</label>
								<select class="form-select-one">
									<option>Selecione</option>
									<option>Opção 1</option>
									<option>Opção 2</option>
								</select>
							</div>
						</div>

						<div class="alinhaCem">
							<div class="uncol-two">
								<label class="form-label">Nome:</label>
								<select class="form-select-two">
									<option>Selecione</option>
									<option>Opção 1</option>
									<option>Opção 2</option>
								</select>
							</div>

							<div class="uncol-two">
								<label class="form-label">Email:</label>
								<select class="form-select-two">
									<option>Selecione</option>
									<option>Opção 1</option>
									<option>Opção 2</option>
								</select>
							</div>

						</div>

						<div class="alinhaCem">
							<div class="uncol-three">
								<label class="form-label">input-file:</label>
								<input type="file" name="file" class="input-file">
							</div>

							<div class="uncol-three">
								<label class="form-label">Email:</label>
								<select class="form-select-three">
									<option>Selecione</option>
									<option>Opção 1</option>
									<option>Opção 2</option>
								</select>
							</div>

							<div class="uncol-three">
								<label class="form-label">Email:</label>
								<select class="form-select-three">
									<option>Selecione</option>
									<option>Opção 1</option>
									<option>Opção 2</option>
								</select>
							</div>

						</div>

						

						<div class="alinhaCem">
							<div class="uncol-one">
								<label class="form-label">Input Check:</label>
								<div class="uncol-three-nmg"><label class="form-label"><input type="checkbox" class="input-check" name="comp[]" value="1" /><span class="input-check-name">input-check</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="checkbox" class="input-check" name="comp[]" value="1" /><span class="input-check-name">input-check</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="checkbox" class="input-check" name="comp[]" value="1" /><span class="input-check-name">input-check</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="checkbox" class="input-check" name="comp[]" value="1" /><span class="input-check-name">input-check</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="checkbox" class="input-check" name="comp[]" value="1" /><span class="input-check-name">input-check</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="checkbox" class="input-check" name="comp[]" value="1" /><span class="input-check-name">input-check</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="checkbox" class="input-check" name="comp[]" value="1" /><span class="input-check-name">input-check</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="checkbox" class="input-check" name="comp[]" value="1" /><span class="input-check-name">input-check</span></label></div>
							</div>

						</div>


						<div class="alinhaCem">
							<div class="uncol-one">
								<label class="form-label">Input Radio:</label>
								<div class="uncol-three-nmg"><label class="form-label"><input type="radio" class="input-radio" name="comp[]" value="1" /><span class="input-radio-name">input-radio</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="radio" class="input-radio" name="comp[]" value="1" /><span class="input-radio-name">input-radio</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="radio" class="input-radio" name="comp[]" value="1" /><span class="input-radio-name">input-radio</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="radio" class="input-radio" name="comp[]" value="1" /><span class="input-radio-name">input-radio</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="radio" class="input-radio" name="comp[]" value="1" /><span class="input-radio-name">input-radio</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="radio" class="input-radio" name="comp[]" value="1" /><span class="input-radio-name">input-radio</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="radio" class="input-radio" name="comp[]" value="1" /><span class="input-radio-name">input-radio</span></label></div>
								<div class="uncol-three-nmg"><label class="form-label"><input type="radio" class="input-radio" name="comp[]" value="1" /><span class="input-radio-name">input-radio</span></label></div>
							</div>

						</div>

						

						<div class="alinhaCem">
							<div class="uncol-one">
								<label class="form-label">Mensagem:</label>
								<textarea class="form-textarea" rows="5"></textarea>
							</div>
						</div>

						<div class="alinhaCem">
							<div class="uncol-one">
								<button type="submit" class="button-green">salvar</button>
								<button type="button" class="button-blue">azul</button>
								<button type="button" class="button-red">excluir</button>
								<button type="button" class="button-grey">cinza</button>
								<button type="button" class="button-yellow">aviso</button>
								<button type="button" class="button-white">salvar</button>
							</div>
						</div>

					</form>
				</div>
				
			</div>

		
		</div>
	</div> <!-- container -->
</div>


<?php include ("includes/script-footer.php");?>

</body>
</html>
