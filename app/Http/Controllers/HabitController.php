<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitResquest;
use App\Http\Resources\HabitResource;
use App\Models\Habit;
use Illuminate\Http\Request;

class HabitController extends Controller
{

    public function index(){

        //Retornando uma lista com todos os habitos em json
        return HabitResource::collection(
            Habit::all()
        );

    }

    //Rota para coleta de um unico registro
    public function show(Habit $habit){

         return HabitResource::make($habit);

    }

    //Utilizando formRequest
    public function store(StoreHabitResquest $storeHabitResquest  ){
        
        //* Coletando dados validados pelo request
       $data = $storeHabitResquest->validated();

        //Adicionando o conteudo com os dados validandos em nosso banco
        $habit = Habit::created($data);

        //Retornando nosso Resource
        return HabitResource::make($habit);

    }
}
