<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function(request $request){
    $nome = $request->input('nome');
    return $nome;
    });
    
    Route::get('receber/nome/idade', function(request $request){
        $nome = $request->input('nome');
        $idade = $request->input('idade');
        return 'Meu nome é ' . $nome . ', tenho ' . $idade . ' anos';
        }); 
    
        Route::get('receber/nome/data/cidade', function(Request $request){
            $nome = $request->input('nome');
            $ano = $request->input('ano');
            $cidade = $request->input('cidade');
            return 'Meu nome é ' . $nome . ' nasci no ano de ' . $ano . ' na cidade de ' . $cidade;
            }); 

            Route::get('receber/calculo', function(Request $request){
                $numeroUm = $request->input('primeiroNumero');
                $numeroDois = $request->input('segundoNumero');
                $resultado = $numeroUm + $numeroDois;
                return $resultado;
                });

                Route::get('receber/subtração', function(request $request){
                    $numeroUm = $request->input('primeiroNumero');
                    $numeroDois = $request->input('SegundoNumero');
                    $numeroTres = $request->input('terceiroNumero');
                    $resultado = $numeroUm - $numeroDois - $numeroTres;
                    Return $resultado;
                    });