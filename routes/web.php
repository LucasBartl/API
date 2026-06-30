<?php

declare(strict_types=1);

use App\Http\Controllers\HabitController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn(): array => [config('app.name')]);

//Criando grupo de rotas
Route::prefix('/api')->name('api.')->group(function () {


    
    Route::get('/habits/{habit:uuid}', [HabitController::class, 'show'])->name('habits.show'); //* :uuid estamos falando que vai procurar nessa coluna
    Route::post('/habits', [HabitController::class, 'store'])->name('habits.store');
    Route::put('/habits/{habit:uuid}', [HabitController::class, 'update'])->name('habits.update');
    Route::delete('/habits/{habit:uuid}', [HabitController::class, 'destroy'])->name('habits.destroy');
    Route::get('/habits', [HabitController::class, 'index'])->name('habits.index');
    
    


});
