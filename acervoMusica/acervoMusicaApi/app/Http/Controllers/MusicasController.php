<?php

namespace App\Http\Controllers;

use App\Models\Musicas;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class MusicasController extends Controller
{
    public function index()
    {
        // Buscando todas as musicas
        $registros = Musicas::all();

        // Contando o número de registros
        $contador = $registros->count();

        // Verificando se há registros
        if($contador > 0) {
            return response()->json([
                'sucess' => true,
                'message' => 'Musicas encontradas com sucesso!',
                'data' => $registros,
                'total' => $contador
            ] , 200); //Retorna HTTP 200 (OK) com os dados e a contagem
        } else {
            return response()->json([
                'sucess' => false,
                'message' => 'Nenhuma musica encontrado.',
            ], 404); // Retorna HTTP 404 (Not Found) se não houver registros
        }
    }

    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $validador = Validator::make($request->all(), [
            'nome' => 'required',
            'cantor' => 'required',
            'ano_lancamento' => 'required',
            'album' => 'required',
        ]);

        if($validador->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Registro inválidos',
                'errors' => $validador->errors(),
            ], 400); // Retorna HTTP 400 (Bad Request) se houver erro de validação
        }
    
        //Criando uma musica no banco de dados
        $registros = Musicas::create($request->all());

        if($registros){
            return response()->json([
                'success' => true,
                'message' => 'Musica cadastrados com sucesso!',
                'data' => $registros,
            ], 201);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'Erro ao cadastrar a música',
            ], 500); // Retorna HTTP 500 (Internal Server Error) se p cadastro falhar
        }
    }

    public function show($id)
    {
        // Buscando uma musica pelo ID
        $registros = Musicas::find($id);

        // Verificando se a musica foi encontrado
        if($registros) {
            return response()->json([
                'success' => true,
                'message' => 'Musica localizado com sucesso!',
                'data' => $registros
            ], 200); // Retorna HTTP 200 (OK) com os dados da musica
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Musica não localizado.',
            ], 404); // Returna HTTP 404 (Not Found) se a musica não for encontrado
        }
    }

    public function update(Request $request, string $id)
    {
        $validador = Validator::make($request->all(), [
            'nome' => 'required',
            'cantor' => 'required',
            'ano_lancamento' => 'required',
            'album' => 'required'
        ]);

        if($validador->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Registros inválidos',
                'errors' => $validador->errors()
            ], 400); // Retorna HTTP 400 se houver erro de validação
        }

        // Encontrando uma musica no banco
        $registrosBanco = Musicas::find($id);

        if(!$registrosBanco){
            return response()->json([
                'success' => false,
                'message' => 'Musica não encontrado'
            ], 404);
        }

        // Atualizando os dados
        $registrosBanco->nome = $request->nome;
        $registrosBanco->cantor = $request->cantor;
        $registrosBanco->ano_lancamento = $request->ano_lancamento;
        $registrosBanco->album = $request->album;

        // Salvando as alterações
        if($registrosBanco->save()){
                return response()->json([
                    'success' => true,
                    'message' => 'Musica atualizado com sucesso!',
                    'data' => $registrosBanco
            ], 200);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar a musica'
            ], 500); // Retorna HTTP 500 se houver erro ao salver
        }
    }

    public function destroy($id)
    {
        // Encontrando uma musica
        $registros = Musicas::find($id);

        if(!$registros){
            return response()->json([
                'success' => true,
                'message' => 'Musica deletado com sucesso'
            ], 200); // Retorna HTTP 200 se a exclusão for bem-sucedida
        }

        return response()->json([
            'success' => false,
            'message' => 'Erro ao deletar uma musica'
        ], 500); // Retorna HTTP 500 se houver erro na exclusão
    }
}