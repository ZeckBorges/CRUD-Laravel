<!DOCTYPE html>
<html>
<head>
	<title>Produtos | Lista</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		html, body{
					height: 100%;
					background-image: radial-gradient(white, black);
				}
		.container{
				position: relative;
				top: 40%;
				left: 20%;
			}
	</style>
</head>
<body>
	<div class = "container">
		<h1>Atualizando Produto</h1>

		<form method="post">
					{{csrf_field()}}
					<input type="hidden" name="id" value = "{{$data['CodConsole']}}">
					<input type="text" name="nome" value = "{{$data['Nome']}}">
					<input type="text" name="preco" value = "{{$data['Preco']}}">
					<input type="text" name="qtde" value = "{{$data['Qtde']}}">
					<input type="submit" class="btn btn-success" value="Atualizar!">
		</form>
	</div>
</body>
