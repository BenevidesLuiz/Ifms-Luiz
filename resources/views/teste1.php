<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suport</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.content {
    padding: 20px;
    text-align: center;
}

h1 {
    font-family: 'Arial Black', sans-serif;
    font-size: 36px;
    color: #555;
    padding: 20px 0;
}

.users-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    justify-content: center;
}

.user-item {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.user-item h3 {
    margin-top: 0;
    margin-bottom: 15px;
    font-size: 24px;
    color: #555;
}

.user-item a {
    display: block;
    margin-bottom: 10px;
    text-decoration: none;
    padding: 10px 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    color: #555;
    transition: background-color 0.3s ease;
}

.user-item a:hover {
    background-color: #e0e0e0;
    transform: scale(1.05);
}

.user-item form {
    display: inline-block;
    margin: 0;
}

.user-item button {
    padding: 10px 20px;
    border: 1px solid #f00;
    border-radius: 4px;
    background-color: #f00;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.user-item button:hover {
    background-color: #d00;
    transform: scale(1.05);
}

.add-user-btn {
    display: block;
    text-decoration: none;
    margin-bottom: 20px;
    padding: 10px 20px;
    border: 1px solid #f00;
    border-radius: 4px;
    background-color: #f00;
    color: #fff;
    transition: background-color 0.3s ease;
}

.add-user-btn:hover {
    background-color: #d00;
}

.user-item:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}
.add-user-btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #f00;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-user-btn:hover {
            background-color: #d00;
        }
    </style>
</head>
<body>
    
    <div class="content">
        <h1>Ferramentas de Manipulação do Adm</h1>
        <script>
            // Senha correta
            var senhaCorreta = "123";

            // Função para solicitar a senha ao usuário
            function solicitarSenha() {
                var senha = prompt("Por favor, digite a senha para acessar esta página:");

                // Verificar se a senha está correta
                if (senha === senhaCorreta) {
                    // Senha correta, permitir acesso
                    alert("Bem-vindo! Acesso concedido.");
                } else {
                    // Senha incorreta, recarregar a página
                    alert("Senha incorreta. A página será recarregada.");
                    location.reload();
                }
            }

            // Chamar a função ao carregar a página
            window.onload = solicitarSenha;
        </script>
        
        <!-- Botão para criar novo usuário -->
        <a href="/usuario/create" class="add-user-btn">Inserir Novo Usuário</a>

        <div class="users-list">
            @foreach($usuarios as $item)
                <div class="user-item">
                    <h3>{{$item->name}}</h3>
                    <!-- Botões para ver, editar e excluir usuário -->
                    <a href="usuario/{{$item->id}}">Ver usuário</a>
                    <a href="usuario/{{$item->id}}/edit">Editar usuário</a>
                    <form action="usuario/{{$item->id}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Excluir</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>