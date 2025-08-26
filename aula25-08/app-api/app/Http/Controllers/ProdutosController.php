<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Facades\Validator;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Buscando todas os Produtos
        $registros = Produtos::all();

        // Contando o número de registros
        $contador = $registros->count();

        // Verificando se há registros
        if($contador > 0) {
            return reponse()->json([
                'sucess' => true,
                'message' => 'Produtos encontradas com sucesso!',
                'data' => $regsitros,
                'total' => $contador
            ] , 200); //Retorna HTTP 200 (OK) com os dados e a contagem
        } else {
            return reponse()->json([
                'sucess' => false,
                'message' => 'Nenhum produto encontrado.',
            ], 404); // Retorna HTTP 404 (Not Found) se não houver registros
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $validador = Validator::make($request->all(), [
            'nome' => 'required',
            'marca' => 'required',
            'preco' => 'required',
        ]);

        if($validador->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Registro inválidos',
                'errors' => $validador->errors()
            ], 400); // Retorna HTTP 400 (Bad Request) se houver erro de validação
        }
    
    //Criando um produto no banco de dados
    $registros = Produtos::create($request->all());

    if($registros){
        return response()->json([
            'success' => true,
            'message' => 'Produtos cadastrados com sucesso!',
            'data' => $registros
        ], 201);
    } else{
        return response()->json([
            'success' => false,
            'message' => 'Erro ao cadastrar um produto'
        ], 500); // Retorna HTTP 500 (Internal Server Error) se p cadastro falhar
    }
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Buscando um produto pelo ID
        $registros = Produtos::find($id);

        // Verificando se o produto foi encontrado
        if($registros) {
            return response()->json([
                'success' => true,
                'message' => 'Produto localizado com sucesso!',
                'data' => $registros
            ], 200); // Retorna HTTP 200 (OK) com os dados do produto
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Produto não localizado.',
            ], 404); // Returna HTTP 404 (Not Found) se o produto não for encontrado
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validador = Validador::make($request->all(), [
            'nome' => 'required',
            'marca' => 'required',
            'preco' => 'required',
        ]);

        if($validador->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Registros inválidos',
                'errors' => $validador->errors()
            ], 400); // Retorna HTTP 400 se houver erro de validação
        }

        // Encontrando um produto no banco
        $registrosBanco = Produtos::find($id);

        if(!$registrosBanco){
            return response()->json([
                'success' => false,
                'message' => 'Produto não encontrado'
            ], 404);
        }

        // Atualizando os dados
        $registrosBanco->nome = $request->nome;
        $registrosBanco->marca = $request->marca;
        $registrosBanco->preco = $request->preco;

        // Salvando as alterações
        if($registrosBanco->save()){
                return response()->json([
                    'success' => true,
                    'message' => 'Produto atualizado com sucesso!',
                    'data' => $registrosBanco
            ], 200);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'Eroo ao atualizar o produto'
            ], 500); // Retorna HTTP 500 se houver erro ao salver
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encontrando um produto
        $registros = Produtos::find($id);

        if(!$registros){
            return response()->json([
                'success' => true,
                'message' => 'Produto deletado com sucesso'
            ], 200); // Retorna HTTP 200 se a exclusão for bem-sucedida
        }

        return respnse()->json([
            'success' => false,
            'message' => 'Erro ao deletar um produto'
        ], 500); // Retorna HTTP 500 se houver erro na exclusão
    }
}
