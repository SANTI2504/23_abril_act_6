<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{   // retorna una vista html
    public function index(){
        // declaramos variable para el modelo User
        // generamos una consulta: "select * from user"
        // el "paginate()" es para mostrar los datos en n cantidad de vistas
        $companies = Company::paginate('10');

        //se retorna una vista y usamos compact para hacer uso de la variable en la vista
        return view('company.index', compact('companies'));
    }

    //formulario retorna una vista html
    public function create(){
        return view('company.create');
    }

    //retorna una respuesta true or false
    // usamos la funcion global-> request que se encarga de tomar la data de lo que esta llegando
    public function store(Request $request){

        // crear variabla del modelo Company con su funcion create
        // sql: INSERT INTO usuarios () VALUE ()
        // se llama la variable request trayendo toda la data e insertandolo
        $company = Company::create($request -> all());

        return redirect('empresas')->with('status', 'se ha creado una empresa exitosamente' )->with('type', 'success');
    }
    // retorna una vista html
    public function show($id){
        // consulta para que traiga todos los datos por id esto se hace por medio de la funcion find
        // sql: SELECT * FROM users WHERE id = ?
        $company = Company::find($id);

        return view('company.show', compact('company'));

    }
    // retorna una vista html
    public function edit($id){
        // consulta para que traiga todos los datos por id
        // SELECT * FROM users WHERE ID = ?
        $company = Company::find($id);
        //retornamos la vista donde se encuentra el formulario de actualizacion
        // le agregamos un compact para que haga uso de la variable user en la vista edit
        return view('company.edit',compact('company'));
    }

    public function update(Request $request, $id){

        $company = Company::find($id)-> update($request->all());

        return redirect('empresas')->with('status', 'se ha actualizado la empresa exitosamente')->with('type', 'warning');

    }
    //encargado de actualizar los datos a la bbdd
    //retornara una respuesta true or false
    //se necesitara de un id pára saber a quien se va a actualizar
    // usamos la funcion global-> request que se encarga de tomar la data que esta llegando
    public function destroy($id){
        // sql: DELETE FROM users WHERE id =?
        // consulta para eliminar todos los datos segun el parametro id
        $company = Company::find($id)->delete();

        return redirect('empresas')->with('status', 'se ha eliminado una empresa exitosamente')->with('type', 'danger');

    }
}
