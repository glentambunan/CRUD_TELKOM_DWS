<?php

namespace App\Exports;

use App\Models\A2p;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class A2pExport implements FromView
{
    public function view(): View
    {
        return view('exports.a2ps', [
            'a2ps' => A2p::all()
        ]);
    }
}