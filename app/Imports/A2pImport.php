<?php

namespace App\Imports;

use App\Models\A2p;
use Maatwebsite\Excel\Concerns\ToModel;

class A2pImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new A2p([
            'source' => $row[1],
            'asal' => $row[2],
            'costumer' => $row[3],
            'SMSC' => $row[4],
            'link' => $row[5],
            'operator' => $row[6],
            'sender' => $row[7],
            'terminasi' => $row[8],
            'tipe_terminasi' => $row[9],
            'SID' => $row[10],
            'status_terminasi' => $row[11],
        ]);
    }
}
