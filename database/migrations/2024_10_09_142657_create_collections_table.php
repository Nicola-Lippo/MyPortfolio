<?php

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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            /* 
            foreignId('user_id'): Aggiunge una colonna user_id alla tabella posts che conterrà l'ID dell'utente a cui il post appartiene.
            constrained(): Collega automaticamente user_id alla colonna id della tabella users.
            onDelete('cascade'): Se l'utente collegato viene eliminato, anche i lavori relativi a quell'utente verranno eliminati automaticamente.
            */
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name', 100)->unique();
            $table->string('slug', 120);
            $table->text('description')->nullable();
            $table->string('path_img', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
