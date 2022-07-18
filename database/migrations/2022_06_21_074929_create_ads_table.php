<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained();
            $table->string('title');
            $table->char('price',10);
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.php
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ads',function(Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['category_id']);
        });
        Schema::dropIfExists('ads');
    }
};
