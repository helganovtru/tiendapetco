<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Producto;
use App\Administrador;
use App\Categoria;
use Laracasts\Flash\Flash;
use DB;
use Storage;
use Mail;
use App\Http\Requests;

class tiendaController extends Controller
{
    public function registrarCli()
    {
        $clientes=Administrador::all();
        return view('registrarCli', compact('clientes'));
    }
    public function registrarCliente()
    {
        $clientes=Administrador::all();
        return view('registrarme', compact('clientes'));
    }
    public function registrarAdmin()
    {
        $admin=Administrador::all();
        return view('registrarAdmin');
    }
    public function registrarProd()
    {
        $categoria=Categoria::all();
        return view('registrarProd', compact('categoria'));
    }
    public function homeCliente()
    {
        $prod=Producto::all();
        return view('/homecliente', compact('prod'));
    }
    public function registrarCat()
    {
        $cat=Categoria::all();
        return view('registrarCat');
    }




    public function guardarCli(Request $datos)
    {
        $cliente = new Cliente();
        $cliente->nombre=$datos->input('nombre');
        $cliente->correo=$datos->input('correo');
        $cliente->usuario=$datos->input('usuario');
        $cliente->contraseña=$datos->input('contraseña');
        $cliente->save();
        flash('Ha finalizado el registro exitosamente!')->success();

        return redirect('/consultarCli');
    }
    public function guardarCliente(Request $datos)
    {
        $cliente = new Cliente();
        $cliente->nombre=$datos->input('nombre');
        $cliente->correo=$datos->input('correo');
        $cliente->usuario=$datos->input('usuario');
        $cliente->contraseña=$datos->input('contraseña');
        $cliente->save();

        return redirect('/');
    }
    public function guardarAdmin(Request $datos)
    {
        $admin = new Administrador();
        $admin->nombre=$datos->input('nombre');
        $admin->usuario=$datos->input('usuario');
        $admin->contraseña=$datos->input('contraseña');
        $admin->save();
        flash('Administrador guardado exitosamente!')->success();

        return redirect('/consultarAdmin');
    }  
    public function guardarProd(Request $datos)
    {
        $prod = new Producto();
        $prod->descripcion=$datos->input('descripcion');
        $prod->existencia=$datos->input('existencia');
        $prod->precio=$datos->input('precio');
        $prod->talla=$datos->input('talla');
        $prod->mascota=$datos->input('mascota');
        $prod->id_categoria=$datos->input('id_categoria');
        $prod->imagen=$datos->input('imagen');
        $prod->save();
        flash('Promoción guardado exitosamente!')->success();

        return redirect('/consultarProd');
    }
    public function guardarCat(Request $datos)
    {
        $cat = new Categoria();
        $cat->descripcion=$datos->input('descripcion');
        $cat->save();
        flash('Categoria guardado exitosamente!')->success();

        return redirect('/consultarCat');
    } 



    public function actualizarCli($id, Request $datos)
    {
        $cliente=Cliente::find($id);
        $cliente->nombre=$datos->input('nombre');
        $cliente->correo=$datos->input('correo');
        $cliente->usuario=$datos->input('usuario');
        $cliente->contraseña=$datos->input('contraseña');
        $cliente->save();
        flash('Cliente modificado exitosamente!')->success();

        return redirect('/consultarCli');  
    }
    public function actualizarProd($id, Request $datos)
    {
        $prod =Producto::find($id);
        $prod->descripcion=$datos->input('descripcion');
        $prod->existencia=$datos->input('existencia');
        $prod->precio=$datos->input('precio');
        $prod->talla=$datos->input('talla');
        $prod->mascota=$datos->input('mascota');
        $prod->id_categoria=$datos->input('id_categoria');
        $prod->save();
        flash('Producto modificado exitosamente!')->success();

        return redirect('/consultarProd');  
    }
    public function actualizarAdmin($id, Request $datos)
    {
        $admin = Administrador::find($id);
        $admin->nombre=$datos->input('nombre');
        $admin->usuario=$datos->input('usuario');
        $admin->contraseña=$datos->input('contraseña');
        $admin->save();
        flash('Administrador modificado exitosamente!')->success();

        return redirect('/consultarAdmin');
    }
    public function actualizarCat($id, Request $datos)
    {
        $cat = Categoria::find($id);
        $cat->descripcion=$datos->input('descripcion');
        $cat->save();
        flash('Categoria modificado exitosamente!')->success();

        return redirect('/consultarCat');
    }




    public function consultarCli()
    {
        $cliente=DB::table('cliente')
            ->select('cliente.*')
            ->get();

        return view('consultarCli', compact('cliente'));
    }
    public function consultarAdmin()
    {
        $admin=Administrador::all();
        return view('consultarAdmin', compact('admin'));
    }
    public function consultarProd()
    {
        $prod=Producto::all();
        return view('consultarProd', compact('prod'));
    }
    public function consultarCat()
    {
        $cat=Categoria::all();
        return view('consultarCat', compact('cat'));
    }
    public function cargarCat()
    {
        $prod=Producto::all();
        return view('catalogoProd', compact('prod'));
    }




    public function eliminarCli($id)
    {
        $cliente=Cliente::find($id);
        $cliente->delete();
        flash('Cliente eliminado exitosamente!')->success();

        return redirect('/consultarCli');
    }
    public function eliminarProd($id)
    {
        $prod=Producto::find($id);
        $prod->delete();
        flash('Producto eliminado exitosamente!')->success();

        return redirect('/consultarProd');
    }
    public function eliminarAdmin($id)
    {
        $admin=Administrador::find($id);
        $admin->delete();
        flash('Administrador eliminado exitosamente!')->success();

        return redirect('/consultarAdmin');
    }
    public function eliminarCat($id)
    {
        $cat=Categoria::find($id);
        $cat->delete();
        flash('Categoria eliminado exitosamente!')->success();

        return redirect('/consultarCat');
    }




    public function editarCli($id)
    {
        $cliente=Cliente::find($id);
        return view('editarCli',compact('cliente'));
    }
    public function editarProd($id)
    {
        $prod=Producto::find($id);
        $cat=Categoria::all();

        return view('editarProd',compact('prod', 'cat'));
    }
    public function editarAdmin($id)
    {
        $admin=Administrador::find($id);
        return view('editarAdmin',compact('admin'));
    }
    public function editarCat($id)
    {
        $cat=Categoria::find($id);
        return view('editarCat',compact('cat'));
    } 
    public function mostrarDet($id)
    {
        $prod=Producto::find($id);

        return view('mostrarDetalle',compact('prod'));
    }
}

    