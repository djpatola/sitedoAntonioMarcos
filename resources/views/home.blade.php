<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criatório Nuvem Baixa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('images/logoprincipal_transparente.PNG') }}" alt="Banner do site" class="banner">
    </header>

    <main>
        <h1>Bem-vindo ao Site Criatório Nuvem Baixa</h1>
        <p>Este é um site criado para uma pequena visão do amor e dedicação ao projeto amador de criação de passariformes da fauna Brasileira</p>

        <h2>Nome dos Pássaros</h2>
        <table border="1" cellpadding="8">
            <tr>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Idade</th>
            </tr>
            <tr>
                <td>Ricardinho</td>
                <td>Macho</td>
                <td>10 Anos</td>
            </tr>
            <tr>
                <td>Marinha</td>
                <td>Fêmea</td>
                <td>9 Anos</td>
            </tr>
            <tr>
                <td>Pretina</td>
                <td>Fêmea</td>
                <td>29 Meses</td>
            </tr>
         </table>

         <h2>Formulário de Contato</h2>
         <form action="{{ url('/contato') }}" method="post">
           @csrf
            <label>Nome:</label>
            <input type="text" name="nome" required><br><br>

            <label>Email:</label>
            <input type="email" name="email" required><br><br>

            <label>Mensagem:</label><br>
            <textarea name="mensagem" rows="5" required></textarea><br><br>

            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>
