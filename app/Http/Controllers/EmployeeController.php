<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected function index(){

        // declaramos variable para el modelo Employee
        // generamos una consulta: "select * from user"
        // el "paginate()" es para mostrar los datos en n cantidad de vistas
        // el ordeBy es para ordenar la consulta del parametro id en forma descendente
        $employees = Employee::orderby('id','desc')->paginate(10);

        // retornamos una vista y le damos uso a la variable con un compact
        return view('employee.index', compact('employees'));

    }
}
