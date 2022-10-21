<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use App\Http\Requests\ColaboradorRequest;
use App\Mail\newUnitech;
use App\Models\Colaborador;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

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

            if(isset($data['area_interesse']) || isset($data['projeto'])) {
                $colaborador->interesse()->create([
                    'area' => $data['area_interesse'],
                    'projeto_id' => $data['projeto']
                ]);
            }

            $user = User::findOrFail(1);

            $dados = [
                'nome_completo' => $colaborador->nome_completo,
                'email' => $colaborador->email,
                'endereco' => $colaborador->endereco,
                'telefone' => $colaborador->telefone,
                'email_profissional' => $colaborador->email_profissional,
                'responsavel' => $colaborador->responsavel,
                'projeto' => $colaborador->interesse()->first()->projeto->titulo,
                'forma_integracao' => $colaborador->forma_integracao,
                'updated_at' => $colaborador->updated_at,
                'created_at' => $colaborador->created_at,
                'id' => $colaborador->id,

            ];
            Mail::send(new newUnitech($user, $dados, 'Colaborador'));

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
