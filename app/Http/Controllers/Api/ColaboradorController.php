<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use App\Http\Requests\ColaboradorRequest;
use App\Models\Colaborador;

class ColaboradorController extends Controller
{
    private $colaborador;
    public function __construct(Colaborador $colaborador)
    {
        $this->colaborador = $colaborador;
    }

    public function index() {

        try {
            $colaborador = $this->colaborador->paginate('10');

            return response()->json($colaborador, 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function show($id) {

        try {
            $colaborador = $this->colaborador->findOrFail($id);

            return response()->json($colaborador, 200);

        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }

    }

    public function store(ColaboradorRequest $request) {

        $data = $request->all();

        try {

            $colaborador = $this->colaborador->create($data);

            if(isset($data['projetos']) && count($data['projetos'])) {
                $colaborador->projetos()->sync($data['projetos']);
            }

            return response()->json([
                'data' => [
                    'msg' => 'cadastro concluido com suseso'
                ]
            ], 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function update($id, ColaboradorRequest $request) {
        $data = $request->all();

        try {

            $colaborador = $this->colaborador->findOrFail($id);
            $colaborador->update($data);

            if(isset($data['projetos']) && count($data['projetos'])) {
                $colaborador->projetos()->sync($data['projetos']);
            }

            return response()->json([
                'data' => [
                    'msg' => 'cadastro atualizado com suseso'
                ]
            ], 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function destroy($id) {

        try {

            $colaborador = $this->colaborador->findOrFail($id);
            $colaborador->delete();

            return response()->json([
                'data' => [
                    'msg' => 'cadastro removido com suseso'
                ]
            ], 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }
}
