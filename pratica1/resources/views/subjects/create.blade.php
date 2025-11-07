<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nova Disciplina</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-4">
    <h1 class="mb-4 text-center">Cadastrar Nova Disciplina</h1>

    <form action="{{ route('subjects.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nome da Disciplina</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        
        <div class="mb-3">
            <label class="form-label">Professor Responsável</label>
            <input type="text" name="teacher" class="form-control">
        </div>

        <div class="text-end">
            <a href="{{ route('subjects.index') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
</body>
</html>
