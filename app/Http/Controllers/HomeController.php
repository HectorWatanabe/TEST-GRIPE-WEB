<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    	return view('welcome');
    }

    public function solution(Request $request)
    {
        $resputa1 = $request->gripe;
        $resputa2 = $request->dcabeza;
        $resputa3 = $request->fiebre;
        $resputa4 = $request->dmuscular;
        $resputa5 = $request->aojos;
        $resputa6 = $request->escalofrios;
        $resputa7 = $request->prespiratorios;
        $resputa8 = $request->dgarganta;
        $resputa9 = $request->tos;

        $lagripe = '';

        if($resputa1 == 'GripeComun')
        {
            $lagripe = 'Gripe Común';
        }

        if($resputa1 == 'GripeAH1N1')
        {
            $lagripe = 'Gripe A H1N1'; 
        }

        $nuevoarchivo = fopen('files/respuesta.txt', "w+");
        fwrite($nuevoarchivo,$resputa1
                                ."\n".$resputa2
                                ."\n".$resputa3
                                ."\n".$resputa4
                                ."\n".$resputa5
                                ."\n".$resputa6
                                ."\n".$resputa7
                                ."\n".$resputa8
                                ."\n".$resputa9);

        fclose($nuevoarchivo);
        exec("Rscript --Hector rs/tb2.R files/respuesta.txt", $output, $result_var);
        $findme   = ']';
        $pos = strpos($output[0], $findme);
        $rest = substr($output[0], $pos+1);
        return view('solution', [ 'lagripe' => $lagripe, 'rest' => $rest]);
    }
}
