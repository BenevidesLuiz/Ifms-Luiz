<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Shema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    
    public function up(): void{
        Schema::create('produto', function (Blueprint $table){
            $table-> id();
            $table-> string('nome');
            $table-> double('preco');
            $table-> string('imagem');
            $table-> timestamps();
            
        });
    } 

    public function down(): void{
        schema::dropIfExists('produto');
    }

};

