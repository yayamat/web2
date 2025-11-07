<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes da Disciplina</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-4">
    <h1 class="mb-4 text-center">Detalhes da Disciplina</h1>

    <div class="card p-4 shadow-sm">
        <p><strong>ID:</strong> {{ $subject->id }}</p>
        <p><strong>Nome:</strong> {{ $subject->name }}</p>
        <p><strong>Código:</strong> {{ $subject->code ?? '-' }}</p>
        <p><strong>Professor:</strong> {{ $subject->teacher ?? '-' }}</p>
        <p><strong>Criado em:</strong> {{ $subject->created_at->format('d/m/Y H:i') }}</p>
        <p><strong>Atualizado em:</strong> {{ $subject->updated_at->format('d/m/Y H:i') }}</p>

        <div class="text-end">
            <a href="{{ route('subjects.edit', $subject) }}" class="btn btn-warning">Editar</a>
            <a href="{{ route('subjects.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
</body>
</html>
