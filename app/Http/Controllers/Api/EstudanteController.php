<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use App\Http\Requests\EstudanteRequest;
use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    private $estudante;
    public function __construct(Estudante $estudante)
    {
        $this->estudante = $estudante;
    }

    public function index() {

        try {
            $estudante = $this->estudante->paginate('10');

            return response()->json($estudante, 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function show($id) {

        try {
            $estudante = $this->estudante->findOrFail($id);

            return response()->json($estudante, 200);

        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }

    }

    public function store(EstudanteRequest $request) {

        $data = $request->all();

        try {

            $estudante = $this->estudante->create($data);

            if(isset($data['area_interesse'])) {
                $estudante->interesse()->create([
                    'area' => $data['area_interesse'],
                    'projeto_id' => $data['projeto']
                ]);
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

    public function update($id, EstudanteRequest $request) {
        $data = $request->all();

        try {

            $estudante = $this->estudante->findOrFail($id);
            $estudante->update($data);

            // if(isset($data['projetos']) && count($data['projetos'])) {
            //     $estudante->projetos()->sync($data['projetos']);
            // }

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

            $estudante = $this->estudante->findOrFail($id);
            $estudante->delete();

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
