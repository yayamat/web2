<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Novo Aluno</title>
    <style>
        body { font-family: Arial; margin: 20px; background: #f9f9f9; }
        form { background: white; padding: 20px; border-radius: 8px; width: 400px; }
        label { display: block; margin-top: 10px; }
        input { width: 100%; padding: 6px; margin-top: 4px; }
        button, a { margin-top: 15px; display: inline-block; }
        button { background: #4CAF50; color: white; border: none; padding: 8px 12px; border-radius: 5px; cursor: pointer; }
        a { text-decoration: none; color: #333; }
    </style>
</head>
<body>

<h1>Novo Aluno</h1>

<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="name" required>

    <label>Matrícula:</label>
    <input type="text" name="registration">

    <label>Email:</label>
    <input type="email" name="email">

    <label>Data de Nascimento:</label>
    <input type="date" name="birthdate">

    <button type="submit">Salvar</button>
    <a href="{{ route('students.index') }}">Voltar</a>
</form>

</body>
</html>
