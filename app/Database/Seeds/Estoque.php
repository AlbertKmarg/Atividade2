<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Estoque extends Seeder
{
    public function run()
    {
    $name = ['Banana Nanica','Banana Prata','Banana da Terra','Banana Ouro','Banana Maçã','Banana Chips (Itariri Edition)'];
    $aut = ['Bananinha','Bananinha', 'Bananinha', 'Bananinha', 'Bananinha','Bananinha'];
    $edit = ['Itariri','Itariri','Itariri','Itariri','Peruíbe','Itariri'];
    $valor = [6.49,9.99,6.98,10.99,7.98,6.49];
        for($x = 0; $x < 6; $x++){
        $data = [
            'Nome' => $name[$x],
            'Autor'    => $aut[$x],
            'Edit'    => $edit[$x],
            'valor' => $valor[$x],
        ];

        // Using Query Builder
        $this->db->table('estoque')->insert($data);
         }
    }
}