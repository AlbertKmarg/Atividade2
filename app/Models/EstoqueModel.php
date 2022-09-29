<?php

namespace App\Models;

use CodeIgniter\Model;

class EstoqueModel extends Model
{
    protected $table = 'estoque';
    protected $primarykey = 'id';
    protected $allowedFields = ['nome', 'Autor','Edit','valor'];

    public function getEstoque($id){
        return $this->asArray()->where(['id'=>$id])->first();
    }
}