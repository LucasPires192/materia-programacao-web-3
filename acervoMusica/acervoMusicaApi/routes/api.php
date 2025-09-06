<?php

    use App\Http\Controllers\MusicasController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

    //Rotas para visualizar os registros
    Route::get('/',function (){return response()->json(['Sucesso'=>true]);});
    Route::get('/musicas',[MusicasController::class,'index']);
    Route::get('/musicas/{codigo}',[MusicasController::class,'show']);

    //Rota para inserir os registros
    Route::post('/musicas',[MusicasController::class,'store']);

    //Rota para alterar os registros
    Route::put('/musicas/{codigo}',[MusicasController::class,'update']);

    //Rota para excluir o registro por id/codigo
    Route::delete('/musicas/{id}',[MusicasController::class,'destroy']);
