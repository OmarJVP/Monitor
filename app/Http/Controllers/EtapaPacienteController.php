<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\siguiete_paciente;
use App\Http\Controllers\Controller;

class EtapaPacienteController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $datosdb = DB::table('siguiete_paciente')->first();
        // $datosdb = DB::table('siguiete_paciente')->where('id', '1')->first();
        echo $datosdb;
        $datos = array('paciente' => 'miguel', 'expediente'=> 'EX-1215658', 'consultorio' => 'Consultorio 5');
        return $datos;
    }

    public function salesforce(Request $request)
    {
        return $request;
    }


}