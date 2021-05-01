<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        // declaramos variable para el modelo Employee
        // generamos una consulta: "select * from user"
        // el "paginate()" es para mostrar los datos en n cantidad de vistas
        // el ordeBy es para ordenar la consulta del parametro id en forma descendente
        $employees = Employee::orderby('id','desc')->paginate(7);

        // retornamos una vista y le damos uso a la variable con un compact
        return view('employee.index', compact('employees'));
    }

    //retorna una vista
    public function create(){
        //se cre para
        $companies = Company::all();
        return view('employee.create', compact('companies'));
    }

    //retorna un true or false
    //usa la variable request que se encarga de tomar lo que este en data y subirlo a la BBDD
    public function store(Request $request){
        // crear variabla del modelo Company con su funcion create
        // sql: INSERT INTO usuarios () VALUE ()
        // se llama la variable request trayendo toda la data e insertandolo
        $employee =Employee::create($request->all());

        return redirect('empleados')->with('status', 'Se ha creado un nuevo empleado exitosamente')->with('type', 'success');
    }

    public function edit ($id){
        $employee = Employee::find($id);
        $companies = Company::all();

        return view('employee.edit', compact('employee','companies'));
    }

    public function update( Request $request, $id){
        $employee = Employee::find($id)->update($request->all());

        return redirect('empleados')->with('status', 'Se ha actualizado el empleado exitosamente    ')->with('type', 'warning');
    }

    public function show($id){
        $employee = Employee::find($id);

        return view('employee.show',compact('employee'));
    }

    public function destroy($id){
        $employee = Employee::destroy($id);

        return redirect('empleados')->with('status', 'Se ha eliminado el empleado exitosamente  ')->with('type', 'danger');
    }




}
