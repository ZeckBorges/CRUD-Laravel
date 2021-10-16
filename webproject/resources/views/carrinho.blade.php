<!DOCTYPE html>
<html>
	<head>
		<title>Acessórios</title>
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
	<body >
		
			<h1 class = 'text-white'>Carrinho</h1>

            <table class="table table-dark table-hover">
					<thead>
						<tr class="text-warning">
							<th>Plataforma</th>
							<th>Preço</th>
							<th>Quantidade</th>
                            <th>Total</th>
						</tr>
					</thead>
					<tbody>
                        <td>{{$produto['Nome']}}</td>
						<td>R${{number_format($produto['Preco'],2,",",".")}}</td>
                        <td>{{$produto['Qtde']-$produto['Qtde']+1}}</td>
                        <td>R${{number_format($produto['Preco'],2,",",".")}}</td>
                    </tbody>
            </table>
            <form method="post">
				{{csrf_field()}}
                <input type="hidden" name="id" value = "{{$produto['CodConsole']}}">
                <input type="hidden" name="qtde" value = "{{$produto['Qtde']}}">
				<input type="submit" class="btn btn-success" value="Finalizar Compra!">
		</form>
	</body>
</html>