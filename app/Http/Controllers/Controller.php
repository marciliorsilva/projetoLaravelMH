<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function paginaInicial(){
        $tituloPagina = "MH acesso :: Soluções em relógio de ponto e controle de acesso"; 
        return view('index',['titulo' => $tituloPagina]);
    }

    public function contato(){
        $tituloPagina = "MH acesso :: Contato";
        return view('contato',['titulo' => $tituloPagina]);
    }

    public function empresa(){
        $tituloPagina = "MH acesso :: Empresa";
        return view('empresa',['titulo' => $tituloPagina]);
    } 

    public function servicos(){
        $tituloPagina = "MH acesso :: Serviços";
        return view('servicos',['titulo' => $tituloPagina]);
    }
}
