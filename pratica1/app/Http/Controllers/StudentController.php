<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Lista paginada de alunos.
     */
    public function index()
    {
        $students = Student::orderBy('name')->paginate(15);
        return view('students.index', compact('students'));
    }

    /**
     * Formulário de criação.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Armazena um novo aluno.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'registration' => 'nullable|string|unique:students,registration',
            'email' => 'nullable|email|unique:students,email',
            'birthdate' => 'nullable|date',
        ]);

        Student::create($data);

        return redirect()->route('students.index')->with('success', 'Aluno criado.');
    }

    /**
     * Mostra detalhes do aluno (inclui notas).
     */
    public function show(Student $student)
    {
        // Carrega grades e subject para exibir no show/boletim rapidamente
        $student->load(['grades.subject']);
        return view('students.show', compact('student'));
    }

    /**
     * Formulário de edição.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Atualiza o aluno.
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'registration' => "nullable|string|unique:students,registration,{$student->id}",
            'email' => "nullable|email|unique:students,email,{$student->id}",
            'birthdate' => 'nullable|date',
        ]);

        $student->update($data);

        return redirect()->route('students.index')->with('success', 'Aluno atualizado.');
    }

    /**
     * Remove o aluno (e grades por cascade se configurado).
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Aluno excluído.');
    }
}
