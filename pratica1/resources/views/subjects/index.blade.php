<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Disciplinas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-4">
    <h1 class="mb-4 text-center">Lista de Disciplinas</h1>

    <div class="text-end mb-3">
        <a href="{{ route('subjects.create') }}" class="btn btn-success">+ Nova Disciplina</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Código</th>
                <th>Professor</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->teacher ?? '-' }}</td>
                    <td class="text-center">
                        <a href="{{ route('subjects.show', $subject) }}" class="btn btn-sm btn-primary">Ver</a>
                        <a href="{{ route('subjects.edit', $subject) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('subjects.destroy', $subject) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Tem certeza que deseja excluir esta disciplina?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Nenhuma disciplina cadastrada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-3">
        {{ $subjects->links() }}
    </div>

    <div class="mt-4 text-center">
        <a href="/" class="btn btn-secondary">Voltar ao Início</a>
        <a href="{{ route('students.index') }}" class="btn btn-outline-primary ms-2">Ver Alunos</a>
    </div>
</div>
</body>
</html>
