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
            $ano = $request->input('data');
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
                    $numeroDois = $request->input('segundoNumero');
                    $numeroTres = $request->input('terceiroNumero');
                    $resultado = $numeroUm - $numeroDois - $numeroTres;
                    return $resultado;
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
                    $primeironumero = $request->input ('primeiroNumero');
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
                            
                        Route::get('exemplo/condição', function (Request $request) {
                         $idade = $request->input('idade');
                         $retorno = "";
                         if($idade >=18){
                             $retorno = "Maior de idade";
                         }
                         else{
                            $retorno = "Menor de idade";
                         }
                         return $retorno;
                        });

                        Route::get('verificar/idade', function(Request $request){
                               $idade = $request->input('idade');

                               if($idade >= 18){
                                return "maior de idade";
                               } else {
                                return "menor de idade";
                               }
                        });

                        Route::get('verificar/par', function(Request $request){
                          $numero = $request->input('numero');

                          if($numero % 2 == 0){
                            return 'par';
                          } else {
                            return 'impar';
                          }
                        });

                        Route::get('enviar/numero', function(Request $request){
                            $numero = $request->input('numero');
                            
                            if($numero > 10){
                                return "maior que 10";
                            } else {
                                return "menor que 10";
                            }
                        });

                        Route::get('verificar/calor', function(Request $request){
                               $calor = $request->input('calor');

                               if($calor > 30){
                                return "Está quente";
                               } else {
                                 return "Não está quente";
                               }
                        });

                        Route::get('verificar/maior', function(Request $request){
                            $numeroUm = $request->input('numeroUm');
                            $numeroDois = $request->input('numeroDois');

                            if($numeroUm > $numeroDois){
                                return "maior";
                            } else { 
                               return "menor";
                            }
                        });

                        Route::get('informar/divisao', function(Request $request){
                            $numero = $request->input('numero');

                            if($numero % 3 == 0){
                                return "divisivel por 3";
                            } else {
                                return "não divisivel por 3";
                            }
                        });

                        Route::get("determine/numero" , function(Request $request){
                            $numero = $request-> input ('numero');
                           
                            if($numero > 0){
                            return "é positivo";
                            }
                            if($numero < 0){
                            return "é negativo";
                            } else {
                        return "é zero";
                            }
                        });
                            