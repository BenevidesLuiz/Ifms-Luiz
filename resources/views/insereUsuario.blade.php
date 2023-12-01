<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Usuários</title>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Black Ops One', cursive;
            background-color: #f0f0f0;
            color: #333;
            padding-top: 20px;
        }
        h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 30px;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn {
            font-family: 'Black Ops One', cursive;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

<h2>Inserir Usuário</h2>
<div class="container">
    <form action="/usuario" method="POST" class="needs-validation">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" maxlength="50" class="form-control" placeholder="Digitar o Nome do usuário" required>
            <div class="invalid-tooltip">O Nome deve iniciar com letra Maiúscula...</div>
        </div>

        <div class="form-group">
            <label>E-mail</label>
            <input type="text" name="email" class="form-control" placeholder="Digitar o E-mail do usuário" required>
            <div class="invalid-tooltip">A e-mail deve ser válido...</div>
        </div>

        <div class="form-group">
            <label>Senha</label>
            <input name="senha" type="number" min="1930" max="2030" step="1" class="form-control" placeholder="Digitar a Senha do Usuário" required>
            <div class="invalid-tooltip">A Senha deve conter...</div>
        </div>

        <div class="form-group">
            <label>Confirmar Senha</label>
            <input name="senha" type="number" min="1930" max="2030" step="1" class="form-control" placeholder="Confirmar a Senha do usuário" required>
            <div class="invalid-tooltip">A Senha deve conter...</div>
        </div>

        <div class="form-group">
            <a class="btn btn-dark" href="/usuario" style="margin-right: 6px">Cancelar</a>
            <input type="submit" name="btn" id="insereEnter" value="Enviar" onclick="validarFormulario(event)" class="btn btn-success">
        </div>
    </form>
</div>

<script>
    function validarFormulario(event) {
        var form = document.querySelector('.needs-validation');

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            form.classList.add('was-validated');
        }
    }

    var form = document.querySelector('.needs-validation');
    var inputs = form.querySelectorAll('input');

    inputs.forEach(function(input) {
        input.addEventListener('input', function() {
            if (input.checkValidity()) {
                input.classList.remove('is-invalid');
                input.classList.add('is-valid');
            } else {
                input.classList.remove('is-valid');
                input.classList.add('is-invalid');
            }
        });
    });

    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
