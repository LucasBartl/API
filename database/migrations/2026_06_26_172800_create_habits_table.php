<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('habits', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignIdFor(User::class)->constrained();// <- Definindo chave estrangeira e classe referenciada
            $table->string('title');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('habits');
    }
};
