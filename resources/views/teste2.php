<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            color: #2c3e50; /* Azul escuro */
            font-size: 24px;
            margin-bottom: 20px;
        }
        h3 {
            color: #34495e; /* Azul mais claro */
            font-size: 20px;
            margin-bottom: 10px;
        }
        hr {
            border: none;
            border-top: 1px solid #bdc3c7; /* Cinza */
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Name and Email of the client</h2>

        <h3>{{$usuario->name}}</h3>
        <hr>
        <h3>{{$usuario->email}}</h3>
        <hr>   
    </div>
</body>
</html>
