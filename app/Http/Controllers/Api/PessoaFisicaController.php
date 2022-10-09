<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use App\Models\PessoaFisica;
use Illuminate\Http\Request;

class pessoaFisicaController extends Controller
{
    private $pessoa;
    public function __construct(PessoaFisica $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function index() {

        try {
            $pessoa = $this->pessoa->paginate('10');

            return response()->json($pessoa, 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function show($id) {

        try {
            $pessoa = $this->pessoa->findOrFail($id);

            return response()->json($pessoa, 200);

        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }

    }

    public function store(Request $request) {

        $data = $request->all();

        try {

            $pessoa = $this->pessoa->create($data);
            $pessoa->proponente()->create([
                'area' => $data['area_projeto'],
                'app' => $data['app'],
                'contato' => $data['contato'],
            ]);

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

    public function update($id, Request $request) {
        $data = $request->all();

        try {

            $pessoa = $this->pessoa->findOrFail($id);
            $pessoa->update($data);

            if(isset($data['projetos']) && count($data['projetos'])) {
                $pessoa->projetos()->sync($data['projetos']);
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

            $pessoa = $this->pessoa->findOrFail($id);
            $pessoa->delete();

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
