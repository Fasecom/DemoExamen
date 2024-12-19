<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('make');
            $table->string('model');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        
        DB::table('cars')->insert([
            [
                'number' => '12356',
                'make' => 'Тоёта',
                'model' => 'Поло',
                'user_id' => '2'
            ],
            [
                'number' => '43243',
                'make' => 'Тоята',
                'model' => 'Туарек',
                'user_id' => '1'
            ],
            [
                'number' => '21354',
                'make' => 'Ауди',
                'model' => 'q8',
                'user_id' => '2'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
