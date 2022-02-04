<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoPrincipal;
use App\Models\Pousada;
use App\Models\PousadaReg;

class PaginaPrincipalController extends Controller
{
    public function paginaPrincipal(){

        $info = InfoPrincipal::first();
        $pousada = null;

        $pousadasReg = PousadaReg::all();
        $pousadas = [];
        foreach ($pousadasReg as $value) {
            if (Pousada::where('pousada_reg_id', $value->id)->first()) {
                $pousadas[] = Pousada::with('pousadaReg')->where('pousada_reg_id', $value->id)->first();
            }
        }
        return view('welcome', compact('info', 'pousadas'));
    }

//     public function listaUmaPousadaUsuario($pousada_reg_id, Request $request)
//     {
//         $idFoto = false;
//         $pousadaImgs = Pousada::with('pousadaReg')->where('pousada_reg_id', $pousada_reg_id)->get();
//         // dd($pousadaImgs[0]->pousadaReg->id);
//         $idFoto = !$request->id ? Pousada::where('pousada_reg_id', $pousadaImgs[0]->pousadaReg->id)->first() : Pousada::find($request->id);
//  //dd($idFoto);
//         return view('umaPousada', compact('pousadaImgs', 'idFoto'));
//     }
}
