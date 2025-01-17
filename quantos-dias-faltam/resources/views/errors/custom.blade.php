<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }
        h1 {
            font-weight: 500;
            color: #1877f2; /* Azul do Facebook */
            margin-bottom: 20px;
        }
        p {
            font-weight: 400;
            color: #4b4f56;
        }        
        .btn {
           display: inline-block;
           padding: 10px 20px;
           background-color: #007bff; /* Cor de fundo */
           color: white;
           text-decoration: none;
           border-radius: 5px;
           font-size: 16px;
           transition: background-color 0.3s ease;
         }
     
         .btn:hover {
           background-color: #0056b3; /* Cor de fundo ao passar o mouse */
         }
    </style>     
</head>
<body>
    <div class="container mt-5">
        <h1>Ops! Algo deu errado.</h1>
        <p>{{ $message }}</p>
        <a href="{{ url('/') }}" class="btn">Voltar para a página inicial</a>
    </div>
</body>
</html>
