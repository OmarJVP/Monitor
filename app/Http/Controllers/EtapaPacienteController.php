<?php

namespace App\Http\Controllers;

use App\siguiete_paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
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
       $lista_pacientes=DB::table('paciente')->get();
       return view('monitor', ['paciente' => $paciente]);
    }

    public function salesforce(Request $request)
    {  
       //$response = json_decode($request, true); 
        $paciente = $request['paciente'];
        $consultorio = $request['consultorio'];
        $expediente = $request['expediente'];
        $hora_llegada = $request['visita'];
        $estatus = $request['estatus'];
        $etapa = $request['etapa'];
        $fecha_creacion=$request['creacion'];
        $clinica=$request['clinica'];
        $urgente=$request['urgente'];

        
         // DB::insert('insert into paciente (nombre,expediente, consultorio, estatus, etapa, clinica, hora_llegada, hora_creacion, urgente) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$paciente,$expediente,$consultorio,$estatus,$etapa,$clinica,$hora_llegada,$fecha_creacion,$urgente]);

        $registro = DB::table('paciente')->where('expediente', $expediente)->first();

        
        if(!isset($registro)){
            DB::insert('insert into paciente (nombre,expediente, consultorio, estatus, etapa, clinica, hora_llegada, hora_creacion, urgente) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$paciente,$expediente,$consultorio,$estatus,$etapa,$clinica,$hora_llegada,$fecha_creacion,$urgente]);
            return "No existia el expediente";
        }


/*
        $response = json_decode($request, true);

        foreach ((array) $response['post'] as $record) {
        echo $record;
        }
*/

        return $request;
    }


}