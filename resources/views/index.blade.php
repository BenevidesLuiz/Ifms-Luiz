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
            background-color: #e6f7ff; /* Azul claro */
        }

        .content {
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-family: 'Arial Black', sans-serif;
            font-size: 36px;
            color: #004d99; /* Azul escuro */
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
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .user-item h3 {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 24px;
            color: #004d99; /* Azul escuro */
        }

        .user-item a {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid #004d99; /* Azul escuro */
            border-radius: 4px;
            color: #004d99; /* Azul escuro */
            transition: background-color 0.3s ease, transform 0.3s ease, color 0.3s ease;
        }

        .user-item a:hover {
            background-color: #004d99; /* Azul escuro */
            color: #fff;
            transform: scale(1.05);
        }

        .user-item form {
            display: inline-block;
            margin: 0;
        }

        .user-item button {
            padding: 10px 20px;
            border: 1px solid #cc0000; /* Vermelho */
            border-radius: 4px;
            background-color: #cc0000; /* Vermelho */
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .user-item button:hover {
            background-color: #ff1a1a; /* Vermelho mais claro */
            transform: scale(1.05);
        }

        .add-user-btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #004d99; /* Azul escuro */
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-user-btn:hover {
            background-color: #003366; /* Azul mais escuro */
        }

        .user-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    
    <div class="content">
        <h1>Ferramentas de Manipulação do Adm</h1>
        <!-- Botão para criar novo usuário -->
        <a href="/produto/create" class="add-user-btn">Inserir Novo Produto</a>

        <div class="users-list">
            @foreach($produto as $item)
                <div class="user-item">
                    <h3>{{$item->nome}}</h3>
                    <!-- Botões para ver, editar e excluir usuário -->
                    <a href="produto/{{$item->id}}">Ver produto</a>
                    <a href="produto/{{$item->id}}/edit">Editar produto</a>
                    <form action="produto/{{$item->id}}" method="post">
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
