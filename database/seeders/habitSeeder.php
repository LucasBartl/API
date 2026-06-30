<?php

namespace Database\Seeders;

use App\Models\Habit;
use App\Models\HabitLog;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class habitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::all() //Pegando todos os usuários do sistema
            ->each(function (User $user) {
                $habits = Habit::factory()
                    ->count(10)// Número que sera gerado
                    ->create(['user_id' => $user->id]); //Gerando habitos para cada

                $habits->each(function (Habit $habit) {
                    HabitLog::factory()
                        ->count(rand(10, 20))// Número que sera gerado
                        ->create(['habit_id' => $habit->id]);
                });
            });
    }
}
