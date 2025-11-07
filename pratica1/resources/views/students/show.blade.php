<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Aluno</title>
    <style>
        body { font-family: Arial; margin: 20px; background: #f9f9f9; }
        .box { background: white; padding: 20px; border-radius: 8px; width: 400px; }
        p { margin: 8px 0; }
        a { display: inline-block; margin-top: 10px; color: #333; text-decoration: none; }
    </style>
</head>
<body>

<h1>Detalhes do Aluno</h1>

<div class="box">
    <p><strong>Nome:</strong> {{ $student->name }}</p>
    <p><strong>Matrícula:</strong> {{ $student->registration ?? '-' }}</p>
    <p><strong>Email:</strong> {{ $student->email ?? '-' }}</p>
    <p><strong>Data de Nascimento:</strong> {{ $student->birthdate ?? '-' }}</p>
</div>

<a href="{{ route('students.index') }}">Voltar à lista</a>

</body>
</html>
