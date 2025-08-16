<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corintians Campeão</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('images/corintians.PNG') }}" alt="Banner do site" class="banner">
       </header>

    <main>
        <h1>Corintians 31 Vezas Campeão Paulista</h1>
        <p>Corintians tem 31 titulos Paulista com a maior torcida apaixonada por Futebol, Por isso a Federação Paulista de Futebol agradeçe Toda Torcida do Timão</p>
        <p> Site feito com intuito de Homenagiar o Maior Campeão Paulista de Futebol</p>
        <h2>Titulos Marcantes</h2>
        <table border="1" cellpadding="8">
            <tr>
                <th>Ano</th>
                <th>Renda</th>
                <th>Publico Pagante</th>
                <th>Publico Não Pagante</th>
            </tr>
            <tr>
                <td>1977</td>
                <td>200.000,00</td>
                <td>55.000</td>
                <td>15.000</td>
            </tr>
            <tr>
                <td>1979</td>
                <td>210.000,00</td>
                <td>48.570</td>
                <td>13.180</td>
            </tr>
            <tr>
                <td>1980</td>
                <td>230.158,25</td>
                <td>48.351</td>
                <td>18.640</td>
            </tr>
         </table>

         <h2>Formulário de Contato</h2>

     <!-- Caixa de mensagem -->
      <div id="mensagemSucesso" style="
     display: none;
     background-color: #d4edda;
     color: #155724;
     padding: 12px;
     margin-bottom: 15px;
     border: 1px solid #c3e6cb;
     border-radius: 5px;
     font-weight: bold;
">
    Cadastro realizado com sucesso!
</div>

<form id="formContato" action="{{ url('/contato') }}" method="post">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Mensagem:</label><br>
    <textarea name="mensagem" rows="5" required></textarea><br><br>

    <button type="submit">Enviar</button>
</form>

<script>
    document.getElementById("formContato").addEventListener("submit", function(event) {
        event.preventDefault();

        fetch(this.action, {
            method: this.method,
            body: new FormData(this),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        })
        .then(response => {
            if (response.ok) {
                this.reset(); // Limpa campos

                let msgBox = document.getElementById("mensagemSucesso");
                msgBox.style.display = "block"; // Mostra mensagem
                msgBox.textContent = "Cadastro realizado com sucesso!";

                // Some depois de 3 segundos
                setTimeout(() => {
                    msgBox.style.display = "none";
                }, 3000);
            } else {
                alert("Ocorreu um erro ao enviar o formulário.");
            }
         })
        .catch(() => {
            alert("Erro de conexão. Tente novamente.");
        });
     });
      </script>
    </main>
  </body>
 </html>
