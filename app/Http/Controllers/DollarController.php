<?php

namespace App\Http\Controllers;


use App\Http\Requests\DollarRequest;
use App\Clases\ExcelGenerator;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;



class DollarController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function getValue(DollarRequest $request){
        $data = $request->input();

        $url = config('app.api_url');
        $apiKey = config('app.api_key');

        $date = strtotime($data['month']);

        $year = date('Y', $date);

        $month = date('m', $date);


        $response = Http::get($url."/dolar/$year/$month?apikey=$apiKey&formato=json");

        if($response->status() == 200){

            $response = json_decode($response->body(), true);




            if($data['type'] == 'web'){
                return view('results', ['data' => $response, 'date' => $date]);
            }else{
                try{
                    return Excel::download(new ExcelGenerator($response, $date), 'valoresDolar.xls');
                }catch(\PhpOffice\PhpSpreadsheet\Exception|\Exception $e){
                    Log::error($e->getMessage());
                    Log::error($e->getTraceAsString());

                    return back()->with('error', 'Ha ocurrido un error al generar el archivo Excel. Intente nuevamente.');
                }
            }
        }else{
            return back()->with('error', 'Ha ocurrido un error al consultar los valores. Intente nuevamente.');
        }
    }
}
