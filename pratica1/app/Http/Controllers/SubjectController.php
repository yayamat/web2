<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Lista paginada de disciplinas.
     */
    public function index()
    {
        $subjects = Subject::orderBy('name')->paginate(15);
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Formulário de criação.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Armazena uma nova disciplina.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'teacher' => 'nullable|string|max:255',
        ]);

        Subject::create($data);

        return redirect()->route('subjects.index')->with('success', 'Disciplina criada com sucesso.');
    }

    /**
     * Mostra detalhes da disciplina (opcionalmente com notas).
     */
    public function show(Subject $subject)
    {
        // Se quiser carregar notas dos alunos nesta disciplina:
        // $subject->load(['grades.student']);
        return view('subjects.show', compact('subject'));
    }

    /**
     * Formulário de edição.
     */
    public function edit(Subject $subject)
    {
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Atualiza a disciplina.
     */
    public function update(Request $request, Subject $subject)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|unique:subjects,code,' . $subject->id,   
            'teacher' => 'nullable|string|max:255',
        ]);

        $subject->update($data);

        return redirect()->route('subjects.index')->with('success', 'Disciplina atualizada com sucesso.');
    }

    /**
     * Remove a disciplina.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subjects.index')->with('success', 'Disciplina excluída com sucesso.');
    }
}
