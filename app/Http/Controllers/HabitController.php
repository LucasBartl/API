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
    //Rota de criaçao de habitos
    public function store(StoreHabitResquest $storeHabitResquest  ){
        
        //* Coletando dados validados pelo request
       $data = $storeHabitResquest->only('title', 'uuid');
        
        //Adicionando o conteudo com os dados validandos em nosso banco
        $habit = Habit::create(array_merge($data, ['user_id' => 1]));

        //Retornando nosso Resource
        return HabitResource::make($habit);

    }
}
