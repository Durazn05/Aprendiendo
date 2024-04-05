<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participantes;

class ParticipantesController extends Controller
{
    public function index()
    {
        $participantes = Participantes::get();

        
        return view('cursos.index', ['participantes'=> $participantes]);
    } 

}
