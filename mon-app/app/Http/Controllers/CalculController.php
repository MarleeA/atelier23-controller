<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CalculController extends Controller
{
    public function numbertest($nombre) {

        if ($nombre % 2 == 0 ) {
            return "<h1>Le nombre '. $nombre .' est paire </h1>"; 
            
        } else{
            
            return "<h1>Le nombre .' $nombre '. est impaire </h1>"; 
        }
       
    }

    public function addition(Request $request) {
        $valeur1 = $request->json('valeur1');
        $valeur2 = $request->json('valeur2');

        return response()->json([
        'addition'=>[
            'response'=> $valeur1 + $valeur2

        ]]);
    }
    
    public function multiplication(Request $request) {
        $tableau = $request->json('nombre');

        foreach ($tableau as $value) {
            return $nombre *= $value;
        }

        // return response()->json([
        // 'multiplication'=>[
        //     'response'=> $valeur1 * $valeur2

        // ]]);
    }
    
    public function show() {
        return response("<h1> Je suis une théière </h1>", 418);
    }

    public function division() {
        return response("Not Found", 404);
    }

    public function substraction() {
        return response("Not Found", 404);
    }

}