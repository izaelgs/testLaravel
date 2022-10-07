<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    private $curso;
    public function __construct(Curso $curso)
    {
        $this->curso = $curso;
    }

    public function index() {
        $curso = $this->curso->paginate('10');

        return response()->json($curso, 200);
    }

    public function store(Request $request) {

        $data = $request->all();

        try {

            $curso = $this->curso->create($data);

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
}
