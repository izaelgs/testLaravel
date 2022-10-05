<?php

namespace App\Http\Controllers\Api;

use App\Models\Projeto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProjetoCollection;
use App\Http\Resources\ProjetoResource;

class ProjetoController extends Controller
{
    private $projeto;

    public function __construct(Projeto $projeto) {
        $this->projeto = $projeto;
    }

    public function index(Request $request) {

        $projetos = $this->projeto;

        // filtrar condições de acordo com querystring conditions
        if($request->has('conditions')) {
            $expressions = explode(';', $request->get('conditions'));

            foreach($expressions as $e) {
                $exp = explode(':', $e);
                $projetos = $projetos->where($exp[0], $exp[1]);
            }

        }

        // filtrar campos de acordo com querystring fields
        if($request->has('fields')) {
            $fields = $request->get('fields');
            $projetos = $projetos->select($fields);
        }

        return response()->json($projetos->paginate(10));
        // return new ProjetoCollection($projetos->paginate(10));
    }

    public function show($id) {
        $projeto = $this->projeto->find($id);

        // return response()->json($projeto);
        return new ProjetoResource($projeto);
    }

    public function save(Request $request) {

        $data = $request->all();
        $projeto = $this->projeto->create($data);

        return response()->json($data);
    }

    public function update(Request $request) {

        $data = $request->all();
        $projeto = $this->projeto->find($data['id']);
        $projeto->update($data);

        return response()->json($projeto);
    }

    public function delete($id) {

        $projeto = $this->projeto->find($id);
        $projeto->delete();

        return response()->json($projeto);
    }
}
