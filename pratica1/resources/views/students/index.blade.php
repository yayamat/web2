
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <style>
        body { font-family: Arial; margin: 20px; background: #f9f9f9; }
        h1 { color: #333; }
        a.button { background: #4CAF50; color: white; padding: 8px 12px; text-decoration: none; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; background: #fff; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #eee; }
        .actions form { display: inline; }
        button { background: #e74c3c; color: white; border: none; padding: 6px 10px; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>

<h1>Lista de Alunos</h1>
<a href="{{ route('students.create') }}" class="button">Novo Aluno</a>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->registration ?? '-' }}</td>
                <td>{{ $student->email ?? '-' }}</td>
                <td>{{ $student->birthdate ?? '-' }}</td>
                <td>
                    <a href="{{ route('students.show', $student) }}">Ver</a> |
                    <a href="{{ route('students.edit', $student) }}">Editar</a> |
                    <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline" onsubmit="return confirm('Excluir este aluno?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Nenhum aluno encontrado.</td></tr>
        @endforelse
    </tbody>
</table>
<div class="mt-4 text-center">
    <a href="/" class="button">Voltar ao Início</a>
    <a href="{{ route('students.index') }}" class="button">Ver Alunos</a>
</div>

    </div>
</body>
</html>

