<?php

namespace App\Repository;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository
{

    private $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function selectConditions($conditions) {
        // filtrar condições de acordo com querystring conditions
        $expressions = explode(';', $conditions);

        $where = '';

        foreach($expressions as $e) {
            $exp = explode(':', $e);
            if(count($exp) > 2) {
                $this->model = $this->model->where($exp[0], $exp[1], $exp[2]);
            } else {
                $this->model = $this->model->where([$exp[0] => $exp[1] ?? NULL]);
            }
        }

    }

    public function selectFilter($fields) {
        // filtrar campos de acordo com querystring fields
        $this->model = $this->model->selectRaw($fields);
    }

    public function getResult() {
        return $this->model;
    }
}
?>
