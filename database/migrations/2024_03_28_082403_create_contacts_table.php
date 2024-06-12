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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("nom",20);
            $table->string("prenom",20);
            $table->string("entreprise",30)->nullable();
            $table->string("telephone",10)->nullable();
            $table->string("email")->nullable();
            $table->string("adresse",100);
            $table->string("codePostal",5);
            $table->string("ville",50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
