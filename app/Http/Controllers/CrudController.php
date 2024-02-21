<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class CrudController extends Controller
{
    public function index(){
        $datos=DB::select(" select * from trabajadores ");
        return view("Welcome")->with("datos",$datos);
    }

    public function create(Request $request){
        
        try {
            $sql = DB::insert("insert into trabajadores(Nombre,Cedula,Cuenta,Ubicacion,Area,Cargo,Codigo,Region,Oficina,Tipo_de_computador,Marca,Modelo,Numero_de_serie,Id_producto,Procesador,Ram,Disco_duro,Gpu,Tipo_de_sistema,Display,Historial_asignacion,Procesos_a_ejecutar,Observaciones) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", [
                $request->nombre,
                $request->cedula,
                $request->cuenta,
                $request->ubicacion,
                $request->area,
                $request->cargo,
                $request->codigo,
                $request->region,
                $request->oficina,
                $request->tipo_computador,
                $request->marca,
                $request->modelo,
                $request->numero_serie,
                $request->id_producto,
                $request->procesador,
                $request->ram,
                $request->disco_duro,
                $request->gpu,
                $request->tipo_sistema,
                $request->display,
                $request->historial_asignacion,
                $request->procesos_ejecutar,
                $request->observaciones
            ]);
        } catch (\Throwable $th) {
            $sql =0;
        }
    
        if ($sql == true) {
            return back()->with("Correcto","Trabajador correctamente registrado");
        } else {
            return back()->with("Incorrecto","Error al registrar");
        }
    }
    
}
