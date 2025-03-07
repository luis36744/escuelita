<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index() { /* Listar alumnos */ }
    public function create() { /* Mostrar formulario de creación */ }
    public function store(Request $request) { /* Guardar alumno */ }
    public function show(Alumno $alumno) { /* Mostrar un alumno */ }
    public function edit(Alumno $alumno) { /* Mostrar formulario de edición */ }
    public function update(Request $request, Alumno $alumno) { /* Actualizar alumno */ }
    public function destroy(Alumno $alumno) { /* Eliminar alumno */ }
}