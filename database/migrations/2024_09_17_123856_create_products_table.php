<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->integer('quantity')->default(0); // Добавлено поле для количества
            $table->text('description')->nullable();
            $table->timestamps();
        });
    
        // Заполнение таблицы данными
        DB::table('products')->insert([
            [
                'name' => 'Продукт 1',
                'price' => 100.00,
                'quantity' => 10, // Пример количества
                'description' => 'Описание продукта 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Продукт 2',
                'price' => 150.00,
                'quantity' => 5, // Пример количества
                'description' => 'Описание продукта 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
