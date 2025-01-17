<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de dias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
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
        .container {
            width: 80%;
            max-width: 800px; 
            height: 650px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            font-weight: 500;
            color: #1877f2; /* Azul do Facebook */
            margin-bottom: 20px;
        }
        h2 {
            font-weight: 500;
            color: #1877f2; /* Azul do Facebook */
            margin-bottom: 20px;
        }
        p {
            font-weight: 400;
            color: #4b4f56;
        }
        .button-container {
            display: flex;
            flex-wrap: wrap; 
            gap: 10px; 
            justify-content: center;
            margin-top: 20px;
        }
        button {
            font-family: 'Roboto', Arial, sans-serif;
            font-weight: 500;
            padding: 10px 20px;
            font-size: 14px;
            color: #fff;
            background-color: #1877f2;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
            background-color: #165cbb;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background: linear-gradient(135deg, #b3e5fc 0%, #42a5f5 100%); /* Gradiente do azul claro ao escuro */
            border-left: 5px solid #1877f2; /* Bordas coloridas para destacar */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            font-size: 16px;
            color: #333;
            text-align: center;
            /* Transition para suavizar animações */
            transition: background 0.5s ease-in-out;
        }

        .result .highlight {
            font-size: 24px; /* Maior para destacar o número */
            font-weight: bold;
            color: #1877f2; /* Azul para atrair atenção */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Quantos dias faltam?</h1>
        
        <!-- Formulário para inserir datas inicial e final -->
        <form action="/calculate-days" method="POST" class="mb-4">
            @csrf
            <div class="mb-2">
                <label for="start_date" class="form-label" style="font-weight: bold;">Data Inicial:</label>
                <input type="date" id="start_date" name="start_date" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="end_date" class="form-label" style="font-weight: bold;">Data Final:</label>
                <input type="date" id="end_date" name="end_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Calcular Diferença</button>
        </form>
        <h2 class="text-center mb-1">Feriados importantes</h2>
        <div class="button-container">
            <!-- setar botoes ja com data fim       -->
            <button onclick="setDates('2025-04-21')">Tiradentes</button>
            <button onclick="setDates('2025-09-07')">Independência</button>
            <button onclick="setDates('2025-10-12')">Nossa Senhora Aparecida</button>
            <button onclick="setDates('2025-11-02')">Finados</button>
            <button onclick="setDates('2025-12-25')">Natal</button>
        </div>
        <script>
        // Função para lidar com o clique dos botões
            function setDates(holidayDate) {
                const today = new Date(); // Data atual
                const formattedToday = today.toISOString().split('T')[0];

                // Preencher os campos
                document.getElementById('start_date').value = formattedToday;
                document.getElementById('end_date').value = holidayDate;
            }
        </script>
        <!-- Exibe o resultado -->
        @if (isset($differenceInDays))
            <div class="result">
                @if ($errorMessage) 
                    <p class="text-danger">{{ $errorMessage }}</p>
                @elseif(isset($startDate) && isset($endDate))
                    <p class="text-center mt-3">
                        A diferença entre <strong>{{ date('d/m/Y', strtotime($startDate)) }}</strong> e 
                        <strong>{{ date('d/m/Y', strtotime($endDate)) }}</strong> é de <strong>{{ abs($differenceInDays) }}</strong> dias.
                    </p>
                @endif
            </div>
        @endif
    </div>
</body>
</html>