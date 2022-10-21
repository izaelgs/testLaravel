<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstudanteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'curso' => $this->curso()->titulo,
            'nome_completo' => $this->nome_completo,
            'email' => $this->email,
            'endereco' => $this->endereco,
            'registro_academico' => $this->registro_academico,
            'periodo' => $this->periodo,
            'forma_integracao' => $this->forma_integracao,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
            'id' => $this->id,
        ];
    }
}
