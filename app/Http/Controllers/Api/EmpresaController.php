<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmpresaRequest;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    private $empresa;
    public function __construct(Empresa $empresa)
    {
        $this->empresa = $empresa;
    }

    public function index() {

        try {
            $empresa = $this->empresa->paginate('10');

            return response()->json($empresa, 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function show($id) {

        try {
            $empresa = $this->empresa->findOrFail($id);

            return response()->json($empresa, 200);

        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }

    }

    public function store(EmpresaRequest $request) {

        $data = $request->all();

        try {

            $empresa = $this->empresa->create($data);
            $empresa->proponente()->create([
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

            $empresa = $this->empresa->findOrFail($id);
            $empresa->update($data);

            if(isset($data['projetos']) && count($data['projetos'])) {
                $empresa->projetos()->sync($data['projetos']);
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

            $empresa = $this->empresa->findOrFail($id);
            $empresa->delete();

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
