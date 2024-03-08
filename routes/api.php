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

                    Route::get('Receber/divisão', function(request $request){
                        $numeroUm = $request->input('primeiroNumero');
                        $numeroDois = $request->input('segundoNumero');
                        $resultado = $numeroUm / $numeroDois;
                        Return $resultado;
                    });

                    Route::get('receber/multiplicação', function(request $request){
                        $numeroUm = $request->input('primeiroNumero');
                        $numeroDois = $request->input('segundoNumero');
                        $resultado = $numeroUm * $numeroDois;
                        Return $resultado;
                    });

                    Route::get('receber/media', function (request $request){
                        $numeroUm = $request->input('primeiroNumero');
                        $numeroDois = $request->input('segundoNumero');
                        $numeroTres = $request->input('terceiroNumero');
                        $numeroQuatro = $request->input('quartoNumero');
                        $numeroCinco = $request->input('quintoNumero');
                        $resultado = ($numeroUm + $numeroDois + $numeroTres + $numeroQuatro + $numeroCinco) /5;
                        return $resultado;
                    });

                    Route::get('receber/divisa', function (request $request){
                        $numeroUm = $request->input('primeiroNumero');
                        $numeroDois = $request->input('segundoNumero');
                        $resultado = $numeroUm / $numeroDois;
                        return $resultado;
                    });
    
                    Route::get('receber/dobro', function(request $request){

                        $primeironumero = $request->input ('primeironumero');
                        $resultado = $primeironumero * '2';
                        return ' dobro do ' . $primeironumero . ' é igual a ' .$resultado;
                        
                        });

                        route::get('receber/area', function (request $request) {
                            $numeroUm = $request->input('base');
                            $numeroDois = $request ->input('altura');
                            $resultado = "a area é " . $numeroUm * $numeroDois;
                            return $resultado;
                        });

                        Route::get('mouse',function(Request $request){
                            $valororiginal = $request->input('valor');
                            $desconto = $request->input('desconto');
                            $porcentagem = $valororiginal / 100;
                            $resultado  = $valororiginal - ($porcentagem * $desconto);
                            return ' o valor do produto é ' . $valororiginal . ' com o desconto de ' . $desconto . ' o valor atual e de ' . $resultado;
                        });

                        Route::get('not',function(Request $request){
                            $salarioantigo = $request->input('salarioantigo');
                            $aumento = $request->input('aumento');
                            $porcentagem = $salarioantigo / 100;
                            $resultado  = $salarioantigo + ($porcentagem * $aumento);
                            return $resultado;
                        });

                        Route::get('icore',function(Request $request){
                            $valorinicial = $request-> input('valor');
                        $resultado = $valorinicial / 10;
                        return $resultado;
                        });

                        Route::get('nvidia',function(Request $request){
                            $preçoproduto = $request->input('preçoproduto');
                            $comissão = $request->input('comissão');
                            $porcentagem = $preçoproduto / 100;
                            $resultado  = $preçoproduto + ($porcentagem * $comissão);
                            return $resultado;
                        });
        
                        Route::get('dell', function (request $request) {
                    
                            $dias = $request->input('dias');
                        
                            $horas = $dias * 24;
                        
                            $minutos = $horas * 60;
                        
                            $segundos = $minutos * 60;
                        
                            $resultado = "dias: " . $dias . ", horas: " . $horas . ", minutos: " . $minutos . ", segundos: " . $segundos;
                        
                            return $resultado;
                        });

                        Route::get('mercado', function (request $request) {
                            $precoProduto = $request->input('Produto');
                            
                            $quantidade = $request->input('quantidade');
                            $resultado = "valor total: " . $precoProduto * $quantidade;
                            return $resultado;
                            });        