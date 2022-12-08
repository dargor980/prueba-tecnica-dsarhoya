<?php

namespace App\Clases;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class ExcelGenerator implements FromView
{
    private $data;
    private $date;

    public function __construct($data, $date){
        $this->data = $data;
        $this->date = $date;

    }

    public function view(): view{
        return view('reporteExcel', ['data' => $this->data, 'date' => $this->date]);
    }
}
