<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Controller
{
    public function show($cep)
    {
        $Listaceps = explode(",", $cep);
        
        $client = new Client();
        
        $res = '';
        //$teste = json_encode(``, true);
        foreach ($Listaceps as $cp){
            $response = $client->request('GET', 'https://viacep.com.br/ws/' .$cp. '/json/');
            
            $data = $response->getBody()->getContents();
            
            $res = $res . PHP_EOL  . $data;


        }
        
        return view('user.show', ['consulta' => $res]);
    }

    public function tratarDados($dados)
    {
        
        print $dados;
    }
 
}
