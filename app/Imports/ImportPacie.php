<?php

namespace App\Imports;

use App\Models\Pacientes;
use App\Pacie;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportPacie implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pacientes([
            'solicitacao' => $row[0],
            'cns' => $row[1],
            'municipio' => $row[2],
            'datasolicitacao' => $row[3],
            'unidadedesejada' => $row[4],
            'codigo'    => $row[5],
            'observacao1' => $row[6],
            'observacao2' => $row[7],
            'observacao3' => $row[8],
            'observacao4' => $row[9],
            'observacao5' => $row[10],
            'statusSolicitacao' => $row[11],
        ]);
    }
}


