<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{

    //Controlador para las funciones del CRUD Cliente

    //Función del apartado principal
    public function index(){

        $customers = Customer::all(); //Lista los clientes del sistema

        return view('customers.index', compact('customers'));
    }

    //Función para crear o registrar un nuevo cliente
    public function create(){
        return view('customers.create'); //Muestra el formulario de creación
    }

    //Función para almacenar en la base de datos los clientes
    public function store(Request $request){

        $customer = new Customer();

        $customer->Nombres = $request->nombres;
        $customer->Apellidos = $request->apellidos;
        $customer->Correo = $request->correo;

        $customer->save();

        return redirect()->route('customers.index');
    }

    //Función para editar los clientes, llama al formulario edit
    public function edit($id){

        $customer = Customer::find($id); //Busca al cliente con el id ingresado

        return view('customers.edit', compact('customer'));
    }

    //Función para guardar cambios del cliente
    public function update(Request $request, $id){
        
        $customer = Customer::find($id);

        //$customer->update($request->all());
        $customer->Nombres=$request->input('nombres');
        $customer->Apellidos=$request->input('apellidos');
        $customer->Correo=$request->input('correo');

        $customer->save();

        return redirect()-> route('customers.index');
    }

    //Función para eliminar un cliente de la base de datos
    public function destroy($id){

        $customer = Customer::find($id);

        $customer->delete();

        return redirect()-> route('customers.index');

    }
}
