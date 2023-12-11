<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500&display=swap" rel="stylesheet">
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
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      padding: 40px;
      text-align: center;
      max-width: 600px;
      width: 100%;
      animation: fadeInUp 1s ease-in-out;
    }
    h1 {
      color: #2c3e50;
      font-size: 36px;
      margin-bottom: 20px;
    }
    h2 {
      color: #2980b9;
      font-size: 28px;
      margin-bottom: 20px;
    }
    p {
      color: #34495e;
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 30px;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #2980b9;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease-in-out;
    }
    .btn:hover {
      background-color: #34495e;
    }
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Produto</h2>

        <h3>{{$produto->nome}}</h3>
        <hr>
        <h3>{{$produto->preco}}</h3>
        <hr>
        <h3>{{$produto->imagem}}</h3>
        <hr>   
    </div>
</body>
</html>
