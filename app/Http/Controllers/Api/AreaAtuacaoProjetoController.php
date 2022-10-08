<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use App\Models\AreaAtuacaoProjeto;
use Illuminate\Http\Request;

class AreaAtuacaoProjetoController extends Controller
{
    private $areaAtuacaoProjeto;

    public function __construct(AreaAtuacaoProjeto $areaAtuacaoProjeto) {
        $this->areaAtuacaoProjeto = $areaAtuacaoProjeto;
    }

    public function index() {
        try {
            $areaAtuacaoProjeto = $this->areaAtuacaoProjeto->all();

            return response()->json($areaAtuacaoProjeto, 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function show($id) {
        try {
            $areaAtuacaoProjeto = $this->areaAtuacaoProjeto->findOrFail($id);

            return response()->json($areaAtuacaoProjeto, 200);

        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function store(Request $request) {
        $data = $request->all();

        try {

            $areaAtuacaoProjeto = $this->areaAtuacaoProjeto->create($data);

            return response()->json([
                'data' => [
                    'msg' => 'cadastro concluido com suseso'
                ]
            ], 200);
        } catch (\Error $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function update(Request $request, $id) {
        $data = $request->all();

        try {

            $areaAtuacaoProjeto = $this->areaAtuacaoProjeto->findOrFail($id);
            $areaAtuacaoProjeto->update($data);

            return response()->json([
                'data' => [
                    'msg' => 'area de atuação de projeto atualizada com suseso'
                ]
            ], 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function destroy($id) {
        try {

            $areaAtuacaoProjeto = $this->areaAtuacaoProjeto->findOrFail($id);
            $areaAtuacaoProjeto->delete();

            return response()->json([
                'data' => [
                    'msg' => 'area de atuação removida com suseso'
                ]
            ], 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }
}
