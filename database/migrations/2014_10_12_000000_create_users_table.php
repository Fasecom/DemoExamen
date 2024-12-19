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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('middlename');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('tel');
            $table->string('role')->default('Пользователь');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'name' => 'Максим',
                'middlename' => 'Маленьких',
                'surname' => 'Александрович',
                'email' => 'mrmax@mail.ru',
                'tel' => '79320191612',
                'role' => 'Механик',
                'password' => '$2y$12$9M1X3XTqDkGv.FQwwDA/yuPBr7SE9Inxuk/EVssLBe9KOcM4p8Z4e'
            ],
            [
                'name' => 'Иван',
                'middlename' => 'Иван',
                'surname' => 'Иванович',
                'email' => 'ivan@mail.ru',
                'tel' => '79320191615',
                'role' => 'Пользователь',
                'password' => '$2y$12$9M1X3XTqDkGv.FQwwDA/yuPBr7SE9Inxuk/EVssLBe9KOcM4p8Z4e'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
