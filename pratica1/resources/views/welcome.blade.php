<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 1rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card text-center p-5 bg-white">
        <h1 class="mb-4 text-primary fw-bold">📘 Sistema Escolar</h1>
        <p class="mb-4 fs-5 text-muted">Gerenciamento de alunos, disciplinas e notas</p>

        <div class="d-grid gap-3 col-6 mx-auto">
            <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg">
                👩‍🎓 Gerenciar Alunos
            </a>
            <a href="{{ route('subjects.index') }}" class="btn btn-success btn-lg">
                📚 Gerenciar Disciplinas
            </a>
        </div>

        <hr class="my-4">

        
        </p>
    </div>
</div>
</body>
</html>

