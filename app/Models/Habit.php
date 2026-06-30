<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Habit extends Model
{
    //Para que possamos utilizar factorys com esse modo precisamos adicionar o uso dele 
    use HasFactory;
    use Notifiable;
}
