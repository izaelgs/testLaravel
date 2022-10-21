<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use App\Http\Requests\PessoaFisicaRequest;
use App\Mail\newUnitech;
use App\Models\PessoaFisica;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function store(PessoaFisicaRequest $request) {

        $data = $request->all();

        try {

            $pessoa = $this->pessoa->create($data);
            $pessoa->proponente()->create([
                'app' => $data['app'],
                'contato' => $data['contato'],
            ]);

            $user = User::findOrFail(1);

            // $dados = [
            //     'razao_social' => $pessoa->razao_social,
            //     'cnpj' => $pessoa->cnpj,
            //     'tipo_pessoa' => $pessoa->tipo_pessoa,
            //     'telefone' => $pessoa->telefone,
            //     'nome_contato' => $pessoa->nome_contato,
            //     'email' => $pessoa->email,
            //     'endereco' => $pessoa->endereco,
            //     'site' => $pessoa->site,
            //     'instagram' => $pessoa->instagram,
            //     'facebook' => $pessoa->facebook,
            //     'linkedin' => $pessoa->linkedin,
            //     'updated_at' => $pessoa->updated_at,
            //     'created_at' => $pessoa->created_at,
            //     'id' => $pessoa->id,
            // ];
            Mail::send(new newUnitech($user, $pessoa->getAttributes(), 'Proponente Pessoa Física'));

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
