<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use App\Models\AreaAtuacao;
use Illuminate\Http\Request;

class AreaAtuacaoController extends Controller
{
    private $areaAtuacao;

    public function __construct(AreaAtuacao $areaAtuacao) {
        $this->areaAtuacao = $areaAtuacao;
    }

    public function index() {
        try {
            $areaAtuacao = $this->areaAtuacao->all();

            return response()->json($areaAtuacao, 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function show($id) {
        try {
            $areaAtuacao = $this->areaAtuacao->findOrFail($id);

            return response()->json($areaAtuacao, 200);

        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function store(Request $request) {
        $data = $request->all();

        try {

            $areaAtuacao = $this->areaAtuacao->create($data);

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

            $areaAtuacao = $this->areaAtuacao->findOrFail($id);
            $areaAtuacao->update($data);

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

            $areaAtuacao = $this->areaAtuacao->findOrFail($id);
            $areaAtuacao->delete();

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
