<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>CADASTRO</title>
		<script src="../lib/jquery.js" type="text/javascript" charset="utf-8"></script>
		<script src="../lib/maskedinput.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/javascript.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<header>
		<h1>Cadastro</h1>
	</header>

	<body>
		<form id="formbasicregister" action="../controller/cadastrar.php" method="post" accept-charset="utf-8">
			<div id="divnome">
				<label class="float_left" for="nome">Nome: </label>
				<input class="input_field" type="text" maxlenght='100' name="nome"
				autofocus="autofocus" placeholder="nome"
				id="nome" />
				<span></span>
			</div>
			<br />
			<div id="divlogin">
				<label class="float_left" for="sobrenome">Sobrenome: </label>
				<input class="input_field" type="text" maxlenght='12' name="sobrenome"
				placeholder="sobrenome" id="sobrenome" />
				<span></span>
			</div>
			<br />
			<div id="divdatanascimento">
				<label class="float_left" for="dataNascimento">Data de nascimento: </label>
				<input class="input_field" type="text" maxlenght='10' name="dataNascimento"
				placeholder="dataNascimento" id="dataNascimento" />
				<span></span>
			</div>
			<br />
			<label class="float_left" for="masculino">Masculino: </label>
			<input class="input_radio" type="radio"  name="sexo" id="masculino" value="M" />
			<br />
			<label class="float_left" for="feminino">Feminino: </label>
			<input class="input_radio" type="radio"  name="sexo" id="feminino" value="F" />
			<br />
			<div id="divemail">
				<label class="float_left" for="email">e-mail: </label>
				<input class="input_field" type="text"  name="email"
				placeholder="email" id="email" />
				<span></span>
			</div>
			<br />
			<input type="submit" value="Enviar"/>
			<input type="reset" value="Apagar"/>
		</form>
		<a href="../index.php">voltar</a>
	</body>
</html>
