<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encargado;
use App\Proyecto;
use App\Puesto;
use App\Recurso;
use App\proyectoRecurso;
use Laracasts\Flash\Flash;
use DB;

use App\Http\Requests;

class proyectosController extends Controller
{
    
    public function registrarEnc()
    {
        $encargados=Encargado::all();

        return view('registrarEncargados');
    }
    public function registrarPro()
    {
        $encargados=Encargado::all();

        return view('registrarProyectos', compact('encargados'));
    }
    public function registrarPto()
    {
        $puestos=Puesto::all();

        return view('registrarPuestos');
    }
    public function registrarRec()
    {
        $puestos=Puesto::all();

        return view('registrarRecursos', compact('puestos'));
    }

    public function guardarEnc(Request $datos)
    {
        $encargado = new Encargado();
        $encargado->nombre=$datos->input('nombre');
        $encargado->correo=$datos->input('correo');
        $encargado->save();
        flash('Encargado guardado exitosamente!')->success();

        return redirect('/consultarEncargados');
    }
    public function guardarPro(Request $datos)
    {
    	$proyecto = new Proyecto();
    	$proyecto->descripcion=$datos->input('descripcion');
    	$proyecto->fecha_inicio=$datos->input('fecha_inicio');
    	$proyecto->fecha_entrega=$datos->input('fecha_entrega');
    	$proyecto->encargado_id=$datos->input('encargado');
    	$proyecto->estado=$datos->input('estado');
    	$proyecto->save();
        flash('Proyecto guardado exitosamente!')->success();

        return redirect('/consultarProyectos');
        
    }    
    public function guardarPto(Request $datos)
    {
        $puesto = new Puesto();
        $puesto->descripcion=$datos->input('descripcion');
        $puesto->save();
        flash('Puesto guardado exitosamente!')->success();

        return redirect('/consultarPuestos');
    }
    public function guardarRec(Request $datos)
    {
        $recurso = new Recurso();
        $recurso->nombre=$datos->input('nombre');
        $recurso->correo=$datos->input('correo');
        $recurso->edad=$datos->input('edad');
        $recurso->puesto_id=$datos->input('puesto');
        $recurso->save();
        flash('Recurso guardado exitosamente!')->success();

        return redirect('/consultarRecursos');
    }

    public function consultarEnc()
    {
        $encargados=Encargado::all();
        //$encargados=DB::table('encargados');

        return view('consultarEncargados', compact('encargados'));
    }
    public function consultarPro()
    {
        $proyectos=DB::table('proyectos')
            ->join('encargados', 'proyectos.encargado_id', '=', 'encargados.id')
            ->select('proyectos.*', 'encargados.nombre')
            ->get();

        return view('consultarProyectos', compact('proyectos'));
    }
    public function consultarPto()
    {
        $puestos=Puesto::all();

        return view('consultarPuestos', compact('puestos'));
    }
    public function consultarRec()
    {
        //$recursos=Recurso::all();
        $recursos=DB::table('recursos')
            ->join('puestos', 'recursos.puesto_id', '=', 'puestos.id')
            ->select('recursos.*','puestos.descripcion')
            ->get();

        return view('consultarRecursos', compact('recursos'));
    }

    public function eliminarEnc($id)
    {
        $encargado=Encargado::find($id);
        $encargado->delete();
        flash('Encargado eliminado exitosamente!')->success();

        return redirect('/consultarEncargados');
    }
    public function eliminarPro($id)
    {
    	$proyecto=Proyecto::find($id);
    	$proyecto->delete();
        flash('Proyecto eliminado exitosamente!')->success();

    	return redirect('/consultarProyectos');
    }
    public function eliminarPto($id)
    {
        $puesto=Puesto::find($id);
        $puesto->delete();
        flash('Puesto eliminado exitosamente!')->success();

        return redirect('/consultarPuestos');
    }
    public function eliminarRec($id)
    {
        $recurso=Recurso::find($id);
        $recurso->delete();
        flash('Recurso eliminado exitosamente!')->success();

        return redirect('/consultarRecursos');
    }
    
    public function editarEnc($id)
    {
        $encargado=Encargado::find($id);

        return view('editarEncargado',compact('encargado'));
    }
    public function editarPro($id)
    {
        //$proyecto=Proyecto::find($id);
        $proyecto=DB::table('proyectos')
            ->where('proyectos.id', '=', $id)
            ->join('encargados', 'encargados.id', '=', 'proyectos.encargado_id')
            ->select('proyectos.*', 'encargados.nombre')
            ->first();
        $encargados=Encargado::all();

        return view('editarProyecto', compact('proyecto', 'encargados'));
    }
    public function editarPto($id)
    {
        $puesto=Puesto::find($id);

        return view('editarPuesto',compact('puesto'));
    }
    public function editarRec($id)
    {

        $recurso=DB::table('recursos')
            ->where('recursos.id', '=', $id)
            ->join('puestos','puestos.id','=','recursos.puesto_id')
            ->select('recursos.*','puestos.descripcion')
            ->first();
        $puestos=Puesto::all();

        return view('editarRecurso',compact('recurso','puestos'));
    }

    public function actualizarEnc($id, Request $datos)
    {
        $encargado = Encargado::find($id);
        $encargado->nombre=$datos->input('nombre');
        $encargado->correo=$datos->input('correo');
        $encargado->save();
        flash('Encargado modificado guardó exitosamente!')->success();

        return redirect('/consultarEncargados');
    }
    public function actualizarPro($id, Request $datos)
    {
        $proyecto=Proyecto::find($id);
        $proyecto->descripcion=$datos->input('descripcion');
        $proyecto->fecha_inicio=$datos->input('fecha_inicio');
        $proyecto->fecha_entrega=$datos->input('fecha_entrega');
        $proyecto->encargado_id=$datos->input('encargado');
        $proyecto->estado=$datos->input('estado');
        $proyecto->save();
        flash('Proyecto modificado exitosamente!')->success();

        return redirect('/consultarProyectos');  
    }
    public function actualizarPto($id, Request $datos)
    { 
        $puesto = Puesto::find($id);
        $puesto->descripcion=$datos->input('descripcion');
        $puesto->save();
        flash('Puesto modificado exitosamente!')->success();

        return redirect('/consultarPuestos');
    }
    public function actualizarRec($id, Request $datos)
    {
        $recurso = Recurso::find($id);
        $recurso->nombre=$datos->input('nombre');
        $recurso->correo=$datos->input('correo');
        $recurso->edad=$datos->input('edad');
        $recurso->puesto_id=$datos->input('puesto');
        $recurso->save();
        flash('Recurso modificado exitosamente!')->success();

        return redirect('/consultarRecursos');
    }


    public function pdfPro(){
        $proyectos=Proyecto::all();
        $vista =view('proyectosPDF', compact('proyectos'));
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($vista);
        $pdf->setPaper('letter');
        return $pdf->stream('ListadoProyectos.pdf');
    }

    public function pdfEnc(){
        $encargados=Encargado::all();
        $vista =view('encargadosPDF', compact('encargados'));
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($vista);
        $pdf->setPaper('letter');
        return $pdf->stream('ListadoEncargados.pdf');
    }

    public function pdfRec(){
        $recursos=Recurso::all();
        $vista =view('recursosPDF', compact('recursos'));
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($vista);
        $pdf->setPaper('letter');
        return $pdf->stream('ListadoRecursos.pdf');
    }

    public function pdfPto(){
        $puestos=Puesto::all();
        $vista =view('puestosPDF', compact('puestos'));
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($vista);
        $pdf->setPaper('letter');
        return $pdf->stream('ListadoPuestos.pdf');
    }

    public function agregarRec($id){
        $proyecto=Proyecto::find($id);

        $lista=DB::table('recursos_proyectos')
        ->join('recursos', 'recursos.id', '=',
            'recursos_proyectos.id_recurso')
        ->where('recursos_proyectos.id_proyecto','=', $id)
        ->pluck('recursos.id');

        $recursosNoAsignados=DB::table('recursos')
        ->whereNotIn('recursos.id', $lista)
        ->select('recursos.nombre', 'recursos.id')
        ->get();

        $recursosAsignados=DB::table('recursos')
        ->whereIn('recursos.id', $lista)
        ->join('recursos_proyectos', 'recursos.id', '=', 'recursos_proyectos.id_recurso')
        ->where('recursos_proyectos.id_proyecto', '=', $id)
        ->select('recursos.nombre', 'recursos.id')
        ->get();

        return view('agregarRecursos', compact('proyecto', 'recursosNoAsignados', 'recursosAsignados'));
    }

    public function guardarAsignacion($id, Request $datos){
        $nuevo=new proyectoRecurso();
        $nuevo->id_recurso=$datos->input('id_recurso');
        $nuevo->id_proyecto=$id;
        $nuevo->save();
        flash('Recurso agregado correctamente al proyecto!')->success();

        return redirect ('/agregarRecursos'.$id);
    }

    public function eliminarAsignacion($idr, $idp){

        DB::table('recursos_proyectos')
        ->where('recursos_proyectos.id_recurso','=',$idr)
        ->where('recursos_proyectos.id_proyecto','=',$idp)
        ->delete();
        flash('Recurso eliminado correctamente del proyecto!')->success();

        return redirect('/agregarRecursos'.$idp);
    }

    public function pdfProRec($pe){
        $proyecto=Proyecto::find($pe);
        $recursos_proyectos=DB::table('recursos_proyectos')
            ->join('recursos', 'recursos_proyectos.id_recurso', '=', 'recursos.id')
            ->join('proyectos','recursos_proyectos.id_proyecto', '=', 'proyectos.id')
            ->where('recursos_proyectos.id_proyecto', '=', $pe)
            ->select('proyectos.*','recursos.nombre')
            ->get();

        $vista=view('recursosproyectosPDF', compact('recursos_proyectos', 'proyecto'));
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($vista);
        $pdf->setPaper('letter');

        return $pdf->stream('ListadoRecursosProyectos.pdf');
    }
}
