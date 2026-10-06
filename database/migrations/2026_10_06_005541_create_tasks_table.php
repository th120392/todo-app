php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * マイグレーション実行時（php artisan migrate）
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();                              
            $table->string('name', 100);               
            $table->boolean('status')->default(false); 
            $table->timestamps();                      
        });
    }

    /**
     * 巻き戻し時（php artisan migrate:rollback）
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
