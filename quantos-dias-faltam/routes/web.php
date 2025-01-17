<?php

// use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;
// use Carbon\Carbon;

// Route::get('/', function () {
//     Carbon::setLocale('pt_BR');

//     // Pega a data atual
//     $today = Carbon::now()->translatedFormat('l, d \d\e F \d\e Y');

//     return view('date-calculator', [
//         'today' => $today,
//     ]);
// });

// Route::post('/calculate-days', function (Request $request) {
//     Carbon::setLocale('pt_BR'); 

//     // Recebe as datas de início e de fim do formulário
//     $startDate = $request->input('start_date');
//     $endDate = $request->input('end_date');  

//     // Verifica se as datas estão corretas (Data inicial menor que final)
//     if ($startDate && $endDate && $startDate > $endDate) {
//         return back()->with('error', 'A data inicial não pode ser maior que a data final!');
//     }

//     // Calcula a diferença em dias
//     $start = Carbon::parse($startDate);
//     $end = Carbon::parse($endDate);
//     $differenceInDays = $start->diffInDays($end);

//     // Formata a data de hoje com tradução
//     $formattedToday = Carbon::now()->translatedFormat('l, d \d\e F \d\e Y'); 

//     // Retorna a view com as variáveis
//     return view('date-calculator', [
//         'startDate' => $startDate,
//         'endDate' => $endDate,
//         'differenceInDays' => $differenceInDays,
//         'today' => $formattedToday,
//     ]);
// });

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Carbon\Carbon;

Route::get('/', function () {
    return view('date-calculator');
});

Route::post('/calculate-days', function (Request $request) {
    Carbon::setLocale('pt_BR'); // Configura o idioma para português
    
    // Recebe as datas do formulário
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    
    // Verifica se as datas são válidas
    $errorMessage = '';
    try {
        if ($startDate > $endDate) {
            throw new Exception('Erro: A data inicial não pode ser posterior à data final.');
        } else {
            // Calcula a diferença em dias
            $today = Carbon::now();
            
            // Calcula a diferença entre a data inicial e final
            $differenceInDays = Carbon::parse($endDate)->diffInDays(Carbon::parse($startDate), false);
            $differenceInDays = ceil($differenceInDays);
            
            // Formata a data de hoje com tradução
            $formattedToday = $today->translatedFormat('l, d \d\e F \d\e Y'); // Ex.: Segunda-feira, 15 de Janeiro de 2025
            
            // Retorna a view com as variáveis
            return view('date-calculator', [
                'startDate' => $startDate,
                'endDate' => $endDate,
                'differenceInDays' => $differenceInDays,
                'today' => $formattedToday,
                'errorMessage' => $errorMessage, // Adiciona a mensagem de erro, se existir
            ]);
        }
    } catch (Exception $e) {
        return response()->view('errors.custom', ['message' => $e->getMessage()], 500);
    }
});
