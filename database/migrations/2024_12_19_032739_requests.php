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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->text('problem');
            $table->date('repair_date');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('car_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });

        DB::table('cars')->insert([
            [
                'problem' => 'Поменять колёса',
                'repair_date' => 'Япония',
                'user_id' => '1',
                'car_id' => '1'
            ],
            [
                'problem' => 'Поменять колёса',
                'repair_date' => 'Япония',
                'user_id' => '1',
                'car_id' => '1'
            ],
            [
                'problem' => 'Поменять колёса',
                'repair_date' => 'Япония',
                'user_id' => '1',
                'car_id' => '1'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
