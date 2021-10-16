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
				top: 85px;
			}
			.my-custom-scrollbar {
				position: relative;
				height: 400px;
				 overflow: auto;
			}
			.table-wrapper-scroll-y {
				display: block;
			}
		</style>
	</head>
	<body class = "bg">
		<div class = "container">
			<h2 class = "text-white">Listando Produtos:</h2>
			
			<div class="table-wrapper-scroll-y my-custom-scrollbar">
				<table class="table table-dark table-hover">
					<thead>
						<tr class="text-warning">
							<th>Plataforma</th>
							<th>Preço</th>
							<th>Disponibilidade</th>
						</tr>
					</thead>
					<tbody>
							@foreach($produtos as $produto)
							<tr class="text-info">
								<td>{{$produto['Nome']}}</td>
								<td>R${{number_format($produto['Preco'],2,",",".")}}</td>
								@if($produto['Qtde']>0)
									<!--<td class = "text-success">{{"Disponível"}}</td> -->
									<td><button class="btn btn-outline-success" ><a class = "text-success" href = "consoles/addcar/{{$produto['CodConsole']}}" >Comprar</a></button></td>
									@else
										<td class = "text-danger">{{"Indisponível"}} </td>
										<!--<td><button class="btn btn-outline-danger" ><a class = "text-danger" href = "" >Indisponível</a></button></td>-->
									@endif	
								<td><button class="btn btn-outline-warning" ><a class = "text-warning" href = "consoles/edit/{{$produto['CodConsole']}}" >Atualizar</a></button></td>
								<td><button class="btn btn-outline-danger" ><a class = "text-danger" href = "consoles/delete/{{$produto['CodConsole']}}" >Deletar</a></button></td>
								
							</tr>
							@endforeach     
					</tbody>
				</table>
			</div>
			

			<form method="post">
				{{csrf_field()}}
				<input type="text" name="nome" placeholder="Nome...">
				<input type="text" name="preco" placeholder="Preço...">
				<input type="number" name="qtde" placeholder="Quantidade...">
				<input type="submit" class="btn btn-success" value="Inserir!">
			</form>
		</div>
	</body>
</html>