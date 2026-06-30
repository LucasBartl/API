<?php

namespace Database\Factories;

use App\Models\Habit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        //Criando um conjunto de habitos
        $habits = [
            'Acordar cedo',
            'Arrumar a cama',
            'Beber água ao acordar',
            'Escovar os dentes',
            'Lavar o rosto',
            'Tomar café da manhã saudável',
            'Praticar exercícios físicos',
            'Fazer alongamento',
            'Meditar',
            'Ler por 30 minutos',
            'Estudar',
            'Praticar programação',
            'Aprender algo novo',
            'Planejar o dia',
            'Revisar metas',
            'Anotar tarefas',
        ];

        return [
            'user_id' => User::factory(),
            'uuid' => fake()->uuid(),
            'title' => fake()->randomElement($habits)
        ];
    }
}
