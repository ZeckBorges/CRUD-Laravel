<?php

    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Redirect;
    use App\Models\Produtos;


    class ProdutosController extends Controller{

        public function index(){
            $data['produtos'] = Produtos::all();
            return view('Produtos', $data);
        }

        public function insert(Request $request){
            if($request->has('nome')){
				//Existe um post, apenas inserir!
				$nome = $request->input('nome');
				$preco = $request->input('preco');
                $qtde = $request->input('qtde');
				$produtos = new Produtos();
				$produtos->nome = $nome;
				$produtos->preco = $preco;
                $produtos->qtde = $qtde;
				$produtos->save();
				echo '<script>alert("Inserido com sucesso!")</script>';
                echo '<script>location.href="'.BASE_URL.'"</script>';
				die();
                return Redirect::to('/');
			}

        }

        public function delete($id){
                $data = Produtos::where('CodConsole', $id);
                $data->delete();
                echo '<script>location.href="'.BASE_URL.'"</script>';
                die();
                return Redirect::to('/');
        }

        public function edit($id){
            $data = Produtos::find($id);
            return view('edit', ['data'=>$data]);
        }

        public function update(Request $request){
            $data = Produtos::find($request->id);
            $data->nome = $request->nome;
            $data->preco = $request->preco;
            $data->qtde = $request->qtde;
            $data->save();
            echo '<script>alert("Alterado com sucesso!")</script>';
            echo '<script>location.href="'.BASE_URL.'"</script>';
			die();
            return Redirect::to('/');

        }

    }



