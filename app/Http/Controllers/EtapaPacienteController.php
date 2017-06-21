<?php

// DB_CONNECTION=mysql
// DB_HOST=208.91.198.54
// DB_PORT=3306
// DB_DATABASE=econszuk_monitor
// DB_USERNAME=econszuk_wp488
// DB_PASSWORD=Facultad_Omi_180894

namespace App\Http\Controllers;

use App\siguiete_paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
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
        return view('monitor');
       
    }


    public function eliminar(){
        DB::table('paciente')->truncate();
        return "Ha sido eliminada la tabla";
    }

    public function test(Request $request){
        $en_turno = DB::table('paciente')->where('estatus','En Atención')->where('ciclo','<',4)
        ->orderBy('ciclo','asc')->first();

        $id=$en_turno->id_salesforce;
        $ciclo=$en_turno->ciclo;
        $ciclo+=1;
        DB::table('paciente')->where('id_salesforce',$id)->update(['ciclo' => $ciclo]);



        $paciente = DB::table('paciente')->where('estatus','En Espera')->where('etapa','Preparacion')->get();

        $view = View::make('monitor')->with('en_turno', $en_turno)->with('paciente',$paciente);

        $sections = $view->renderSections();

        return $sections['content'];
    }

    public function render(Request $request){
            $en_turno = DB::table('paciente')->where('estatus','En Atención')->first();

            $view = View::make('monitor')->with('en_turno',$en_turno);

            // if($request->isMethod('post')){
            //     $sections = $view->renderSections();
            //     return $sections['content']; 
            // }
            // else return $view;
            return $view;


    }

    public function lista()
    { 
        $paciente = DB::table('paciente')->where('estatus','En Espera')->where('etapa','Preparacion')->get();


        //Mandar datos a la pantalla monitor que le toca pasar a turno
        $en_turno = DB::table('paciente')->where('estatus','En Atención')->first();

        if(!isset($en_turno)){
            DB::insert('insert into paciente (id_salesforce, nombre,expediente, consultorio, estatus, etapa, clinica, hora_llegada, hora_creacion, hora_modificacion, urgente) values (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)', ['--','---','----','-----','En atencion','----','----','-------','-------','-------','-------']);

            $en_turno = DB::table('paciente')->where('estatus','En Atención')->first();
        }
        elseif($en_turno->id_salesforce=='--'){
            DB::table('paciente')->where('id_salesforce','--')->delete();
            $en_turno = DB::table('paciente')->where('estatus','En atencion')->first();
            if(!isset($en_turno)){
            DB::insert('insert into paciente (id_salesforce, nombre,expediente, consultorio, estatus, etapa, clinica, hora_llegada, hora_creacion, hora_modificacion, urgente) values (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)', ['--','---','----','-----','En atencion','----','----','-------','-------','-------','-------']);

            $en_turno = DB::table('paciente')->where('estatus','En atencion')->first();    
           }
        }

        $view = View::make('monitor')->with('en_turno', $en_turno)->with('paciente',$paciente);
        // $paciente = (array)$paciente;

        return $view;
    
    }

    public function salesforce(Request $request)
        {  


       //$response = json_decode($request, true); 
        $id=$request['ids'];
        $paciente = $request['paciente'];
        $consultorio = $request['consultorio'];
        $expediente = $request['expediente'];
        $hora_llegada = $request['visita'];
        $estatus = $request['estatus'];
        $etapa = $request['etapa'];
        $fecha_creacion=$request['creacion'];
        $clinica=$request['clinica'];
        $urgente=$request['urgente'];
        $modificacion=$request['modificacion'];
        
         // DB::insert('insert into paciente (nombre,expediente, consultorio, estatus, etapa, clinica, hora_llegada, hora_creacion, urgente) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$paciente,$expediente,$consultorio,$estatus,$etapa,$clinica,$hora_llegada,$fecha_creacion,$urgente]);

        $registro = DB::table('paciente')->where('id_salesforce', $id)->first();

        
        if(!isset($registro)){
            DB::insert('insert into paciente (id_salesforce, nombre,expediente, consultorio, estatus, etapa, clinica, hora_llegada, hora_creacion, hora_modificacion, urgente) values (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)', [$id,$paciente,$expediente,$consultorio,$estatus,$etapa,$clinica,$hora_llegada,$fecha_creacion,$modificacion,$urgente]);
            // DB::table('paciente')->truncate();
            // return "No existia el expediente";
        }
        else{
            DB::table('paciente')->where('id_salesforce',$id)->update(['estatus' => $estatus, 'hora_modificacion' => $modificacion, 'etapa'=>$etapa]);
            return "Se actualizo registo";
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