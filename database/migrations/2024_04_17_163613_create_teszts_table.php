<?php

use App\Models\Kategoria;
use App\Models\Teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });
        Teszt::create([
            'kerdes' => 'Milyen színű a búzavirág?',
             'v1'=> 'kék',
             'v2'=> 'zöld',
             'v3'=> 'piros',
             'v4'=> 'sárga',
             'helyes'=> 'kék',
             'kategoriaId'=>Kategoria::all()->random()->id,
        ]);
        Teszt::create([
            'kerdes' => 'Milyen színű a levendula?',
             'v1'=> 'lila',
             'v2'=> 'kék',
             'v3'=> 'piros',
             'v4'=> 'sárga',
             'helyes'=> 'lila',
             'kategoriaId'=>Kategoria::all()->random()->id,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
