<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bora add Usuario</title>
    <style>
        /* Estilos para centralizar elementos */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        .users-list {
            text-align: left;
            max-height: 400px; /* Altura máxima para a lista */
            overflow-y: auto; /* Adiciona barra de rolagem vertical */
            margin-bottom: 20px; /* Espaço abaixo da lista */
        }
        .user-item {
            margin-bottom: 10px;
        }
        .fullscreen-img {
            width: 100%;
            max-width: 600px;
            height: auto;
            cursor: pointer;
            display: block; /* Mostra a imagem */
            margin-bottom: 20px; /* Espaço abaixo da imagem */
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Lista de usuários</h1>
        
        <a href="/usuario/create">
            <img class="fullscreen-img" src="click.jpg" alt="click">
        </a>

        <div class="users-list">
            @foreach($usuarios as $item)
                <div class="user-item">
                    <h3>{{$item->name}}</h3>
                    <a href="usuario/{{$item->id}}">Ver usuário</a>
                    <a href="usuario/{{$item->id}}/edit">editar usuário</a>
                    <form action="usuario/{{$item->id}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Deletar</button>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
